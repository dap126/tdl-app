{{-- Memberitahu Blade untuk menggunakan layout 'layouts.app' --}}
@extends('layouts.app')

{{-- Mengisi judul halaman (opsional, akan mengganti default) --}}
@section('title','Dashboard')

@section('content')
  <div class="app-content">
    <!--begin::Container-->
    <div class="row g-4 mx-auto mt-3">
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="p-3 bg-primary bg-opacity-10 rounded-circle me-3">
                        <i class="bi bi-card-checklist fs-4 text-primary"></i>
                    </div>
                    <div>
                        <p class="card-text text-muted mb-0">Total Tugas</p>
                        <h4 class="card-title fw-bold">-</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="p-3 bg-success bg-opacity-10 rounded-circle me-3">
                        <i class="bi bi-check-circle-fill fs-4 text-success"></i>
                    </div>
                    <div>
                        <p class="card-text text-muted mb-0">Tugas Selesai</p>
                        <h4 class="card-title fw-bold">-</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="p-3 bg-warning bg-opacity-10 rounded-circle me-3">
                        <i class="bi bi-fire fs-4 text-warning"></i>
                    </div>
                    <div>
                        <p class="card-text text-muted mb-0">Tugas Aktif</p>
                        <h4 class="card-title fw-bold">-</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Container-->
  </div>
@endsection