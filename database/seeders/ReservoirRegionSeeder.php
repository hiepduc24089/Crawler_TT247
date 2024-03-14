<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservoirRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = ['Đông Bắc Bộ', 'Tây Bắc Bộ', 'Bắc Trung Bộ', 'Nam Trung Bộ', 'Tây Nguyên', 'Đông Nam Bộ'];
        $data = [];
        foreach ($regions as $region){
            $data[] = [
                'name' => $region,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('reservoir_regions')->insert($data);
    }
}
