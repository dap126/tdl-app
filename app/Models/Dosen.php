<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $primaryKey = 'dosen_id';
    protected $table = 'dosen';
    protected $fillable = ['nama_dosen', 'email_dosen'];

    /**
     * Relasi Many-to-Many: Satu Dosen mengajar banyak MataKuliah.
     */
    public function mataKuliah()
    {
        return $this->belongsToMany(MataKuliah::class, 'dosen_mata_kuliah', 'dosen_id', 'matkul_id');
    }
}