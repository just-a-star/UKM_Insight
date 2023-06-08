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
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->increments('kegiatan_id');
            $table->unsignedInteger('ukm_id');
            $table->unsignedInteger('laporan_dana_id');
            $table->unsignedInteger('par_kegiatan');
            $table->string('nama');
            $table->string('skala');
            $table->date('tgl_pelaksanaan');
            $table->timestamps();

            $table->foreign('ukm_id')->references('ukm_id')->on('ukm')->onDelete('cascade');
            $table->foreign('laporan_dana_id')->references('laporan_dana_id')->on('laporan_dana')->onDelete('cascade');
            $table->foreign('par_kegiatan')->references('par_kegiatan')->on('partisipan_kegiatan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kegiatan');
    }
};
