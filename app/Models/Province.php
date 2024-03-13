<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'provinces';
    public const NORTH = 3;
    public const CENTRAL = 2;
    public const SOUTH = 1;
    protected $fillable = [
        'name',
        'slug',
        'last_slug',
        'region_id',
        'slug_area',
        'company_name',
        'address',
        'phone',
        'fax',
        'email',
        'website',
        'html_address',
        'photo'
    ];

    protected $casts = [
        'name' => 'string',
        'slug' => 'string',
        'last_slug' => 'string',
        'region_id' => 'integer',
        'slug_area' => 'string',
        'company_name' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'fax' => 'string',
        'email' => 'string',
        'website' => 'string',
        'html_address' => 'string',
        'photo' => 'string'
    ];

    public function scheduleDetails()
    {
        return $this->hasMany(ScheduleDetail::class, 'province_id', 'id');
    }
    public function districts()
    {
        return $this->hasMany(ProvincesDistrict::class, 'province_id', 'id');
    }
}
