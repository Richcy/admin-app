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
        Schema::create('sertifikat_pegawais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nip_npp');
            $table->foreign('nip_npp')->references('id')->on('biodata_pegawais');
            $table->string('no_orientasi')->nullable();
            $table->string('no_mcu')->nullable();
            $table->string('bukti_vaksin_1')->nullable();
            $table->string('bukti_vaksin_2')->nullable();
            $table->string('bukti_vaksin_booster')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikat_pegawais');
    }
};
