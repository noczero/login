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

	if ($koneksi->query($query) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "ERROR";
	}


	if ($hasil->num_rows = 0) {
		echo "<p> Username Password Salah</p>";
	} else {
		echo "<p> Username Password Benar</p>";
	}

 ?>

 <p> TEST </p>
</body>

</html>