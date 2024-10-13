<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loai_san_pham extends Model
{

    use HasFactory;
    protected $table = 'loai_san_pham';

    protected $primaryKey = 'ma_loai_san_pham';

    protected $fillable = [
        'ma_loai_san_pham',
        'ten_loai_san_pham',
        
    ];
}
