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
        Schema::create('testimonial', function (Blueprint $table) {
            $table->integer('id_testimoni')->unique()->primary()->autoIncrement();
            $table->string('deskripsi_testimoni');
            $table->string('gambar_testimoni');
            $table->integer('id_proyek');
            $table->foreign('id_proyek')->references('id_proyek')->on('proyek')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
