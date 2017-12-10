
<div class="container-fluid">
    <div class="card">
        <div class="header">
            <h2>List Data Penerbangan</h2>
        </div>
        <div class="body">


             <table class="table">
                 <thead>
                     <tr>
                         <th>NO</th>
                         <th>Nama Maskapai</th>
                         <th>Kode Pesawat</th>
                         <th>Tipe Pesawat</th>
                         <th>Tujuan</th>
                         <th>Asal</th>
                         <th>Tanggal Penerbangan</th>
                         <th>Waktu Berangkat</th>
                         <th>Waktu Tiba</th>
                         <th>Harga</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                      <?php 

                        $id = $_SESSION['userID'];
                        $querySelect = "SELECT * FROM r_penerbangan INNER JOIN pesawat ON pesawat.id_pesawat=r_penerbangan.id_pesawat INNER JOIN maskapai ON pesawat.id_maskapai=maskapai.id_maskapai INNER JOIN jadwal ON jadwal.id_jadwal=r_penerbangan.id_jadwal WHERE maskapai.id_maskapai='$id'";

                        $result = mysqli_query($koneksi,$querySelect);
                        $no = 1;

                        while ($pecah = mysqli_fetch_assoc($result)) {


                     ?>
                     <tr>
                         <td><?php echo $no ?></td>
                         <td><?php echo $pecah['nama'] ?></td>
                         <td><?php echo $pecah['id_pesawat'] ?></td>
                         <td><?php echo $pecah['tipe'] ?></td>
                         <td><?php echo $pecah['tujuan'] ?></td>
                         <td><?php echo $pecah['asal'] ?></td>
                         <td><?php echo $pecah['tgl_penerbangan'] ?></td>
                         <td><?php echo $pecah['waktu_brkt'] ?></td>
                         <td><?php echo $pecah['waktu_tiba'] ?></td>
                         <td><?php echo $pecah['harga'] ?></td>
                         <td> 
                            <a href="index.php?page=maskapai&menu=viewjadwal&act=edit&id=<?php echo $pecah['id_penerbangan']; ?> ">Edit</a>
                            <a href="index.php?page=maskapai&menu=viewjadwal&act=delete&id=<?php echo $pecah['id_penerbangan']; ?> ">Delete</a>
                         </td>
                     </tr>

                     <?php 
                        $no++;
                        }
                      ?>
                 </tbody>
             </table>
        </div>
    </div>
</div>