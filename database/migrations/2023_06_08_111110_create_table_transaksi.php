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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('transaksi_id');
            $table->unsignedInteger('ukm_id');
            $table->unsignedInteger('laporan_dana_id');
            $table->string('nama');
            $table->string('tipe_transaksi');
            $table->date('waktu_transaksi');
            $table->string('deskripsi');
            $table->timestamps();

            $table->foreign('ukm_id')->references('ukm_id')->on('ukm')->onDelete('cascade');
            $table->foreign('laporan_dana_id')->references('laporan_dana_id')->on('laporan_dana')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};