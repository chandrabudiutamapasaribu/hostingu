<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="script/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="script/style-daftar.css">
</head>
<body>
	<h1>DAFTAR chanzmusic GUITAR STORE</h1>
	<br/>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Registrasi</p>

		<form action="cek-daftar.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email ..">

			<label>Password</label>
			<input type="password" name="password" class="form_login" id="password" placeholder="Password ..">
			<input type="checkbox" class="check" value="Password">Show Password<br/>

			<input type="submit" class="tombol_login" value="DAFTAR">

			<br/>
			<br/>
			<!-- <center>
				<a class="link" href="daftar.php">DAFTAR</a>
			</center> -->
		</form>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.check').click(function() {
				if ($(this).is(':checked')) {
					$("#password").attr('type', 'text');
				}else{
					$("#password").attr('type', 'password');
				}
			});
		});
	</script>
</body>
</html>
