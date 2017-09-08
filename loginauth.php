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

	$count = 0;
	$count = $test->num_rows;
	
	if ($count > 0) {
		echo "<p> Username Password Benar </p>";
	} else {
		echo "Username Password ";
	}

 ?>

 <p> TEST </p>
</body>

</html>