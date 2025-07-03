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
        DB::statement('TRUNCATE TABLE tugas RESTART IDENTITY CASCADE;');
        DB::statement('TRUNCATE TABLE daftar_tugas RESTART IDENTITY CASCADE;');

        DaftarTugas::create(['nama_daftar' => 'Tugas Kuliah', 'deskripsi' => 'Semua tugas yang berhubungan dengan perkuliahan.']);
        DaftarTugas::create(['nama_daftar' => 'Organisasi', 'deskripsi' => 'Aktivitas dan tanggung jawab di organisasi kemahasiswaan.']);
        DaftarTugas::create(['nama_daftar' => 'Pribadi', 'deskripsi' => 'Keperluan dan rencana pribadi di luar kampus.']);
    }
}
