<?php include("koneksi.php");

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
            <td><a href="beranda.php" align="center"><i class="fa-solid fa-house fa-2x"></i></a></td>
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
<form method="post" action="prosesmt.php" enctype="multipart/form-data">
<div class="konten"> 
        <Table align="center">
        <tr align="center"> 
            <td><a href="+materi.php"><input type="button" value="tambah data"></a></td>
        </tr>
        </Table>
        <br>
    <table align="center">
        <tr align="center">
            <th>No</th>
            <th>Mata Kuliah</th>
            <th>keterangan</th>
            <th>materi</th>
            <th>Aksi</th>
        </tr>
        <?php
        while($materi = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $nomor++ ?></td>
            <td><?php echo $materi ['matkul']?></td>
            <td><?php echo $materi ['keterangan']?></td>
            <td><i class="fa-solid fa-file"></i>&nbsp;<?php echo $materi ['materi']?></td>
            <td><center>
              <a href="hapusmt.php?id=<?php echo $materi['id']; ?>" onclick="return confirm('Data ini akan dihapus ?')"><i class="fas fa-trash"></i></a>
          </center></td>
        </tr>
        <?php }?>
    </table>
    </div>
</form>

    <div class="footer">
  <p align="center"><b>&copy; 2023 - Fadli-Iwan</b></p>
</div>
</body>
</html>