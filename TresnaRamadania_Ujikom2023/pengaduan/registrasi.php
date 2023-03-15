<?php include 'conn/koneksi.php'; ?>

<!DOCTYPE html>

<html>
<head>
	<title>Aplikasi Pengaduan Masyarakat</title>
	<link rel="shortcut icon" href="https://cepatpilih.com/image/logo.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>
<body style="background: url(img/pnga.png); background-size: cover;">
</body>
</html>
<div class="card" style="padding: 25px; width: 40%; margin: 0 auto; margin-top: 0,5%;">
<b><h3 style="text-align: center;" class="black-text">Registrasi</h3></b>
<b><h6 style="text-align: center;" class="black-text">Silahkan Masukan Data Anda</h6></b>


	<form method="POST">
		<div class="input_field">
			<label for="nik"><b>NIK</b></label>
			<input id="nik" type="text" name="nik" required="required" minlength="16" maxlength="16" >
		</div>
		<div class="input_field">
			<label for="nama"><b>Nama</b></label>
			<input id="nama" type="text" name="nama" required>
		</div>
		<div class="input_field">
			<label for="username"><b>Username</b></label>
			<input id="username" type="text" name="username" required>
		</div>
		<div class="input_field">
			<label for="password"><b>Password</b></label>
			<input id="password" type="password" name="password" required>
		</div>
		<div class="input_field">
			<label for="Telp"><b>Telpon</b></label>
			<input id="telp" type="text" name="telp" required="required" minlength="11" maxlength="13">
		</div>

		<input type="submit" name="registrasi" value="Registrasi" class="btn black" style="width: 100%;">
		<p class="text-center small"><center><b>Sudah punya akun ? <a href="index.php" class="text-primary"> Login</b></center></a></p>
	</form>
</div>
<?php 
				if(isset($_POST['registrasi'])){
					$password = md5($_POST['password']);

					$query=mysqli_query($koneksi,"INSERT INTO masyarakat VALUES ('".$_POST['nik']."','".$_POST['nama']."','".$_POST['username']."','".$password."','".$_POST['telp']."')");
					if($query){
						echo "<script>alert('Registrasi Berhasil,Silahkan Login')</script>";
						echo "<script>location='location:index.php';</script>";
					}
				}
			 ?>

