<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProvincesDistrict extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'district_name',
        'province_id',
        'slug_district'
    ];

    protected $casts = [
        'district_name' => 'string',
        'province_id' => 'integer',
        'slug_district' => 'string',
    ];
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }
}
