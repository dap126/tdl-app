<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex flex-column vh-100">
	<nav class="navbar navbar-expand-lg bg-secondary px-5">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">To Do List</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
      |
	    <div class="collapse navbar-collapse ms-2" id="navbarNavAltMarkup">
	      <div class="navbar-nav me-auto">
	        <a class="nav-link" href="#home">Beranda</a>
          <a class="nav-link" href="#about">Tentang</a>
	      </div>
	      <div class="d-flex">
	        <a href="{{ route('login') }}" class="btn btn-primary me-2">Login</a>
	        <a href="{{ route('register') }}" class="btn btn-outline-light">Register</a>
	      </div>
	    </div>
	  </div>
	</nav>

    <main class="flex-grow-1 d-flex align-items-center justify-content-center">
      <div class="container mt-5">
        <div class="row align-items-center">
          <!-- Section Kiri: Penjelasan -->
          <div class="col-md-6 mb-4 mb-md-0">
            <h1 class="display-4">Selamat Datang di Aplikasi To Do List</h1>
            <p class="lead">Aplikasi To Do List membantu Anda mengelola, memantau, dan menyelesaikan tugas-tugas harian dengan mudah dan efisien. Tambahkan, edit, dan hapus tugas sesuai kebutuhan Anda. Dapatkan pengalaman produktivitas yang lebih baik dengan fitur prioritas, deadline, dan kategori tugas.</p>
            <ul>
              <li>Tambah dan kelola tugas harian</li>
              <li>Kategorikan tugas sesuai kebutuhan</li>
              <li>Atur prioritas dan deadline</li>
              <li>Antarmuka modern dan responsif</li>
            </ul>
          </div>
          <!-- Section Kanan: Gambar -->
          <div class="col-md-6 text-center">
            <img src="https://blog.cakap.com/wp-content/uploads/2023/04/to-do-list-artinya.jpg" alt="Ilustrasi To Do List" class="img-fluid rounded shadow">
          </div>
          <div class="col-12 text-center mt-5 mb-5">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg mt-3">Mulai Sekarang</a>
          </div>
        </div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>