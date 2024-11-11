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
        Schema::create('san_pham', function (Blueprint $table) {
            $table->id("ma_san_pham")->nullable();
            $table->string('ten_san_pham')->nullable();
            $table->text('mo_ta')->nullable();
            $table->decimal('Gia', 10, 2)->nullable();
            $table->integer('so_luong_ton_kho')->nullable();
            $table->integer('ma_loai_san_pham')->nullable();
            $table->string('hinh_anh')->nullable();
            $table->integer('ma_loai')->nullable();
            $table->enum('loai_khuyen_mai', array('PHANTRAM', 'GIATRI'))->nullable()->nullable();
            $table->string('gia_tri_khuyen_mai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_pham');
    }
};
