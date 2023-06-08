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
        Schema::create('laporan_pendanaan_kegiatan', function (Blueprint $table) {
            $table->increments('laporan_dana_id');
            $table->decimal('pendapatan', 8, 2);
            $table->decimal('pengeluaran', 8, 2);
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
        Schema::dropIfExists('laporan_pendanaan_kegiatan');
    }
};