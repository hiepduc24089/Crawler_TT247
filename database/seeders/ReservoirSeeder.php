<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservoirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservoirRegion = DB::table('reservoirs')->pluck('id')->toArray();

        foreach ($reservoirRegion as $id) {
            if ($id == 1) {
                $region_id = 1;
            } elseif ($id >= 2 && $id <= 7) {
                $region_id = 2;
            } elseif ($id >= 8 && $id <= 9) {
                $region_id = 3;
            } elseif ($id >= 10 && $id <= 18) {
                $region_id = 4;
            } elseif ($id >= 19 && $id <= 35) {
                $region_id = 5;
            } else {
                $region_id = 6;
            }

            DB::table('reservoirs')->where('id', $id)->update(['region_id' => $region_id]);
        }
    }
}
