<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loai_pizza extends Model
{

    use HasFactory;
    protected $table = 'loai_pizza';

    protected $primaryKey = 'ma_loai_pizza';

    protected $fillable = [
        'ma_loai_pizza',
        'ten_loai_pizza',
        
    ];
}
