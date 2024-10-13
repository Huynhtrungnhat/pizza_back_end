<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topping extends Model
{

    use HasFactory;
    protected $table = 'toppings';

    protected $primaryKey = 'ma_topping';

    protected $fillable = [
        'ma_topping',
        'ten_topping',
    ];
}
