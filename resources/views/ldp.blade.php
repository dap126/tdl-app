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
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	        <a class="nav-link active" aria-current="page" href="#">Home</a>
	        <a class="nav-link" href="#">Features</a>
	        <a class="nav-link" href="#">Pricing</a>
	        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
	      </div>
	    </div>
	  </div>
	</nav>

    <main class="flex-grow-1 d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <div class="card p-4 p-md-5 shadow-lg custom-card">
                <div class="card-body">
                    <h1 class="display-4 fw-bold">Selamat Datang!</h1>
					<br>
                    <p class="lead my-4">
                        Platform kami siap membantu Anda. Silakan masuk untuk melanjutkan atau daftar jika Anda pengguna baru.
                    </p>
					<br>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="login" class="btn btn-primary btn-lg px-4 gap-3">Login</a>
                        <a href="register" class="btn btn-outline-secondary btn-lg px-4">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>