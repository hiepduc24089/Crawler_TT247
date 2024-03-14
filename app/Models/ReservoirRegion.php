<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReservoirRegion extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'reservoir_regions';

    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'name' => 'string',
    ];
}
