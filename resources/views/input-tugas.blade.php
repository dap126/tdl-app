@extends('layouts.app')

@section('title','Input Tugas')

@section('content')
<div class="container-fluid">
    <!--begin::Row-->
    <div class="row mt-4">
        <!-- Start col -->
        <div class="col-* mx-auto"> <!-- Menggunakan col-lg-8 agar tidak terlalu lebar -->
            <div class="card mb-4 shadow-sm">
                <div class="card-header"><h3 class="card-title">Form Tambah Tugas Baru</h3></div>
                <div class="card-body">
                    
                    <!-- Atribut action diubah menjadi '#' karena ini hanya tampilan -->
                    <form action="#" method="POST">
                        <!-- Judul Tugas -->
                        <div class="mb-3">
                            <label for="judul_tugas" class="form-label">Judul Tugas</label>
                            <input type="text" class="form-control" id="judul_tugas" name="judul_tugas" value="" required>
                            <!-- Contoh pesan error -->
                            <!-- div class="invalid-feedback">Judul tugas wajib diisi.</div -->
                        </div>
                        <!-- Pilih Daftar Tugas -->
                        <div class="mb-3">
                            <label for="daftar_id" class="form-label">Pilih Daftar Tugas</label>
                            <select class="form-select" id="daftar_id" name="daftar_id" required>
                                <option value="" disabled>-- Pilih Kategori/Daftar --</option>
                                <!-- INI ADALAH CONTOH DATA STATIS -->
                                <option value="1" selected>Tugas Kuliah</option>
                                <option value="2">Kegiatan Organisasi</option>
                                <option value="3">Pribadi</option>
                            </select>
                        </div>
                        <!-- Pilih Mata Kuliah -->
                        <div class="mb-3">
                            <label for="matkul_id" class="form-label">Mata Kuliah</label>
                            <select class="form-select" id="matkul_id" name="matkul_id">
                                <option value="">-- Tidak ada --</option>
                                <!-- INI ADALAH CONTOH DATA STATIS -->
                                <option value="101">Dasar Pemrograman</option>
                                <option value="102">Basis Data</option>
                                <option value="103">Jaringan Komputer</option>
                            </select>
                        </div>
                        <!-- Deskripsi Tugas -->
                        <div class="mb-3">
                            <label for="deskripsi_tugas" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi_tugas" name="deskripsi_tugas" rows="3"></textarea>
                        </div>
                        
                        <!-- Deadline -->
                        <div class="mb-3">
                            <label for="tanggal_deadline" class="form-label">Deadline</label>
                            <input type="datetime-local" class="form-control" id="tanggal_deadline" name="tanggal_deadline" value="" require>
                        </div>
                        
                        <!-- Prioritas -->
                        <div class="mb-3">
                            <label for="prioritas" class="form-label">Prioritas</label>
                            <select class="form-select" id="prioritas" name="prioritas" required>
                                <option value="Rendah">Rendah</option>
                                <option value="Sedang" selected>Sedang</option>
                                <option value="Tinggi">Tinggi</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end">
                            <!-- Link href diubah menjadi '#' karena ini hanya tampilan -->
                            <a href="#" class="btn btn-secondary me-2">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan Tugas</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.Start col -->
    </div>
    <!-- /.row (main row) -->
</div>
@endsection