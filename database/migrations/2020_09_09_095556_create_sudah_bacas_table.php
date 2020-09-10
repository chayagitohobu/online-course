<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSudahBacasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sudah_bacas', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('kelas_id')->nullable();
            $table->integer('materi_id')->nullable();
            $table->integer('waktu')->nullable();
            $table->enum('paham', ['ya', 'tidak'])->nullable();
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
        Schema::dropIfExists('sudah_bacas');
    }
}
