<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', 50);
            $table->integer('kost_id');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('jenis_kelamin');
            $table->string('tanggal_lahir');
            $table->string('alamat_utama');
            $table->bigInteger('provinsi');
            $table->bigInteger('kota');
            $table->bigInteger('kecamatan');
            $table->bigInteger('kode_pos');
            $table->bigInteger('no_telp');
            $table->string('image');
            $table->enum('status', ['1','0'])->comment('catatan : 1 = terverifikasi 2 = belum verifikasi')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
