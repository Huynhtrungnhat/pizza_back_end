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
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->id('ma_khach_hang')->nullable();
=======
        Schema::create('khach_hang', function (Blueprint $table) {
            $table->id('ma_khach_hang');
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
            $table->string('ten_khach_hang')->nullable();
            $table->string('diachi')->nullable();
            $table->string('sdt')->nullable();
            $table->integer('diem_mua_hang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
        Schema::dropIfExists('khach_hangs');
=======
        Schema::dropIfExists('khach_hang');
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
    }
};
