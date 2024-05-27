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
        Schema::create('pendidikan_pegawais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nip_npp');
            $table->foreign('nip_npp')->references('id')->on('biodata_pegawais');
            $table->string('no_ijazah')->nullable();
            $table->string('nama_institusi_pendidikan')->nullable();
            $table->string('jurusan')->nullable();
            $table->date('tgl_mulai_studi')->nullable();
            $table->date('tgl_selesai_studi')->nullable();
            $table->string('gelar')->nullable();
            $table->decimal('ipk', 3, 2)->nullable();
            $table->string('no_transkrip_nilai')->nullable();
            $table->string('bukti_legalitas_ijazah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikan_pegawais');
    }
};
