<?php include("koneksi.php")?>
<!DOCTYPE html>
<head>
    <title>view</title>
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
        table{background: black;}
        table td {padding: 2px; margin: 2px; background: #3498db;}
        table tr:nth-child(odd) td {background: #3498db;}
    </style>
</head>
<body>
    
<center>
<?php
//kalau tidak ada id maka redirect ke index
if(!isset($_GET['id'])){
    header('location: list.php');
}
$id = $_GET['id'];

//query untuk menampilkan data bedasarkan id
$sql = "SELECT * FROM mahasiswa WHERE id= $id";
$query = mysqli_query($db, $sql);

$data = mysqli_fetch_assoc($query);

//jika data yg ditampilkan tidak ada 
if(mysqli_num_rows($query) <1){
    die("data tidak ditemukan");
}
?>
<div class="header">
    <table>
      <tr align="center">
      <td><a href="beranda.php" align="center"><i class="fa-solid fa-house fa-2x"></i></i></td>
            <td><img src="img/dnbs.png" alt="" height="100" width="200"></td>
      </tr>
    </table>
</div>
<br>
<table>
    <tr>
        <td>nama</td>
        <td><?php echo $data['nama']?></td>
    </tr>
    <tr>
          <td>jenis kelamin</td>
          <td><?php echo $data['jk']?></td>
        </tr>
        <tr>
          <td>NIM</td>
          <td><?php echo $data['NIM']?></td>
        </tr>
        <tr>
          <td>kelas</td>
          <td><?php echo $data['kelas']?></td>
        </tr>
        <tr>
          <td>username</td>
          <td><?php echo $data['username']?></td>
        </tr>
        <tr>
          <td>password</td>
          <td><?php echo $data['password']?></td>
        </tr>
            <tr>
            <td>foto</td>
            <td>
                <img src="upload/<?php echo $data['foto']?>" alt="<?php echo $data['foto']?>" height="100px">
            </td>
        </tr>
</table>
</center>
</body>
</html>