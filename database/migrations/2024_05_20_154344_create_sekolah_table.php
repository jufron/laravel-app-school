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
        Schema::create('sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('logo')->nullable();
            $table->text('deskripsi');
            $table->string('alamat', 140);
            $table->string('no_telepon', 15);
            $table->text('sejarah_sekolah');
            $table->text('visi_misi');
            $table->string('nama_kepala_sekolah', 100);
            $table->string('foto_kepala_sekolah')->nullable();
            $table->string('periode_kepala_sekolah');
            $table->text('pesan_kepala_sekolah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah');
    }
};
