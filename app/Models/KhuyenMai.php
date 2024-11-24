<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{

    use HasFactory;

    protected $table = 'khuyen_mai';

    protected $fillable = [
        'ma_khuyen_mai',
        'ten_khuyen_mai',
        'doi_tuong_ap_dung',
        'loai_khuyen_mai',
        'gia_tri_khuyen_mai',
        'ap_dung_tu_ngay',
        'ap_dung_den_ngay',
        'mo_ta',
        'trang_thai',
    ];

    // protected $casts = [
    //     'ap_dung_tu_ngay' => 'integer',
    //     'ap_dung_den_ngay' => 'integer',
    // ];

    public static function danhSachDoiTuongApDung()
    {
        return [
            static::DOI_TUONG_AP_DUNG_COMBO         =>      'Combo',
            static::DOI_TUONG_AP_DUNG_SANPHAM       =>      'Sản phẩm',
            static::DOI_TUONG_AP_DUNG_HOADON        =>      'Hóa đơn'
        ];
    }

    public static function danhSachLoaiGiaTri()
    {
        return [
            static::LOAI_GIA_TRI_PHAN_TRAM         =>      'Phần trăm',
            static::LOAI_GIA_GIA_TIEN_MAT       =>      'Tiền cụ thể',
        ];
    }
    // Hang so va danh sach hang so
    public function danhSachHangSo()
    {
        $list = [
            $this->danhSachDoiTuongApDung(),
            $this->danhSachLoaiGiaTri()
        ];

        return $list;
    }

    // Ap dung cho doi tuong nao
    const DOI_TUONG_AP_DUNG_COMBO = 'COMBO';
    const DOI_TUONG_AP_DUNG_SANPHAM = 'SANPHAM';
    const DOI_TUONG_AP_DUNG_HOADON = 'HOADON';
    // Loai phan tram hay tien
    const LOAI_GIA_TRI_PHAN_TRAM = 'PHANTRAM';
    const LOAI_GIA_GIA_TIEN_MAT = 'GIATRI';
}
