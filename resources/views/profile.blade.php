@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
<div class="container p-5">
    
    <div class="mb-4">
        <h1 class="display-5 fw-bold">Profil Pengguna</h1>
        <p class="text-muted">Lihat dan kelola informasi profil Anda di sini.</p>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-lg-3 text-center mb-4 mb-lg-0">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->fullname) }}&background=0D6EFD&color=fff&size=128" 
                         alt="Avatar Pengguna" 
                         class="img-fluid rounded-circle shadow-sm">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h2 class="h3 fw-bold">{{ Auth::user()->fullname }}</h2>
                            <p class="text-muted">{{ Auth::user()->jurusan }} - Angkatan {{ Auth::user()->angkatan }}</p>
                        </div>
                        <a href="#" class="btn btn-primary">
                            <i class="bi bi-pencil-square me-1"></i> Edit Profil
                        </a>
                    </div>
                    
                    <hr class="my-3">
                    
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center px-0">
                            <i class="bi bi-person-vcard-fill fs-5 me-3 text-muted"></i>
                            <strong>NIM:</strong>
                            <span class="ms-2">{{ Auth::user()->nim }}</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center px-0">
                            <i class="bi bi-envelope-fill fs-5 me-3 text-muted"></i>
                            <strong>Email:</strong>
                            <span class="ms-2">{{ Auth::user()->email }}</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center px-0">
                            <i class="bi bi-calendar2-check-fill fs-5 me-3 text-muted"></i>
                            <strong>Bergabung pada:</strong>
                            <span class="ms-2">{{ Auth::user()->created_at->translatedFormat('d F Y') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection