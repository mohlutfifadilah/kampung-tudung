<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kontak')->length(255);
            $table->string('wa')->length(255)->nullable();
            $table->string('email')->length(255)->nullable();
            $table->string('alamat');
            $table->string('tanggal');
            $table->string('paket');
            $table->integer('dewasa');
            $table->integer('anak');
            $table->integer('jumlah');
            $table->string('pesan')->nullable();
            $table->integer('total');
            $table->integer('status');
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
        Schema::dropIfExists('pesan');
    }
}
