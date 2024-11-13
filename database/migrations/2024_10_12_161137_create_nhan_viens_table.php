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
        Schema::create('nhan_vien', function (Blueprint $table) {
=======
        Schema::create('nhan_viens', function (Blueprint $table) {
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
            $table->id('ma_nhan_vien')->nullable();
            $table->string('ten_nhan_vien')->nullable();
            $table->integer('ma_loai_nhan_vien')->nullable();
            $table->tinyInteger('gioi_tinh')->nullable();
            $table->dateTime('ngay_sinh')->nullable();
            $table->text('dia_chi')->nullable();
            $table->text('email')->nullable();
            $table->string('sdt')->nullable();
            $table->tinyInteger('trang_thai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
        Schema::dropIfExists('nhan_vien');
=======
        Schema::dropIfExists('nhan_viens');
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
    }
};
