<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontrak', function (Blueprint $table) {
            $table->id();
            $table->integer('karyawan_id');
            $table->enum('status' ,['Tetap', 'Kontrak', 'Magang']);
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->integer('durasi_kontrak');
            $table->string('dokumen');
            $table->timestamps();
            $table->engine = "InnoDB";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kontrak');
    }
};
