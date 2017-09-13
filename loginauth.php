<?php 
	include 'config/db.php'; 


	$username =$_POST['username'];
	$password = $_POST['password'];

	// pastikan username dan password adalah berupa huruf atau angka.
	if (!ctype_alnum($username) OR !ctype_alnum($password)){
	  header('location:login.php');
	}else{
		$query = "SELECT * FROM customer WHERE username='$username' AND password='$password'";

		$result = mysqli_query($koneksi,$query);

		$count = mysqli_num_rows($result);

		if ($count > 0) {
			echo "<script> 
			alert('Login Berhasil')
			window.location = 'index.php'; </script>";
		} else {
			echo " <script> alert('username password salah') 
    				window.location = 'login.php';
    				</script>";
		}
	}

 ?>


