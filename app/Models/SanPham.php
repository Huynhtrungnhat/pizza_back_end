<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $table = 'san_pham';

    protected $primaryKey = 'ma_san_pham';

    protected $fillable = [
        'ma_san_pham',
        'ten_san_pham',
        'gia',
        'mo_ta',
        'so_luong_ton_kho',
        'ma_loai_san_pham',
        'hinh_anh',
        'ma_loai',
        'loai_khuyen_mai',
        'gia_tri_khuyen_mai',
    ];

}

