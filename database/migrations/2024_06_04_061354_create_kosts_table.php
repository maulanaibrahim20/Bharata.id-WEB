<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kosts', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->enum('tag', ['kost putra', 'kost putri', 'kost campur']);
            $table->uuid('member_id'); // Sesuaikan tipe data dengan UUID
            $table->text('cerita_pemilik');
            $table->text('ketentuan_pengajuan_sewa');
            $table->date('tanggal_mulai_kos');
            $table->decimal('perbulan', 10, 2);
            $table->timestamps();

            $table->foreign('member_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kosts');
    }
}
