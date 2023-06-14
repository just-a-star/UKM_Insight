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

            $table->foreign('ukm_id')->references('id')->on('ukm')->onDelete('cascade');
        });

        Schema::create('aset', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ukm_id');
            $table->string('nama');
            $table->string('deskripsi');
            $table->timestamps();

            $table->foreign('ukm_id')->references('id')->on('ukm')->onDelete('cascade');
        });

        Schema::create('dana_tetap', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('deskripsi');
            $table->decimal('dana', 12, 2);
            $table->date('tgl_penerimaan');
            $table->timestamps();

        });

        Schema::create('keuangan_ukm', function (Blueprint $table) { //maksud keuangan ukm adalah total seluruh uang yang ada di UKM
            $table->id();
            
            $table->unsignedBigInteger('ukm_id');
            $table->unsignedBigInteger('aset_id');
            $table->unsignedBigInteger('dana_tetap_id');
            
            $table->string('nama');
            $table->string('deskripsi');
            $table->timestamps();
            
            $table->foreign('ukm_id')->references('id')->on('ukm')->onDelete('cascade');
            $table->foreign('aset_id')->references('id')->on('aset')->onDelete('cascade');
            $table->foreign('dana_tetap_id')->references('id')->on('dana_tetap')->onDelete('cascade');
        
        });

        Schema::create('partisipan_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anggota_id');
            $table->string('role');
            $table->timestamps();

            
            $table->foreign('anggota_id')->references('id')->on('anggota')->onDelete('cascade');
        });

        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('partisipan_kegiatan_id');
            $table->string('nama');
            $table->string('skala');
            $table->decimal('keuangan', 12, 2);
            $table->date('tgl_pelaksanaan');
            $table->timestamps();
            
            $table->foreign('partisipan_kegiatan_id')->references('id')->on('partisipan_kegiatan')->onDelete('cascade');
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
        Schema::dropIfExists('keuangan_ukm');
        Schema::dropIfExists('kegiatan');
        Schema::dropIfExists('aset');
        Schema::dropIfExists('anggota');
        Schema::dropIfExists('ukm');
        Schema::dropIfExists('dana_tetap');
        
    }
};
