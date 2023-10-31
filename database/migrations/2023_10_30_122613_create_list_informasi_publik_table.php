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
        Schema::create('list_informasi_publik', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('informasi_publik_id');
            $table->foreign('informasi_publik_id')->references('id')->on('informasi_publik')->onDelete('cascade');

            $table->string('judul');
            $table->text('isi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_informasi_publik');
    }
};
