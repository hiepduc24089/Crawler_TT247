<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservoir extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'reservoirs';

    protected $fillable = [
        'name',
        'update_time',
        'muc_nuoc',
        'luu_luong',
        'tong_luong_xa',
        'tong_luong_xa_dap_tran',
        'tong_luong_xa_nha_may',
        'xa_sau',
        'xa_mat',
        'region_id',
    ];

    protected $casts = [
        'name' => 'string',
        'update_time' => 'string',
        'muc_nuoc' => 'string',
        'luu_luong' => 'string',
        'tong_luong_xa' => 'string',
        'tong_luong_xa_dap_tran' => 'string',
        'tong_luong_xa_nha_may' => 'string',
        'xa_sau' => 'integer',
        'xa_mat' => 'integer',
        'region_id' => 'integer'
    ];
}
