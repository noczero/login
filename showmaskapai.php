<?php include 'config/db.php' ?>

<!DOCTYPE html>
<html>
<head>
<title>USER TABLE</title>
</head>
<body>
<table style="width:100%">
  <tr>
    <th>id</th>
    <th>nama maskapai</th> 
  </tr>
<?php 


	$query = "SELECT * FROM maskapai";
	$ambil = $koneksi->query($query);

	while ($pecah = $ambil->fetch_assoc()) {
                                       
                                    
 ?>


  <tr>
    <td><?php echo $pecah['id']; ?></td>
    <td><?php echo $pecah['namamaskapai']; ?></td> 
  </tr>

  <?php 
	}
   ?>
 
</table>

 <p> TEST </p>
</body>

</html>