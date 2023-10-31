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
        Schema::create('jenis_formulir', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_formulir');

            $table->string('persyaratan')->nullable();
            $table->text('isi_persyaratan')->nullable();

            $table->string('mekanisme')->nullable();
            $table->text('isi_mekanisme')->nullable();

            $table->string('jangka_waktu')->nullable();
            $table->text('isi_jangka_waktu')->nullable();

            $table->string('biaya')->nullable();
            $table->string('isi_biaya')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_formulir');
    }
};
