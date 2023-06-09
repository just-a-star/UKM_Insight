<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->id();
            // $table->unsignedBigInteger('pengelola_id');
            $table->string('nama');
            $table->string('deskripsi');
            $table->timestamps();
            // $table->foreign('anggota_id')->references('id')->on('anggota')->onDelete('cascade');    
            // $table->foreign('pengelola_id')->references('id')->on('pengelola')->onDelete('cascade');
        });

        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ukm_id');
            $table->string('nama');
            $table->string('posisi');
            $table->string('masa_jabatan');
            $table->integer('angkatan');
            $table->string('no_telepon');
            $table->string('email');
            $table->timestamps();
            
            $table->foreign('ukm_id')->references('id')->on('ukm')->onDelete('cascade');
        });

        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('deskripsi');
            $table->timestamps();
        });

        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('laporan_dana_id');
            $table->string('nama');
            $table->string('tipe_transaksi'); //sengaja dijadikan string karena ada 2 tipe transaksi, yaitu pendapatan dan pengeluaran nanti di handle di controller
            $table->date('waktu_transaksi'); 
            $table->string('deskripsi');
            $table->decimal('jumlah', 12, 2);
            $table->timestamps();
        });
        

        Schema::create('keuangan_ukm', function (Blueprint $table) { //maksud keuangan ukm adalah total seluruh uang yang ada di UKM
            $table->id();
            $table->unsignedBigInteger('transaksi_id');
            $table->string('nama');
            $table->string('deskripsi');
            $table->timestamps();

            $table->foreign('transaksi_id')->references('id')->on('transaksi')->onDelete('cascade');
            // $table->foreign('kegiatan_id')->references('id')->on('kegiatan')->onDelete('cascade');
        });

        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('keuangan_ukm_id');
            $table->string('nama');
            $table->string('skala');
            $table->decimal('keuangan', 10, 2);
            $table->date('tgl_pelaksanaan');
            $table->timestamps();
            
            $table->foreign('keuangan_ukm_id')->references('id')->on('keuangan_ukm')->onDelete('cascade');
            // $table->foreign('laporan_pendanaan_kegiatan_id')->references('id')->on('laporan_pendanaan_kegiatan')->onDelete('cascade');
        });

        Schema::create('partisipan_kegiatan', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('kegiatan_id');
            // $table->unsignedBigInteger('anggota_id');
            $table->string('role');
            $table->timestamps();

            
            // $table->foreign('anggota_id')->references('id')->on('anggota')->onDelete('cascade');
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
        Schema::dropIfExists('keuangan');
        Schema::dropIfExists('transaksi');
        Schema::dropIfExists('kegiatan');
        Schema::dropIfExists('assets');
        Schema::dropIfExists('anggota');
        Schema::dropIfExists('ukm');
        Schema::dropIfExists('pengelola');
    }
};