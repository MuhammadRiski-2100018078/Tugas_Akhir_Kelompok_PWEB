<?php 
require 'function.php';

if ( isset($_POST["register"]) ) {

	if(registrasi($_POST) > 0 ){
		echo "<script>
				alert('user baru berhasil di tambahkan!');
				</script>";
	}
	else{
		echo mysqli_error($conn);
	}
 } ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Berita Jogja</title>
	<style>
		label{
			display: block;
		}
	</style>
</head>
<body>
<link rel="stylesheet" type="text/css" href="regis.css">
<h1>Berita Jogja</h1>

<form action="" method="post">

	<ul>
		<li>
			<label for="username">Username :</label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">Password :</label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<label for="password2">Masukkan Password lagi :</label>
			<input type="password" name="password2" id="password2">
		</li>
		<li>
			<button type="submit" name="register">Register!</button>
			<button type="submit" name="login">Login</button>
		</li>
	</ul>
	

</form>
</body>
</html>