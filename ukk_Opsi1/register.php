<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Website Galeri Foto</title>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="style2.css">
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
	<form action="config/aksi_register.php" method="POST">
		<h1>Daftar Akun Baru</h1>
		<div class="input-box">
			<div class="input-field">
				<input type="text" name="username" placeholder="Username" class="form-control" required>
				<i class='bx bxs-user'></i>
			</div>
			<div class="input-field">
				<input type="password" name="password" placeholder="Password" class="form-control" required>
				<i class='bx bx-lock-alt'></i>
			</div>
			<div class="input-field">
				<input type="text" name="namalengkap" placeholder="Nama Lengkap" class="form-control" required>
				<i class='bx bxs-user'></i>
			</div>
			<div class="input-field">
				<input type="email" name="email" placeholder="Email" class="form-control" required>
				<i class='bx bx-envelope'></i>
			</div>
			<div class="input-field">
				<input type="text" name="alamat" placeholder="Alamat" class="form-control" required>
				<i class='bx bx-current-location'></i>
			</div>
		</div>


		

		<button type="submit" class="btnn" name="kirim">Register</button>
</div>
</div>
<div class="transparant">

	<footer class="d-flex justify-content-center border-top mt-3 bg-light ">
		<p>&copy; UKK RPL 2024 | M Ridwan Lubis</p>
	</footer>
</div>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
