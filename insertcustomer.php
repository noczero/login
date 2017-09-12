<?php 
include 'config/db.php';
  $noktp = $koneksi->escape_string($_POST['noktp']);
  $username = $koneksi->escape_string($_POST['username']);
  $password = $koneksi->escape_string($_POST['password']);
  $address = $koneksi->escape_string($_POST['address']);
  $age = $koneksi->escape_string($_POST['age']);
  $gender = $koneksi->escape_string($_POST['gender']);
  $notel = $koneksi->escape_string($_POST['notel']);



  $insertQuery = "INSERT INTO customer (no_ktp,username,password,nama,alamat,umur,jenis_kelamin,no_telepon) VALUES ('$noktp','$username','$password','$address','$age','$gender','$notel')";

  $koneksi->query($insertQuery);
  echo "
    <script> alert('Registrasi Sukses') 
    window.location = 'login.php';
    </script>
  ";
  
 ?>