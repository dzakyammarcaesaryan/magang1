<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id('id_pesanan'); // Kolom id_pesanan
            $table->unsignedBigInteger('id_buku'); // Kolom id_buku
            $table->integer('jumlah'); // Kolom jumlah
            $table->date('tanggal_pesanan'); // Kolom tanggal_pesanan
            $table->string('status_pesanan'); // Kolom status_pesanan
            $table->timestamps(); // Kolom created_at dan updated_at

            // Jika ada relasi dengan tabel buku
            $table->foreign('id_buku')->references('id')->on('buku')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}