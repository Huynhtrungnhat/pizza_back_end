<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phan_loai_san_pham extends Model
{

    use HasFactory;
    protected $table = 'phan_loai_san_pham';

    protected $primaryKey = 'ma_loai';

    protected $fillable = [
        'ma_loai',
        'ten_loai',
    ];
}
