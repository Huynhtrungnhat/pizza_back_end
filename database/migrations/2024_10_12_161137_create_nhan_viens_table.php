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
        Schema::create('nhan_viens', function (Blueprint $table) {
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
        Schema::dropIfExists('nhan_viens');
    }
};
