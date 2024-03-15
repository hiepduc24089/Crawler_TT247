<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\ProvincesDistrict;
use App\Models\Reservoir;
use App\Models\ReservoirRegion;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        $province = Province::where('last_slug', $slug)->first();

        if (!$province) {
            abort(404, 'Province not found.');
        }
        $scheduleDetails = $province->scheduleDetails ?? collect([]);

        $scheduleDetailsGroupedByDate = $scheduleDetails->groupBy(function ($item) {
            return $item->date_cut->format('Y-m-d');
        });

        $provincesSouth = Province::where('region_id', Province::SOUTH)->get();
        $provincesCentral = Province::where('region_id', Province::CENTRAL)->get();
        $provincesNorth = Province::where('region_id', Province::NORTH)->get();

        $provicesDistricts = ProvincesDistrict::where('province_id', $province->id)->get();

        return view('show', compact('scheduleDetailsGroupedByDate', 'province',
            'provincesSouth', 'provincesCentral', 'provincesNorth', 'provicesDistricts'));
    }

    public function showArea($slugArea)
    {
        $province = Province::where('slug_area', $slugArea)->first();

        $provicesDistricts = ProvincesDistrict::where('province_id', $province->id)->get();

        $provincesSouth = Province::where('region_id', Province::SOUTH)->get();
        $provincesCentral = Province::where('region_id', Province::CENTRAL)->get();
        $provincesNorth = Province::where('region_id', Province::NORTH)->get();

        return view('show_area', compact('province', 'provicesDistricts',
            'provincesSouth', 'provincesCentral', 'provincesNorth'));
    }

    public function showDistrict($slugDistrict)
    {
        $provinceDistricts = ProvincesDistrict::with('province')->where('slug_district', $slugDistrict)->firstOrFail();
        $districts = ProvincesDistrict::where('province_id', $provinceDistricts->province_id)->get();

        $provincesSouth = Province::where('region_id', Province::SOUTH)->get();
        $provincesCentral = Province::where('region_id', Province::CENTRAL)->get();
        $provincesNorth = Province::where('region_id', Province::NORTH)->get();

        $scheduleDetails = DB::table('schedule_details')
            ->join('province_companies', 'schedule_details.name', '=', 'province_companies.company_name')
            ->join('provinces_districts', function ($join) use ($slugDistrict, $provinceDistricts) {
                $join->on('province_companies.company_district', '=', 'provinces_districts.district_name')
                    ->where('provinces_districts.slug_district', '=', $slugDistrict)
                    ->where('schedule_details.province_id', '=', $provinceDistricts->province_id);
            })
            ->select('schedule_details.*')
            ->get();

        $scheduleDetailsGroupedByDate = $scheduleDetails->groupBy(function ($item) {
            $date = Carbon::parse($item->date_cut);
            return $date->format('Y-m-d');
        });

        return view('show_district', compact('provinceDistricts', 'districts',
            'provincesSouth', 'provincesCentral', 'provincesNorth', 'scheduleDetails', 'scheduleDetailsGroupedByDate'));
    }

    public function showReservoir()
    {
        $reservoirs = Reservoir::get();

        $provincesSouth = Province::where('region_id', Province::SOUTH)->get();
        $provincesCentral = Province::where('region_id', Province::CENTRAL)->get();
        $provincesNorth = Province::where('region_id', Province::NORTH)->get();

        $reservoirRegions = ReservoirRegion::get();

        return view('show_reservoir', compact('reservoirs', 'reservoirRegions',
            'provincesSouth', 'provincesCentral', 'provincesNorth'));
    }
}
