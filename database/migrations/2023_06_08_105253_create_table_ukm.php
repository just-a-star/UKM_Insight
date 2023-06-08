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
        Schema::create('ukm', function (Blueprint $table) {
            $table->increments('ukm_id');
            $table->unsignedInteger('pengelola_id');
            $table->unsignedInteger('kegiatan_id');
            $table->unsignedInteger('anggota_id');
            $table->unsignedInteger('transaksi_id');
            $table->unsignedInteger('dana_id');
            $table->unsignedInteger('asset_id');
            $table->string('nama');
            $table->string('deskripsi');
            $table->timestamps();

            $table->foreign('pengelola_id')->references('id')->on('pengelolas');
            $table->foreign('kegiatan_id')->references('id')->on('kegiatans');
            $table->foreign('anggota_id')->references('id')->on('anggotas');
            $table->foreign('transaksi_id')->references('id')->on('transaksis');
            $table->foreign('dana_id')->references('id')->on('donations');
            $table->foreign('asset_id')->references('id')->on('assets');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ukm');
    }
};
