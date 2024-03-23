<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Website Galeri Foto</title>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Website Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
        
      </div>
      <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
      <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>
    </div>
  </div>
</nav>

<div class="coba">
<div class="wrapper">
<form action="config/aksi_login.php" method="POST">
		<h1>Login Aplikasi</h1>
		<div class="input-box">
			<div class="input-field">
				<input type="text" name="username" placeholder="Username" class="form-control" required>
				<i class='bx bxs-user'></i>
			</div>
			<div class="input-field">
				<input type="password" name="password" placeholder="Password" class="form-control" required>
				<i class='bx bx-lock-alt'></i>
			</div>
		</div>

		<button type="submit" class="btnn" name="kirim">Masuk</button>
		<p>
			<p>Belum punya akun? <a href="register.php">Daftar disini!</a></p>
		</p>
</div>
</div>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom ">
	<p>&copy; UKK RPL 2024 | Muhammad Aditya</p>
</footer>


<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
