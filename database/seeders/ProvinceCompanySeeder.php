<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinceCompanyData = json_decode(file_get_contents(database_path('data/province_companies.json')), true);

        foreach ($provinceCompanyData as $provinceCompany) {
            DB::table('province_companies')->updateOrInsert(['id' => $provinceCompany['id']], [
                'id' => $provinceCompany['id'],
                'company_name' => $provinceCompany['company_name'],
                'company_district' => $provinceCompany['company_district'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
