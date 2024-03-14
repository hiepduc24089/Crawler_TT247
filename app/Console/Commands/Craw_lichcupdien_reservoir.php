<?php

namespace App\Console\Commands;

use App\Models\Reservoir;
use Illuminate\Console\Command;
use Goutte;

class Craw_lichcupdien_reservoir extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:lichcupdien_reservoir';

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
        $url = 'https://lichcupdien.org/muc-nuoc-cac-ho-thuy-dien';

        try {
            $crawler = Goutte::request('GET', $url);

            $crawler->filter('.muc_nuoc_ho')->each(function ($node) {
                $name = trim($node->filter('.khu_vuc_ho_title')->text());
                $updateTime = trim($node->filter('.muc_nuoc_update_date span')->text());

                $details = [
                    'name' => $name,
                    'update_time' => $updateTime,
                    'muc_nuoc' => null,
                    'luu_luong' => null,
                    'tong_luong_xa' => null,
                    'tong_luong_xa_dap_tran' => null,
                    'tong_luong_xa_nha_may' => null,
                    'xa_sau' => null,
                    'xa_mat' => null,
                ];

                $node->filter('table tr')->each(function ($trNode) use (&$details) {
                    $label = strip_tags(html_entity_decode($trNode->filter('td')->first()->html()));
                    $value = trim($trNode->filter('td')->last()->text());

                    if (strpos($label, 'Mực nước thượng lưu') !== false) {
                        $details['muc_nuoc'] = $value;
                    } elseif (strpos($label, 'Lưu lượng đến hồ') !== false) {
                        $details['luu_luong'] = $value;
                    } elseif (strpos($label, 'Tổng lượng xả') !== false) {
                        $details['tong_luong_xa'] = $value;
                        if (strpos($label, 'qua đập tràn') !== false) {
                            $details['tong_luong_xa_dap_tran'] = $value;
                        } elseif (strpos($label, 'qua nhà máy') !== false) {
                            $details['tong_luong_xa_nha_may'] = $value;
                        }
                    } elseif (strpos($label, 'Số cửa xả sâu') !== false) {
                        $details['xa_sau'] = $value;
                    } elseif (strpos($label, 'Số cửa xả mặt') !== false) {
                        $details['xa_mat'] = $value;
                    }
                });
                Reservoir::updateOrCreate(['name' => $details['name']], $details);
            });

            $this->info('Successfully updated reservoir details.');
        } catch (\Exception $e) {
            $this->error("Failed to update reservoir details: {$e->getMessage()}");
        }
    }
}
