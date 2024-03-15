<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RegionSeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(ReservoirRegionSeeder::class);
        $this->call(ReservoirSeeder::class);
        $this->call(ProvinceCompanySeeder::class);
    }
}
