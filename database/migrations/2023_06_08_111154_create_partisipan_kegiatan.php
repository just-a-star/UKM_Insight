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
        Schema::create('partisipan_kegiatan', function (Blueprint $table) {
            $table->increments('par_kegiatan');
            $table->unsignedInteger('kegiatan_id');
            $table->unsignedInteger('anggota_id');
            $table->string('role');
            $table->timestamps();

            $table->foreign('kegiatan_id')->references('kegiatan_id')->on('kegiatan')->onDelete('cascade');
            $table->foreign('anggota_id')->references('anggota_id')->on('anggota')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partisipan_kegiatan');
    }
};
