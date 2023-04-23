<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_tour', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('nama_tour');
            $table->string('durasi');
            $table->string('harga_utama');
            $table->string('lokasi');
            $table->text('tabel_harga');
            $table->text('head_keyword');
            $table->string('rating');
            $table->string('id_destinasi');
            $table->string('id_kategori');
            $table->text('deskripsi');
            $table->text('head_deskripsi');
            $table->string('id_gambar');
            $table->boolean('is_archived')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_tours');
    }
}
