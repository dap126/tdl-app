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
        Schema::create('dosen_mata_kuliah', function (Blueprint $table) {
            $table->foreignId('dosen_id')->constrained('dosen', 'dosen_id')->onDelete('cascade');
            $table->foreignId('matkul_id')->constrained('mata_kuliah', 'matkul_id')->onDelete('cascade');
            $table->primary(['dosen_id', 'matkul_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen_mata_kuliah');
    }
};
