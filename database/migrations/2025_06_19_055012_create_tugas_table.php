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
        Schema::create('tugas', function (Blueprint $table) {
            $table->id('tugas_id');
            $table->foreignId('daftar_id')->constrained('daftar_tugas', 'daftar_id')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('matkul_id')
                  ->nullable()
                  ->constrained('mata_kuliah', 'matkul_id')
                  ->onDelete('set null');
            $table->string('judul_tugas');
            $table->text('deskripsi_tugas')->nullable();
            $table->dateTime('tanggal_deadline')->nullable();
            $table->enum('prioritas', ['Rendah', 'Sedang', 'Tinggi'])->default('Sedang');
            $table->enum('status', ['Belum Selesai', 'Dikerjakan', 'Selesai'])->default('Belum Selesai');
            $table->dateTime('completed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas');
    }
};
