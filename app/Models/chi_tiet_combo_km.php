<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chi_tiet_combo_km extends Model
{
    protected $table = 'chi_tiet_combo_km';

    protected $primaryKey = 'ma_khuyen_mai_combo';

    protected $fillable = [
        'ma_khuyen_mai_combo',
       'ma_combo',
    ];
    use HasFactory;
}
