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
<<<<<<< HEAD
        Schema::create('hoa_don', function (Blueprint $table) {
=======
        Schema::create('hoa_dons', function (Blueprint $table) {
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
            $table->id('ma_hoa_don')->nullable();
            $table->timestamp('ngay_lap_hd')->nullable();
            $table->decimal('tong_tien,',10,2)->nullable();
            $table->integer('ma_nhan_vien,')->nullable();
            $table->integer('ma_khach_hang,')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
        Schema::dropIfExists('hoa_don');
=======
        Schema::dropIfExists('hoa_dons');
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
    }
};
