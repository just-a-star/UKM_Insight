<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukm', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('deskripsi');
            $table->timestamps();
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

            $table
                ->foreign('ukm_id')
                ->references('id')
                ->on('ukm')
                ->onDelete('cascade');
        });

        Schema::create('aset', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ukm_id');
            $table->string('nama');
            $table->string('deskripsi');
            $table->integer('jumlah');


            $table->date('tgl_pengadaan');
            $table->timestamps();

            $table
                ->foreign('ukm_id')
                ->references('id')
                ->on('ukm')
                ->onDelete('cascade');
        });

        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ukm_id');
            $table->string('nama');
            $table->string('skala');
            $table->date('tgl_pelaksanaan');
            $table->timestamps();
            $table
                ->foreign('ukm_id')
                ->references('id')
                ->on('ukm')
                ->onDelete('cascade');
        });

        Schema::create('dana', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ukm_id');
            $table->string('nama');
            $table->string('deskripsi');
            $table->decimal('dana', 12, 2);
            $table->date('waktu_transaksi');
            $table->string('tipe_transaksi');
            $table->unsignedBigInteger('kegiatan_id')->nullable();
            $table->unsignedBigInteger('aset_id')->nullable();
            $table->timestamps();

            $table
                ->foreign('aset_id')
                ->references('id')
                ->on('aset')
                ->onDelete('cascade');
            $table
                ->foreign('kegiatan_id')
                ->references('id')
                ->on('kegiatan')
                ->onDelete('cascade');
            $table
                ->foreign('ukm_id')
                ->references('id')
                ->on('ukm')
                ->onDelete('cascade');
        });

        // Schema::create('keuangan_ukm', function (Blueprint $table) { //maksud keuangan ukm adalah total seluruh uang yang ada di UKM
        //     $table->id();
        //     $table->unsignedBigInteger('ukm_id');
        //     // $table->unsignedBigInteger('aset_id')->nullable();
        //     $table->unsignedBigInteger('dana_id')->nullable();
        //     $table->string('nama');
        //     $table->string('deskripsi');
        //     $table->timestamps();
        //     // $table->foreign('kegiatan_id')->references('id')->on('kegiatan')->onDelete('cascade');
        //     // $table->foreign('aset_id')->references('id')->on('aset')->onDelete('cascade');
        //     $table->foreign('ukm_id')->references('id')->on('ukm')->onDelete('cascade');
        //     $table->foreign('dana_id')->references('id')->on('dana')->onDelete('cascade');
        // });

        Schema::create('partisipan_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anggota_id');
            $table->unsignedBigInteger('kegiatan_id');
            $table->string('role');
            $table->timestamps();

            $table
                ->foreign('anggota_id')
                ->references('id')
                ->on('anggota')
                ->onDelete('cascade');
            $table
                ->foreign('kegiatan_id')
                ->references('id')
                ->on('kegiatan')
                ->onDelete('cascade');
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
        Schema::dropIfExists('dana');

        Schema::dropIfExists('kegiatan');
        Schema::dropIfExists('aset');
        Schema::dropIfExists('anggota');
        Schema::dropIfExists('ukm');
    }
};