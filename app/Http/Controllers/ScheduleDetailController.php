<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\ScheduleDetail;
use DateTime;
use Goutte\Client;
use Illuminate\Http\Request;

class ScheduleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provincesSouth = Province::where('region_id', Province::SOUTH)->get();
        $provincesCentral = Province::where('region_id', Province::CENTRAL)->get();
        $provincesNorth = Province::where('region_id', Province::NORTH)->get();

        return view('index', compact('provincesSouth', 'provincesCentral', 'provincesNorth'));
    }

    public function show($slug)
    {
        $province = Province::where('slug', $slug)->first();

        if (!$province) {
            abort(404, 'Province not found.');
        }

        $scheduleDetailsGroupedByDate = $province->scheduleDetails->groupBy(function ($item) {
            return $item->date_cut->format('Y-m-d');
        });

        if ($scheduleDetailsGroupedByDate->isEmpty()) {
            abort(404, 'Schedule details not found for this province.');
        }

        $provincesSouth = Province::where('region_id', Province::SOUTH)->get();
        $provincesCentral = Province::where('region_id', Province::CENTRAL)->get();
        $provincesNorth = Province::where('region_id', Province::NORTH)->get();

        return view('show', compact('scheduleDetailsGroupedByDate', 'province', 'provincesSouth', 'provincesCentral', 'provincesNorth'));
    }

}
