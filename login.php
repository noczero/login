<?php include 'config/db.php' ?>

<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
</head>
<body>

<h1>Login Page</h1>
<p>Login Form.</p>

<form action="loginauth.php" method="POST">
  Username<br>
  <input type="text" name="username"><br>
  Password<br>
  <input type="text" name="password">
  <br>
  <input type="submit" value="Login">
</form>

</body>
</html>