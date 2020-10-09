<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('foto');
            $table->mediumText('deskripsi_diri');
            $table->string('nomor_hp');
            $table->enum('jk', ['laki-laki', 'perempuan']);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('pendidikan_terakhir');
            $table->string('pekerjaan');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('linkedin');
            $table->enum('guru', ['yes', 'no']);
            $table->enum('murid', ['yes', 'no']);
            $table->string('nik');
            $table->string('npwp');
            $table->string('kode_promosi');
            $table->string('kode_affilasi');
            $table->string('alamat');
            $table->enum('status', ['yes', 'no']);
            $table->boolean('is_admin')->nullable();
            $table->boolean('is_reviewer')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
