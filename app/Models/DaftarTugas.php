<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarTugas extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'daftar_id';
    protected $table = 'daftar_tugas';
    protected $fillable = ['user_id', 'nama_daftar', 'deskripsi'];

    /**
     * Relasi Many-to-One: DaftarTugas ini milik satu User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi One-to-Many: Satu DaftarTugas memiliki banyak Tugas.
     */
    public function tugas()
    {
        return $this->hasMany(Tugas::class, 'daftar_id', 'daftar_id');
    }
}