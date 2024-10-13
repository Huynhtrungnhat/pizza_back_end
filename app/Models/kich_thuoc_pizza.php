<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kich_thuoc_pizza extends Model
{

    use HasFactory;
    protected $table = 'kich_thuoc_pizza';

    protected $primaryKey = 'ma_kich_thuoc';

    protected $fillable = [
        'ma_kich_thuoc',
        'ten_kich_thuoc',
    ];
}
