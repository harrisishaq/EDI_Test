<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->string('posisi');
            $table->string('nama');
            $table->string('no_ktp')->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jk',['laki-laki','perempuan']);
            $table->string('agama');
            $table->string('golongan_darah');
            $table->string('status');
            $table->text('alamat_ktp');
            $table->text('alamat_tinggal');
            $table->string('email')->unique();
            $table->string('no_telp')->unique();
            $table->string('kontak_darurat');
            $table->text('skill');
            $table->enum('ketersediaan',['ya','tidak']);
            $table->string('gaji');
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
        Schema::dropIfExists('biodatas');
    }
}
