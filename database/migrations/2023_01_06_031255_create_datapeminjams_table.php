<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapeminjams', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('judul_buku')->nullable();
            $table->string('genre_buku')->nullable();
            $table->string('tgl_pinjam')->nullable();
            $table->string('tgl_kembali')->nullable();
            $table->string('status')->default(2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datapeminjams');
    }
};
