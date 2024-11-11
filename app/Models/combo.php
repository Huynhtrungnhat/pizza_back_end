<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class combo extends Model
{
     protected $table = 'combo';

    protected $primaryKey = 'ma_combo';

    protected $fillable = [
        'ma_combo',
        'ten_combo',
        'mo_ta',
        'ngay_tao_combo',

    ];
    use HasFactory;
}
