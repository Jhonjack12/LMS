<?php include("koneksi.php")?>
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
          <td><a href="beranda.php" align="center"><i class="fa-solid fa-house fa-2x"></i></i></td>
            <td><img src="img/dnbs.png" alt="" height="100" width="200"></td>
            <td><a href="index.php"align="center" onclick="return confirm('Anda yakin akan Logout ?')" ><i class="fa-solid fa-arrow-right-from-bracket fa-2x"></i></td>
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
        <table align="center">
            <tr>
                <td><a href="+matkul.php"><input type="button" value="tambah data"></a></td>
            </tr>
        </table>
    <table align="center">
        <tr align="center">
            <th>No</th>
            <th>Mata Kuliah</th>
            <th>keterangan</th>
            <th>aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM matkul "; 
        $query = mysqli_query($db, $sql);
        $nomor = 1;
        while($matkul = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $nomor++ ?></td>
            <td><?php echo $matkul ['matkul']?></td>
            <td><?php echo $matkul ['keterangan']?></td>
            <td><center>
                <a href="hapus.php?id=<?php echo $matkul['id']; ?>"onclick="return confirm('Data ini akan dihapus ?')"><i class="fas fa-trash"></i></a>
            </center></td>
        </tr>
        <?php }?>
    </table>
    </div>
    <div class="footer">
  <p align="center"><b>&copy; 2023 - Fadli-Iwan</b></p>
</div>
</body>
</html>

