<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class san_pham_combo extends Model
{

    use HasFactory;
    protected $table = 'san_pham_combo';

    protected $primaryKey = 'ma_combo';

    protected $fillable = [
        'ma_combo',
        'ma_san_pham',
        'so_luong',
        
    ];
}
