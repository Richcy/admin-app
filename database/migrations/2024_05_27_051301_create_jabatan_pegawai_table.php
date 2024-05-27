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
        Schema::create('jabatan_pegawais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nip_npp');
            $table->foreign('nip_npp')->references('id')->on('biodata_pegawais');
            $table->string('no_str_sip')->nullable();
            $table->string('no_surat_tugas')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('unit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jabatan_pegawais');
    }
};
