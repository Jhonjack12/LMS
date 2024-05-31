<?php 
session_start();
if($_SESSION['status']!= "login"){
  header('location: index.php?msg=notlogin');
}

include("koneksi.php")?>
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
            <td><a href="beranda.php" align="center"><i class="fa-solid fa-house fa-2x"></i></a></td>
            <td><img src="img/dnbs.png" alt="" height="100" width="200"></td>
            <td><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket fa-2x"></i></td>
      </tr>
    </table>
    <table align="center">
        <tr align="center">
            <td><a class="navbar-brand" href="matkul.php"><button>mata kuliah</button></a></td>
            <td><a class="navbar-brand" href="materi.php"><button>materi</button></a></td>
            <td><a class="navbar-brand" href="list.php"><button>data mahasiswa</button></a></td>
        </tr>
    </table>
</div>
<br>
<div class="konten"> 
        <Table align="center">
        <tr align="center"> 
            <th><b>Selamat datang di Admin learning management system <br> Sekolah Tinggi Managemen Ilmu Komputer Dharma Negara Bandung <br>
                <img src="img/DNBS-PNG-1.png" alt="" height="200" width="150"><br>Selamat Bekerja :)</b></th>
        </tr>
        </Table>
    </div>
    <div class="footer">
  <p align="center"><b>&copy; 2023 - Fadli-Iwan</b></p>
</div>
</body>
</html>

