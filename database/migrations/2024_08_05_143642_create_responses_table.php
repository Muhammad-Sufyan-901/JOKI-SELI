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
        Schema::create('respon', function (Blueprint $table) {
            $table->integer('id_respon')->unique()->primary()->autoIncrement();
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('no_hp');
            $table->text('pesan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responses');
    }
};
