<?php

namespace App\Console\Commands;

use App\Models\Province;
use App\Models\ProvincesDistrict;
use Illuminate\Console\Command;
use Goutte;

class Crawl_lichcupdien_area extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:lichcupdien_area';

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
        $areaUrls = [
            'https://lichcupdien.org/lich-cup-dien-an-giang',
            'https://lichcupdien.org/lich-cup-dien-quang-binh',
            'https://lichcupdien.org/lich-cup-dien-bac-giang',
        ];
        $allUrls = [];
        foreach ($areaUrls as $areaUrl) {
            $crawler = Goutte::request('GET', $areaUrl);

            $urls = $crawler->filter('.w3-container.w3-white.side-text > a.related-tags')->each(function ($node) use ($mainPageUrl) {
                return $mainPageUrl . $node->attr('href');
            });
            $allUrls = array_merge($allUrls, $urls);
        }
        foreach ($allUrls as $url) {
            $this->crawlPage($url);
        }
    }

    protected function crawlPage($url){
        $crawler = Goutte::request('GET', $url);

        //Crawl trang dien-luc-tinh
        $companyInfo = [
            'company_name' => null,
            'address' => null,
            'phone' => null,
            'fax' => null,
            'email' => null,
            'website' => null,
        ];
        $companyName = $crawler->filter('.table-cominfo thead th span')->first()->text();
        $companyInfo['company_name'] = trim($companyName);

        $crawler->filter('.table-cominfo tbody tr')->each(function ($node) use (&$companyInfo) {
            $key = $node->filter('td')->first()->text();
            $value = $node->filter('td span')->first()->text();

            switch (trim($key)) {
                case 'Địa chỉ':
                    $companyInfo['address'] = trim($value);
                    break;
                case 'Điện thoại':
                    $companyInfo['phone'] = trim($value);
                    break;
                case 'Fax':
                    $companyInfo['fax'] = trim($value);
                    break;
                case 'Email':
                    $companyInfo['email'] = trim($value);
                    break;
                case 'Website':
                    $companyInfo['website'] = trim($value);
                    break;
            }
        });
        $parsedUrl = parse_url($url);
        $pathParts = explode('/', $parsedUrl['path']);
        $slugArea = end($pathParts);
        $province = Province::where('slug_area', $slugArea)->first();

        try {
            if ($province) {
                $province->update($companyInfo);
                $this->info("Company information updated successfully for {$slugArea}");
            } else {
                $this->error("No matching province found for {$slugArea}");
            }
        } catch (\Exception $e) {
            $this->error("Failed to update company information: ", $e->getMessage());
        }

        //Crawl trang cac quan huyen
        $sidebarLinks = $crawler->filter('.lcd-sidebar-relate > a')->each(function ($node) {
            return [
                'district_name' => trim($node->text()),
                'slug_district' => ltrim($node->attr('href'), '/'),
            ];
        });
        $sidebarLinks = array_slice($sidebarLinks, 1);
        if ($province) {
            $provinceId = $province->id;

            foreach ($sidebarLinks as $sidebarLink) {
                try {
                    ProvincesDistrict::updateOrCreate(
                        ['slug_district' => $sidebarLink['slug_district']],
                        [
                            'district_name' => $sidebarLink['district_name'],
                            'slug_district' => $sidebarLink['slug_district'],
                            'province_id' => $provinceId,
                        ]
                    );
                    $this->info("Saved or updated district: " . $sidebarLink['district_name']);
                } catch (\Exception $e) {
                    $this->error("Failed to save district information for " . $sidebarLink['district_name'] . ": " . $e->getMessage());
                }
            }
        } else {
            $this->error("No matching province found for slug_area: " . $slugArea);
        }

        //update address
        $htmlContent = $crawler->filter('.chi-nhanh')->html();
        if ($htmlContent) {
            $updated = Province::where('slug_area', $slugArea)->update([
                'html_address' => $htmlContent,
            ]);
            if ($updated) {
                $this->info("HTML content updated successfully for slug_area: {$slugArea}");
            } else {
                $this->error("No matching province found for slug_area: {$slugArea}");
            }
        } else {
            $this->error("Fail to save HTML address") . $e->getMessage();
        }

        //update image
        $imageUrl = $crawler->filter('.w3-container > img')->first()->attr('src');
        $imageUrlSave = ltrim($imageUrl, '/');

        if ($province) {
            $province->update(['photo' => $imageUrlSave]);
            $this->info("Photo updated successfully for {$slugArea} with {$imageUrlSave}");
        } else {
            $this->error("No matching province found for {$slugArea}");
        }

        //Download Image

//        $imageUrl = $crawler->filter('.w3-container > img')->first()->attr('src');
//        $imageUrl = ltrim($imageUrl, '/');
//
//        $mainPageUrl = 'https://lichcupdien.org';
//        if (!filter_var($imageUrl, FILTER_VALIDATE_URL)) {
//            $imageUrl = $mainPageUrl . '/' . $imageUrl;
//        }
//
//        $imageName = basename($imageUrl);
//        $saveDir = 'lib/'; // Directory within public/ where images are saved
//        $savePath = public_path($saveDir . $imageName);
//
//        if (!file_exists(public_path($saveDir))) {
//            mkdir(public_path($saveDir), 0777, true);
//        }
//        $imageContent = file_get_contents($imageUrl);
//        file_put_contents($savePath, $imageContent);
//        $publicImagePath = $saveDir . $imageName;
//
//        if ($province) {
//            $province->update(['photo' => $publicImagePath]);
//            $this->info("Photo saved and path updated successfully for {$slugArea} with {$publicImagePath}");
//        } else {
//            $this->error("No matching province found for {$slugArea}");
//        }

        //update slug
        $lastSlug = str_replace("dien-luc-", "", $slugArea);
        if ($province) {
            $province->update(['last_slug' => $lastSlug]);
            $this->info("Updated successfully {$lastSlug}");
        } else {
            $this->error("Failed to updated {$lastSlug}");
        }
    }
}
