<?php

namespace App\Console\Commands;

use App\Models\Province;
use Illuminate\Console\Command;
use Goutte;

class Crawl_lichcupdien extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:lichcupdien';

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
        try {
            $mainPageUrl = 'https://lichcupdien.org/';
            $crawler = Goutte::request('GET', $mainPageUrl);

            $names = $crawler->filter('h3.m1-large.m1-home')->each(function ($node) {
                return trim($node->text());
            });

            $urls = $crawler->filter('ul.w3-ul.w3-hoverable a.textnonedecor')->each(function ($node) use ($mainPageUrl) {
                return $mainPageUrl . ltrim($node->attr('href'), '/');
            });

            foreach ($names as $index => $name) {
                if (isset($urls[$index])) {
                    $parsedUrl = parse_url($urls[$index]);
                    $path = trim($parsedUrl['path'], '/');
                    $slugParts = explode('/', $path);
                    $slug = end($slugParts);

                    $data = [
                        'name' => $name,
                        'slug' => $slug,
                    ];
                } else {
                    $data = [
                        'name' => $name,
                        'slug' => null,
                    ];
                }

                $province = Province::create($data);
                if ($province) {
                    $this->info("Successfully saved to database: " . $name);
                } else {
                    $this->error("Failed to save: " . $name);
                }
            }
        } catch (\Exception $e) {
            $this->error("An error occurred: " . $e->getMessage());
        }
    }
}
