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
        Schema::create('chi_tiet_hoa_dons', function (Blueprint $table) {
            $table->id('ma_chi_tiet_hoa_don')->nullable();
            $table->integer( 'ma_hoa_don')->nullable();
            $table->integer('ma_san_pham')->nullable();
            $table->integer('so_luong')->nullable();
            $table->decimal('gia',10,2)->nullable();
            $table->string('loai_banh')->nullable();
            $table->decimal('gia_khuyen_mai',10,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_hoa_dons');
    }
};
