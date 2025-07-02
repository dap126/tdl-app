<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DaftarTugas;
use Illuminate\Support\Facades\DB;

class DaftarTugasTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\Tugas::truncate();
        DaftarTugas::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DaftarTugas::create(['nama_daftar' => 'Tugas Kuliah', 'deskripsi' => 'Semua tugas yang berhubungan dengan perkuliahan.']);
        DaftarTugas::create(['nama_daftar' => 'Organisasi', 'deskripsi' => 'Aktivitas dan tanggung jawab di organisasi kemahasiswaan.']);
        DaftarTugas::create(['nama_daftar' => 'Pribadi', 'deskripsi' => 'Keperluan dan rencana pribadi di luar kampus.']);
    }
}
