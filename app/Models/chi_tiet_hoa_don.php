<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chi_tiet_hoa_don extends Model
{
    protected $table = 'chi_tiet_hoa_don';

    protected $primaryKey = 'ma_chi_tiet_hoa_don';

    protected $fillable = [
        'ma_chi_tiet_hoa_don',
        'ma_hoa_don',
        'ma_san_pham',
        'so_luong',
        'gia',
        'loai_banh',
        'gia_khuyen_mai',

    ];
    use HasFactory;
}
