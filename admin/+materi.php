<?php include("koneksi.php")?>
<!doctype html>
<html>
  <head>
    <title>Materi</title>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="header">
    <table>
      <tr align="center">
        <td><a href="beranda.php" align="center"><i class="fa-solid fa-house fa-2x"></i></i></td>
        <td><img src="img/dnbs.png" alt="" height="100" width="200"></td>
      </tr>
    </table>
    <table align="center">
        <tr align="center">
            <td><a class="navbar-brand" href="materi.php"><button>materi</button></a></td>
        </tr>
    </table>
</div>
<form method="post" action="prosesmt.php" enctype="multipart/form-data">
<div class="konten"> 
<table align="center">
        <tr align="center">
            <td>Tambah Materi</td>
        </tr>
    </table>
    <table align="center">
        <tr align="center">
            <th>Mata Kuliah</th>
            <th>keterangan</th>
            <th>materi</th>
        </tr>
        <tr>
            <td><input type="text" name="matkul"></td>
            <td><input type="text" name="keterangan"></td>
            <td><input type="file" name="materi" id="file" required></td>
        </tr>
        <tr>
            <td colspan="3" align="center"><input type="submit" value="simpan" name="kirim"></td>
        </tr>
    </table>
</div>
</form>
    </center>
    <div class="footer">
  <p align="center"><b>&copy; 2023 - Fadli-Iwan</b></p>
</div>
  </body>
</html>