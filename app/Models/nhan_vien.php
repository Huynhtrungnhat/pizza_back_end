<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhan_vien extends Model
{

    use HasFactory;
    protected $table = 'nhan_vien';

    protected $primaryKey = 'ma_nhan_vien';

    protected $fillable = [
        'ten_nhan_vien',
        'ma_loai_nhan_vien',
        'gioi_tinh',
        'ngay_sinh',
        'dia_chi',
        'email',
        'sdt',
        'trang_thai',
    ];
}
