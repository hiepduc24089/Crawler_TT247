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
        'region_id',
    ];

    protected $casts = [
        'name' => 'string',
        'slug' => 'string',
        'region_id' => 'integer',
    ];

    public function scheduleDetails()
    {
        return $this->hasMany(ScheduleDetail::class, 'province_id', 'id');
    }
}
