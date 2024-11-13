<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khach_hang extends Model
{
    protected $table = 'khach_hang';
    protected $primakeKey='ma_khach_hang';

    protected $fillable=[
        'ma_khach_hang',
        'ten_khach_hang',
<<<<<<< HEAD
        'dia_chi',
=======
        'diachi',
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
        'sdt',
        'diem_mua_hang',
    ];
    use HasFactory;
}
