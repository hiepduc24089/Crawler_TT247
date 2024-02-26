<?php

namespace App\Console\Commands;

use App\Models\ScheduleDetail;
use DateTime;
use Illuminate\Console\Command;
use Goutte;
use Illuminate\Support\Facades\Log;

class Crawl_lichcupdien_detail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:lichcupdien_detail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $mainPageUrl = 'https://lichcupdien.org';
        $crawler = Goutte::request('GET', $mainPageUrl);
        $urls = $crawler->filter('ul.w3-ul.w3-hoverable a.textnonedecor')->each(function ($node) use ($mainPageUrl) {
            return $mainPageUrl . $node->attr('href');
        });

        foreach ($urls as $index => $url) {
            $this->crawlPage($url, $index + 1);
        }
    }
    protected function crawlPage($url, $provinceId)
    {
        $crawler = Goutte::request('GET', $url);

        $names = [];
        $dates = [];
        $timeRanges = [];
        $areas = [];
        $reasons = [];
        $statuses = [];

        // Name
        $crawler->filter('.item_content_lcd_wrapper .item_txt_bold:not(.item_txt_red)')->each(function ($node) use (&$names) {
            $names[] = trim($node->text());
        });

        //Date
        $crawler->filter('.item_content_lcd_wrapper .item_txt_red')->each(function ($node) use (&$dates) {
            $dateText = trim($node->text());
            $dateText = str_replace([' tháng ', ' năm '], '/', $dateText);
            $dateObject = DateTime::createFromFormat('d/m/Y', $dateText);
            if ($dateObject) {
                $formattedDate = $dateObject->format('Y-m-d');
                $dates[] = $formattedDate;
            }
        });

        //Status
        $crawler->filter('.content_item_content_lcd_wrapper.lcd_check_trang_thai')->each(function ($node) use (&$statuses) {
            $statuses[] = trim($node->text());
        });

        //Time, Area, Reason
        $crawler->filter('.lcd_detail_wrapper .new_lcd_wrapper')->each(function ($node) use (&$timeRanges, &$areas, &$reasons) {
            $title = $node->filter('.title_item_lcd_wrapper')->text();
            $content = $node->filter('.content_item_content_lcd_wrapper')->text();
            switch (trim($title)) {
                case 'Thời gian:':
                    $times = $node->filter('.item_lcd_time')->each(function ($timeNode) {
                        return trim($timeNode->text());
                    });
                    if (!empty($times)) {
                        $timeRanges[] = "Từ " . implode(' đến ', $times);
                    }
                    break;
                case 'Khu vực:':
                    $areas[] = trim($content);
                    break;
                case 'Lý do:':
                    $reasons[] = trim($content);
                    break;
            }
        });
        //Slug
        $parsedUrl = parse_url($url);
        $path = trim($parsedUrl['path'], '/');
        $slugParts = explode('/', $path);
        $slug = end($slugParts);

        //Save to database
        for ($i = 0; $i < count($names); $i++) {
            try {
                $scheduleDetail = ScheduleDetail::updateOrCreate(
                    [
                        'slug' => $slug,
                        'name' => $names[$i],
                        'province_id' => $provinceId,
                        'date_cut' => $dates[$i],
                        'time_cut' => $timeRanges[$i],
                        'area' => $areas[$i],
                        'reason' => $reasons[$i],
                        'status' => $statuses[$i],
                    ]
                );

                if ($scheduleDetail) {
                    $this->info("Schedule detail for '{$names[$i]}' created/updated successfully.");
                } else {
                    $this->error("Failed to create/update schedule detail for '{$names[$i]}'.");
                }
            } catch (\Exception $e) {
                Log::error("Error creating/updating schedule detail for '{$names[$i]}': " . $e->getMessage());
                $this->error("An error occurred while creating/updating schedule detail for '{$names[$i]}'. Check logs for details.");
            }
        }
    }


}
