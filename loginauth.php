<?php include 'config/db.php' ?>

<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
</head>
<body>

<?php 
	$username = $_POST['username'];
	$password = $_POST['password'];


	$query = "SELECT id FROM user WHERE username='$username' AND password='$password'";


	$test = $koneksi->query($query);

	
	$count = $test->num_rows;

	if ($count = 0) {
		echo " Username Password Salah";
	} else {
		echo "Username Password Benar";
	}

 ?>

 <p> TEST </p>
</body>

</html>