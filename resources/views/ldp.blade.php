<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous">
</head>
<body class="d-flex flex-column vh-100">
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm sticky-top py-2" style="background-color: #495057 !important;">
    <div class="container">
      <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="">
        <i class="bi bi-check2-square fs-3"></i> To Do List
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav me-auto ms-3">
          <a class="nav-link fw-semibold" href="#home">Beranda</a>
          <a class="nav-link fw-semibold" href="#feature">Fitur</a>
          <a class="nav-link fw-semibold" href="#about">Tentang</a>
        </div>
        <div class="d-flex gap-2">
          <a href="{{ route('login') }}" class="btn btn-light text-primary fw-semibold px-4">Login</a>
          <a href="{{ route('register') }}" class="btn btn-outline-light fw-semibold px-4">Register</a>
        </div>
      </div>
    </div>
  </nav>
    <main class="flex-grow-1">
      <section class="bg-light py-5" id="home">
        <div class="container">
          <div class="row align-items-center">
            <!-- Section Kiri -->
            <div class="col-md-6 mb-4 mb-md-0">
              <h1 class="display-4 fw-bold mb-3">Selamat Datang di <span class="text-primary">Aplikasi To Do List</span></h1>
              <p class="lead mb-4">Aplikasi To Do List membantu Anda mengelola, memantau, dan menyelesaikan tugas-tugas harian dengan mudah dan efisien. Tambahkan, edit, dan hapus tugas sesuai kebutuhan Anda. Dapatkan pengalaman produktivitas yang lebih baik dengan fitur prioritas, deadline, dan kategori tugas.</p>
              <p class="mb-4">Dengan antarmuka yang sederhana dan intuitif, Anda dapat fokus pada apa yang penting. Aplikasi ini dirancang untuk membantu Anda tetap terorganisir dan meningkatkan efisiensi kerja Anda.</p>
            </div>
            <!-- Section Kanan -->
            <div class="col-md-6 text-center">
              <img src="https://blog.cakap.com/wp-content/uploads/2023/04/to-do-list-artinya.jpg" alt="Ilustrasi To Do List" class="img-fluid rounded-4 shadow-lg" style="max-height:340px; object-fit:cover;">
            </div>
          </div>
          <div class="row">
            <div class="col-12 d-flex justify-content-center">
              <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-5 shadow mt-5 mb-2" style="min-width: 240px; font-size: 1.25rem; background-color: #0d6efd; border-color: #0d6efd;">Mulai Sekarang <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
          </div>
          </div>
        </div>
      </section>
      <hr class="my-5">

      <!-- Fitur Utama Section -->
      <section class="bg-white pt-5 pb-5" id="feature">
        <div class="container">
          <h2 class="mb-5 text-center fw-bold">Fitur Utama</h2>
          <div class="row justify-content-center g-4">
            <div class="col-12 col-md-6 col-lg-3 d-flex align-items-stretch">
              <div class="card text-center border-0 shadow h-100 hover-shadow">
                <div class="card-body py-4">
                  <i class="bi bi-plus-circle display-4 text-primary mb-3"></i>
                  <h5 class="card-title">Tambah Tugas</h5>
                  <p class="card-text">Buat dan tambahkan tugas baru dengan mudah ke daftar Anda.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 d-flex align-items-stretch">
              <div class="card text-center border-0 shadow h-100 hover-shadow">
                <div class="card-body py-4">
                  <i class="bi bi-list-check display-4 text-success mb-3"></i>
                  <h5 class="card-title">Kelola & Checklist</h5>
                  <p class="card-text">Kelola, tandai selesai, dan urutkan tugas sesuai prioritas Anda.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 d-flex align-items-stretch">
              <div class="card text-center border-0 shadow h-100 hover-shadow">
                <div class="card-body py-4">
                  <i class="bi bi-calendar-event display-4 text-warning mb-3"></i>
                  <h5 class="card-title">Deadline & Jadwal</h5>
                  <p class="card-text">Atur deadline dan jadwal agar tidak ada tugas yang terlewat.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 d-flex align-items-stretch">
              <div class="card text-center border-0 shadow h-100 hover-shadow">
                <div class="card-body py-4">
                  <i class="bi bi-phone display-4 text-info mb-3"></i>
                  <h5 class="card-title">Responsif & Mudah</h5>
                  <p class="card-text">Akses aplikasi di berbagai perangkat dengan tampilan modern dan responsif.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <hr class="my-5">
      <section class="bg-light py-5" id="about">
        <div class="container">
          <h1 class="mb-5 text-center fw-bold">Tentang Tim Kami</h1>
          <div class="row justify-content-center">
            @php
                $anggota = [
                    [
                        'nama' => 'Ahmad Ghazy Hibatullah',
                        'foto' => 'img/anggota/gojiberry.jpg',
                        'instagram' => 'ahmdghzyy',
                        'github' => 'AhmadGhazy20'
                    ],
                    [
                        'nama' => 'Tendan Triyanto',
                        'foto' => 'img/anggota/tendan.jpg',
                        'instagram' => 'tendannn_',
                        'github' => 'TendanTriyanto'
                    ],
                    [
                        'nama' => 'Satya Fadhilah Hamdy',
                        'foto' => 'img/anggota/satya.jpg',
                        'instagram' => 'fadhilah_hamdy',
                        'github' => 'SatyaFadhilah'
                    ],
                    [
                        'nama' => 'Nurrachman Daffa',
                        'foto' => 'img/anggota/daffa.jpg',
                        'instagram' => 'daffa5126_',
                        'github' => 'dap126'
                    ],
                    [
                        'nama' => 'Karim Ahmad Sulaiman',
                        'foto' => 'img/anggota/karim.jpg',
                        'instagram' => 'ozar_nux',
                        'github' => 'Rinux-zar'
                    ],
                    [
                        'nama' => 'Azzam Firdaus',
                        'foto' => 'img/anggota/azzam.jpg',
                        'instagram' => 'zam_azam1014',
                        'github' => 'Azzam1410'
                    ],
                    [
                        'nama' => 'Fahrezi Noviansyah',
                        'foto' => 'img/anggota/rezi.jpg',
                        'instagram' => 'fahrezinoviansyah',
                        'github' => 'Rezi277'
                    ],
                ];
            @endphp
            @foreach($anggota as $person)
            <div class="col-md-4 mb-4 d-flex align-items-stretch">
              <div class="card border-0 shadow h-100 w-100 text-center team-card">
                <div class="card-body d-flex flex-column align-items-center">
                  <img src="{{ $person['foto'] }}"
                      class="rounded-circle mb-3 shadow-lg border border-3 border-primary"
                      alt="{{ $person['nama'] }}"
                      width="100" height="100"
                      style="object-fit:cover;"
                      onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name={{ urlencode($person['nama']) }}&background=0D6EFD&color=fff&size=128';">
                  <h5 class="card-title mb-1 mt-2 text-center w-100 fw-bold">{{ $person['nama'] }}</h5>
                  <div class="mb-2 w-100 text-center">
                    <hr>
                    <a href="https://instagram.com/{{ $person['instagram'] }}" target="_blank" class="me-2 text-decoration-none">
                      <i class="bi bi-instagram"></i> Instagram
                    </a>
                    <a href="https://github.com/{{ $person['github'] }}" target="_blank" class="text-decoration-none">
                      <i class="bi bi-github"></i> GitHub
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </div>
      </div>
    </main>
    <footer class="text-white mt-auto" style="background-color: #495057 !important;">
      <div class="container text-center py-4">
        <p class="mb-0">© 2025 To Do List App.</p>
        <p class="mb-0">Developed by <span class="fw-semibold">Kelompok 2 Pemweb</span></p>
      </div>
    </footer>
    <style>
      :root {
        --primary-dashboard: #0d6efd;
        --secondary-dashboard: #23272b;
        --accent-dashboard: #20c997;
      }
      .navbar .nav-link.active, .navbar .nav-link:focus {
        color: var(--primary-dashboard) !important;
        background: #fff !important;
        border-radius: 0.5rem;
      }
      .navbar, .bg-primary, footer.bg-primary {
        background-color: #495057 !important;
      }
      .btn-primary, .btn-primary:focus, .btn-primary:active {
        background-color: #0d6efd !important;
        border-color: #0d6efd !important;
      }
      .btn-outline-light:hover, .btn-outline-light:focus {
        background: #fff !important;
        color: var(--primary-dashboard) !important;
      }
      .hover-shadow:hover {
        box-shadow: 0 0.5rem 1.5rem rgba(13,110,253,.15)!important;
        transform: translateY(-4px) scale(1.03);
        transition: all 0.2s;
      }
      .team-card {
        transition: box-shadow 0.2s, transform 0.2s;
      }
      .team-card:hover {
        box-shadow: 0 0.5rem 1.5rem rgba(13,110,253,.15)!important;
        transform: translateY(-4px) scale(1.03);
      }
      .navbar-brand .bi {
        vertical-align: -0.2em;
      }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>