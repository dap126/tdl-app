@extends('layouts.app')

@section('title','Input Tugas')

@section('content')
<div class="container-fluid">
    <!--begin::Row-->
    <div class="row mt-4">
        <!-- Start col -->
        <div class="col-* mx-auto">
            <div class="card mb-4 shadow-sm">
                <div class="card-header"><h3 class="card-title">Form Tambah Tugas Baru</h3></div>
                <div class="card-body">
                    
                    <form action="{{ route('tugas.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="judul_tugas" class="form-label">Judul Tugas</label>
                            <input type="text" class="form-control @error('judul_tugas') is-invalid @enderror" id="judul_tugas" name="judul_tugas" value="{{ old('judul_tugas') }}" required>
                            @error('judul_tugas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Pilih Daftar Tugas -->
                        <div class="mb-3">
                            <label for="daftar_id" class="form-label">Pilih Daftar Tugas</label>
                            <select class="form-select @error('daftar_id') is-invalid @enderror" id="daftar_id" name="daftar_id" required>
                                <option value="" disabled>-- Pilih Kategori/Daftar --</option>
                                @foreach ($daftarTugas as $daftar)
                                    <option value="{{ $daftar->daftar_id }}" {{ old('daftar_id') == $daftar->daftar_id ? 'selected' : '' }}>
                                        {{ $daftar->nama_daftar }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Pilih Mata Kuliah -->
                        <div class="mb-3">
                            <label for="nama_matakuliah" class="form-label">Mata Kuliah <span class="text-muted">(Opsional)</span></label>
                            <input type="text" 
                                   class="form-control @error('nama_matakuliah') is-invalid @enderror" 
                                   id="nama_matakuliah" 
                                   name="nama_matakuliah" 
                                   value="{{ old('nama_matakuliah') }}"
                                   placeholder="Ketik nama mata kuliah jika ada">
                            @error('nama_matakuliah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Deskripsi Tugas -->
                        <div class="mb-3">
                            <label for="deskripsi_tugas" class="form-label">Deskripsi <span class="text-muted">(Opsional)</span></label>
                            <textarea class="form-control @error('deskripsi_tugas') is-invalid @enderror" id="deskripsi_tugas" name="deskripsi_tugas" rows="3">{{ old('deskripsi_tugas') }}</textarea>
                             @error('deskripsi_tugas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- Deadline -->
                        <div class="mb-3">
                            <label for="tanggal_deadline" class="form-label">Deadline <span class="text-muted">(Opsional)</span></label>
                            <input type="datetime-local" class="form-control @error('tanggal_deadline') is-invalid @enderror" id="tanggal_deadline" name="tanggal_deadline" value="{{ old('tanggal_deadline') }}">
                             @error('tanggal_deadline')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- Prioritas -->
                        <div class="mb-3">
                            <label for="prioritas" class="form-label">Prioritas</label>
                            <select class="form-select @error('prioritas') is-invalid @enderror" id="prioritas" name="prioritas" required>
                                <option value="Rendah" {{ old('prioritas') == 'Rendah' ? 'selected' : '' }}>Rendah</option>
                                <option value="Sedang" {{ old('prioritas', 'Sedang') == 'Sedang' ? 'selected' : '' }}>Sedang</option>
                                <option value="Tinggi" {{ old('prioritas') == 'Tinggi' ? 'selected' : '' }}>Tinggi</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('dashboard') }}" class="btn btn-secondary me-2">Batal</a>
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