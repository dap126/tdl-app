<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $primaryKey = 'matkul_id';
    protected $table = 'mata_kuliah';
    protected $fillable = ['nama_matakuliah', 'sks'];

    /**
     * Relasi Many-to-Many: Satu MataKuliah diajar oleh banyak Dosen.
     */
    public function dosen()
    {
        return $this->belongsToMany(Dosen::class, 'dosen_mata_kuliah', 'matkul_id', 'dosen_id');
    }
    
    /**
     * Relasi One-to-Many: Satu MataKuliah memiliki banyak Tugas.
     */
    public function tugas()
    {
        return $this->hasMany(Tugas::class, 'matkul_id', 'matkul_id');
    }
}