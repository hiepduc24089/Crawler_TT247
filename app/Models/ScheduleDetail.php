<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScheduleDetail extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'schedule_details';

    protected $fillable = [
        'province_id',
        'name',
        'date_cut',
        'time_cut',
        'area',
        'reason',
        'status',
        'slug',
    ];

    protected $casts = [
        'province_id' => 'integer',
        'name' => 'string',
        'date_cut' => 'date',
        'time_cut' => 'string',
        'area' => 'string',
        'reason' => 'string',
        'status' => 'string',
        'slug' => 'string',
    ];
}