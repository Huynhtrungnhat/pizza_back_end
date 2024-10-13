<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loai_nhan_vien extends Model
{

    use HasFactory;
    protected $table = 'loai_nhan_vien';

    protected $primaryKey = 'ma_loai_nhan_vien';

    protected $fillable = [
        'ma_loai_nhan_vien',
        'ten_loai_nhan_vien',
        
    ];
}
