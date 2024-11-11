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
        Schema::create('hoa_don', function (Blueprint $table) {
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
        Schema::dropIfExists('hoa_don');
    }
};
