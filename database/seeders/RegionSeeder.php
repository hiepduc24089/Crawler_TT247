<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = ['Miền Bắc', 'Miền Trung', 'Miền Nam'];
        $data = [];
        foreach ($regions as $region){
            $data[] = [
              'name' => $region,
              'created_at' => now(),
              'updated_at' => now(),
            ];
        }
        DB::table('regions')->insert($data);
    }
}
