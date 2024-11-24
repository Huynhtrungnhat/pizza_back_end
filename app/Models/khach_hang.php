<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khach_hang extends Model
{
    use HasFactory;
    protected $table = 'khach_hang';
    protected $primaryKey = 'ma_khach_hang';
    protected $fillable=[
        'ma_khach_hang',
        'ten_khach_hang',
        'diachi',
        'sdt',
        'diem_mua_hang',
    ];

}
