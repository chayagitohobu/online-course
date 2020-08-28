<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelas');
            $table->text('deskripsi')->nullable();
            $table->string('foto')->nullable();
            $table->string('video')->nullable();
            $table->enum('jenjang', ['SD', 'SMP', 'SMA', 'UMUM'])->nullable();
            $table->enum('level', ['PEMULA', 'SEDANG', 'AHLI'])->nullable();
            $table->enum('tingkat', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'])->nullable();
            $table->string('kategori')->nullable();
            $table->integer('durasi')->nullable();
            $table->integer('kapasitas')->nullable();
            $table->enum('berbayar', ['yes', 'no'])->nullable();
            $table->integer('harga')->nullable();
            $table->integer('diskon')->nullable();
            $table->string('slug')->nullable();
            $table->enum('status', ['yes', 'no'])->nullable();
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
        Schema::dropIfExists('kelas');
    }
}
