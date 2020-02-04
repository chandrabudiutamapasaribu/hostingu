<?php
	session_start();
	
		include 'koneksi.php';
		$email = $_POST['email'];
		$password = $_POST['password'];
		$_SESSION['profil'] = $email;

		$query = mysqli_query($conn,"SELECT * FROM login WHERE email = '$email' and password = '$password'");
		$cek = mysqli_num_rows($query);
	if ($cek > 0) {
		header("location:dashbord/index.php");
	}else{
		header("location:index.php?message=gagal");
	}
	
	