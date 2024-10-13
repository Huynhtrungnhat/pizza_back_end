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
        Schema::create('kich_thuoc_pizzas', function (Blueprint $table) {
            $table->id('ma_kich_thuoc')->nullable();
            $table->string('ten_kich_thuoc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kich_thuoc_pizzas');
    }
};
