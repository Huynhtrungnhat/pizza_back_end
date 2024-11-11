<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hoa_don extends Model
{
    protected $table = 'hoa_don';

    protected $primaryKey = 'ma_hoa_don';

    protected $fillable = [
        'ma_hoa_don',
        'ngay_lap_hd',
        'tong_tien',
        'ma_nhan_vien',
        'ma_khach_hang',
    ];
    use HasFactory;
}
