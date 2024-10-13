<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khuyen_mai_combo extends Model
{
    use HasFactory;
    protected $table = 'khuyen_mai_combo';

    protected $primaryKey = 'ma_khuyen_mai_cb';

    protected $fillable = [
        'ma_khuyen_mai_cb',
        'ten_khuyen_mai_cb',
        'ten_san_pham',
        'mo_ta',
        'so_luong_ton_kho',
        'ma_loai_san_pham',
        'hinh_anh',
        'ma_loai',
    ];
}
