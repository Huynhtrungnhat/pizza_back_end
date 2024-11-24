<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('khuyen_mai', function (Blueprint $table) {
            $table->id('ma_khuyen_mai')->primary();
            $table->string('ten_khuyen_mai')->nullable();
            $table->enum('doi_tuong_ap_dung', array('COMBO', 'SANPHAM', 'HOADON'))->nullable();
            $table->enum('loai_khuyen_mai', array('PHANTRAM', 'GIATRI'))->nullable()->nullable();
            $table->string('gia_tri_khuyen_mai')->nullable()->nullable();
            $table->decimal('ap_dung_tu_ngay', 10, 2)->nullable();
            $table->decimal('ap_dung_den_ngay', 10, 2)->nullable();
            $table->text('mo_ta')->nullable()->nullable();
            $table->tinyInteger('trang_thai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khuyen_mai');
    }
};
