<?php 
session_start();
if($_SESSION['status'] != "login"){
  header('location: login.php?msg=notlogin');
}
include("koneksi.php");
$sql = "SELECT * FROM materi";
$query = mysqli_query($db, $sql);
$nomor = 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>learning management system</title>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <table>
      <tr align="center">        
            <td><img src="img/dnbs.png" alt="" height="100" width="200"></td>
            <td><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket fa-2x"></i></td>
      </tr>
    </table>
</div>
<br>
<div class="konten"> 
        <Table align="center">
        <tr align="center"> 
            <th><b>Learning Management System</b></th>
        </tr>
        </Table>
        <br>
    <table align="center">
        <tr align="center">
            <th>No</th>
            <th>Mata Kuliah</th>
            <th>keterangan</th>
            <th>materi</th>
            <th>unduh</th>
        </tr>
        <?php
        while($materi = mysqli_fetch_array($query)) {
        ?>
        <tr>
        <td><?php echo $nomor++ ?></td>
            <td><?php echo $materi ['matkul']?></td>
            <td><?php echo $materi ['keterangan']?></td>
            <td><i class="fa-solid fa-file">&nbsp;</i><?php echo $materi ['materi']?></td>
            <td><center><a href="#"><i class="fas fa-download"></i></center></td>
        </tr>
        <?php }?>
    </table>
    </div>
    <div class="footer">
  <p align="center"><b>&copy; 2023 - Fadli-Iwan</b></p>
</div>
</body>
</html>

