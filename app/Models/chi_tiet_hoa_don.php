<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chi_tiet_hoa_don extends Model
{
<<<<<<< HEAD
    use HasFactory;
=======
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
    protected $table = 'chi_tiet_hoa_don';

    protected $primaryKey = 'ma_chi_tiet_hoa_don';

    protected $fillable = [
        'ma_chi_tiet_hoa_don',
        'ma_hoa_don',
        'ma_san_pham',
        'so_luong',
        'gia',
        'loai_banh',
        'gia_khuyen_mai',

    ];
<<<<<<< HEAD

=======
    use HasFactory;
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
}
