<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'tugas_id';
    protected $table = 'tugas';
    protected $fillable = [
        'daftar_id', 'matkul_id', 'judul_tugas', 'deskripsi_tugas',
        'tanggal_deadline', 'prioritas', 'status', 'completed_at'
    ];

    /**
     * Relasi Many-to-One: Tugas ini berada di satu DaftarTugas.
     */
    public function daftarTugas()
    {
        return $this->belongsTo(DaftarTugas::class, 'daftar_id', 'daftar_id');
    }
    
    /**
     * Relasi Many-to-One: Tugas ini terkait dengan satu MataKuliah.
     */
    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'matkul_id', 'matkul_id');
    }
}