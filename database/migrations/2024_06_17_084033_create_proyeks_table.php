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
        Schema::create('proyek', function (Blueprint $table) {
            $table->integer('id_proyek')->unique()->primary()->autoIncrement();
            $table->string('nama_proyek');
            $table->string('lokasi_proyek');
            $table->date('tahun_proyek');
            $table->string('size_proyek');
            $table->string('budget_proyek');
            $table->string('deskripsi_proyek');
            $table->string('foto_utama_proyek');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyeks');
    }
};
