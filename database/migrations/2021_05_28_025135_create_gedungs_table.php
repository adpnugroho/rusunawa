<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGedungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gedungs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug');
            $table->string('alamat');
            $table->enum('kecamatan', [
                'Balikpapan Kota', 
                'Balikpapan Timur', 
                'Balikpapan Barat', 
                'Balikpapan Selatan', 
                'Balikpapan Utara', 
                'Balikpapan Tengah']);
            $table->year('tahun_pembuatan');
            $table->integer('jumlah_lantai');
            $table->integer('id_api');
            $table->string('link_gmaps');
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
        Schema::dropIfExists('gedungs');
    }
}
