<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('no_ktp');
            $table->string('no_hp');
            $table->string('nama_lengkap');
            $table->string('slug');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', [
                'Laki-Laki', 
                'Perempuan']);
            $table->string('alamat');
            $table->enum('agama', [
                'Islam',
                'Kristen',
                'Katolik',
                'Hindu',
                'Buddha', 
                'Konghucu']);
            $table->enum('status_pernikahan',[
                'Menikah',
                'Belum Menikah',
                ]);
            $table->enum('status_tempat_tinggal', [
                'Menyewa',
                'Mengontrak',
                'Menumpang']);
            $table->unsignedBigInteger('gedung_id');
            $table->integer('lantai');
            $table->string('pekerjaan');
            $table->string('nama_tempat_kerja');
            $table->string('status_pekerjaan');
            $table->string('alamat_tempat_kerja');
            $table->integer('penghasilan_tetap');
            $table->integer('penghasilan_tambahan')->nullable();
            $table->string('no_ktp_pasangan')->nullable();
            $table->string('alamat_pasangan')->nullable();
            $table->string('pekerjaan_pasangan')->nullable();
            $table->string('penghasilan_pasangan')->nullable();
            $table->integer('jumlah_pengikut')->nullable();
            $table->string('pengikut_1')->nullable();
            $table->string('umur_1')->nullable();
            $table->enum('hubungan_1', [
                'Suami/Istri',
                'Anak',
                'Lainnya'])->nullable();
            $table->string('pengikut_2')->nullable();
            $table->enum('hubungan_2', [
                'Anak',
                'Lainnya'])->nullable();
            $table->string('umur_2')->nullable();
            $table->string('pengikut_3')->nullable();
            $table->string('umur_3')->nullable();
            $table->enum('hubungan_3', [
                'Anak',
                'Lainnya'])->nullable();
            $table->string('foto_ktp');
            $table->string('foto_kk')->nullable();
            $table->string('foto_surat_nikah')->nullable();
            $table->enum('status_pendaftaran', [
                'Baru', 
                'Diproses', 
                'Selesai']);
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
        Schema::dropIfExists('pendaftarans');
    }
}
