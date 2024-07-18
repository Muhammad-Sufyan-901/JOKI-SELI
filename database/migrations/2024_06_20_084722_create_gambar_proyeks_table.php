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
        Schema::create('gambar_proyek', function (Blueprint $table) {
            $table->integer('id_gambar_proyek')->unique()->primary()->autoIncrement();
            $table->string('gambar_proyek');
            $table->integer('id_proyek');
            $table->foreign('id_proyek')->references('id_proyek')->on('proyek')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambar_proyeks');
    }
};
