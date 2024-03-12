<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existingProvinceIds = DB::table('provinces')->pluck('id')->toArray();

        foreach ($existingProvinceIds as $id) {
            if ($id >= 1 && $id <= 22) {
                $region_id = 1;
            } elseif ($id >= 23 && $id <= 35) {
                $region_id = 2;
            } else {
                $region_id = 3;
            }

            DB::table('provinces')->where('id', $id)->update(['region_id' => $region_id]);
        }
    }
}
