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
        Schema::create('keuangan', function (Blueprint $table) {
            $table->increments('keuangan_id');
            $table->unsignedInteger('ukm_id');
            $table->unsignedInteger('transaksi_id');
            $table->string('nama');
            $table->string('deskripsi');
            $table->timestamps();

            $table->foreign('ukm_id')->references('ukm_id')->on('ukm')->onDelete('cascade');
            $table->foreign('transaksi_id')->references('transaksi_id')->on('transaksi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keuangan');
    }
};
