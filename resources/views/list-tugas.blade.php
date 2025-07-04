@extends('layouts.app') {{-- Sesuaikan dengan nama layout utama Anda --}}

@section('title', 'Daftar Tugas')

@section('content')
<div class="container-fluid">
    <!-- Pesan Sukses (jika ada) -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!--begin::Row-->
    <div class="row mt-4">
        @forelse ($daftarTugas as $daftar)
            <div class="col-12 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-light">
                        <h3 class="card-title fw-bold mb-0">{{ $daftar->nama_daftar }}</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr class="table-light">
                                        <th style="width: 5%;">No</th>
                                        <th>Judul Tugas</th>
                                        <th>Mata Kuliah</th>
                                        <th>Deadline</th>
                                        <th class="text-center">Prioritas</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center" style="width: 15%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($daftar->tugas as $tugas)
                                        <tr class="{{ $tugas->status == 'Selesai' ? 'table-success' : '' }}">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="fw-bold">{{ $tugas->judul_tugas }}</div>
                                                <div class="text-muted small">{{ $tugas->deskripsi_tugas }}</div>
                                            </td>
                                            {{-- Cek apakah tugas punya relasi ke mata kuliah --}}
                                            <td>{{ $tugas->mataKuliah->nama_matakuliah ?? '-' }}</td>
                                            <td>
                                                @if ($tugas->tanggal_deadline)
                                                    {{ \Carbon\Carbon::parse($tugas->tanggal_deadline)->translatedFormat('d F Y, H:i') }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if ($tugas->prioritas == 'Tinggi')
                                                    <span class="badge bg-danger">Tinggi</span>
                                                @elseif ($tugas->prioritas == 'Sedang')
                                                    <span class="badge bg-warning text-dark">Sedang</span>
                                                @else
                                                    <span class="badge bg-info text-dark">Rendah</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <form action="{{ route('tugas.update', $tugas->tugas_id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <select name="status" class="form-select form-select-sm me-2" style="width:auto;" onchange="this.form.submit()">
                                                        <option value="Belum Selesai" {{ $tugas->status == 'Belum Selesai' ? 'selected' : '' }}>Belum Selesai</option>
                                                        <option value="Dikerjakan" {{ $tugas->status == 'Dikerjakan' ? 'selected' : '' }}>Dikerjakan</option>
                                                        <option value="Selesai" {{ $tugas->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td class="text-center">
                                                <form action="{{ route('tugas.destroy', $tugas->tugas_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus tugas ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Hapus Tugas">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        {{-- Pesan ini muncul jika TIDAK ADA TUGAS di dalam kategori ini --}}
                                        <tr>
                                            <td colspan="7" class="text-center text-muted fst-italic py-4">
                                                Belum ada tugas di kategori ini.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-warning text-center">
                    Tidak ada kategori tugas yang tersedia. Silakan hubungi admin.
                </div>
            </div>
        @endforelse
    </div>
    <!-- /.row (main row) -->
</div>
@endsection
