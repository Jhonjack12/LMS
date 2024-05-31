<?php include("koneksi.php")?>
<!DOCTYPE html>
<html>
<head>
    <title>List Data</title>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <style>
      body {
    font-family: 'Arial', sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
    color: #333;
}
      .header{
    background-color: #3498db;
    padding: 4px;
    color: white;
    text-align: center;
}
.header table{
    text-align: center;
    padding:5;
    width:100%;
}
button{
    padding: 10px;
    color: white;
    background-color: blue;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
      #satu {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }
      #satu td,#satu th {
        border: 1px solid #add;
        padding: 8px;
      }
      #satu tr:nth-child(even){background-color: #FFC;}
      #satu tr:hover {background-color: #add;}
      #satu th {
        padding-top: 12px;
        padding-bottom : 12px;
        text-align: left;
        background-color: green;
        color: white;
      }
      .btn{padding: 10px; background-color: greenyellow;}
    </style>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
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

<h1><b>List Data Mahasiswa</b></h1><br>

    <a href="input.php"><input class="btn" type="button" value="Tambah Data"></a>
    <br><br>

    <form action="" method="get">
      <label for="cari">cari</label>
      <input type="text" name="cari" id="cari">
      <input type="submit" value="cari">
    </form>
 
    <?php
    if(isset($_GET['cari'])){
      $cari = $_GET['cari'];

      echo"<br> hasil pencarian : $cari </br>";
    }
    ?>
      <br>
    <table id="satu">
        <tr>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>jenis kelamin</th>
                <th>NIM</th>
                <th>kelas</th>
                <th>username</th>
                <th>password</th>
                <th>foto</th>
                <th>aksi</th>
            </tr>

        <?php
        if(isset($_GET['cari'])){
          $cari = $_GET['cari'];
          $sql = "SELECT * FROM `mahasiswa` WHERE nama LIKE '%$cari%' ORDER BY id desc";
        }else{
          $sql = "SELECT * FROM mahasiswa ORDER BY id desc";
        }
        $query = mysqli_query($db,$sql);
        $nomor =1;
        while($mahasiswa = mysqli_fetch_array($query)){
        ?>
        
        <tr>
            <td><?php echo $nomor++ ?></td>
            <td><?php echo $mahasiswa ['nama']?></td>
            <td><?php echo $mahasiswa ['jk']?></td>
            <td><?php echo $mahasiswa ['NIM']?></td>
            <td><?php echo $mahasiswa ['kelas']?></td>
            <td><?php echo $mahasiswa ['username']?></td>
            <td><?php echo $mahasiswa ['password']?></td>
            <td><?php echo $mahasiswa ['foto']?></td>
            <td><center>
              <a href="view.php?id=<?php echo $mahasiswa['id']?>"><i class="fas fa-eye"></i></a>&nbsp;
              <a href="edit.php?id=<?php echo $mahasiswa['id']?>"><i class="fas fa-edit"></i></a>&nbsp;
              <a href="hapuslist.php?id=<?php echo $mahasiswa['id']?>" onclick="return confirm('Data ini akan dihapus ?')"><i class="fas fa-trash"></i></a>
          </center></td>
        </tr>
        <?php } ?>
    </table>
</form>
</body>
</html>