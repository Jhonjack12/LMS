<?php 

include("koneksi.php")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>learning management system</title>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f2f2f2;
    max-height: 100%;
    margin: 0;
    padding: 0;
    color: #333;
}
.konten{
    font-family: 'Times New Roman', Times, serif;
    font-size: large;
    margin: 20px auto;
    max-width: 100%;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
    .konten table{
    padding: 20px;
    width: 100%;
    background-color: #3498db;
    color: white;
    border-collapse: collapse;
    margin-top: 20px;
    border: 1px solid #3498db;
}
.konten th{
    padding: 10px;
}
.konten td{
    background-color: white;
    color: black;
    border: 1px solid #3498db;
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
.footer {
    height: 50px;
    background-color: #2c3e50;
    color: white;
    text-align: center;
    line-height: 50px;
    font-size: 14px;
}
    </style>
</head>
<body>
 
<div class="header">
    <table>
      <tr align="center">
          <td><a href="" align="center"><i class="fa-sharp fa-solid fa-bars fa-2x"></i></td>
            <td><img src="img/dnbs.png" alt="" height="100" width="200"></td>
          <td><a href="login.php"><i class="fa-solid fa-right-to-bracket fa-2x"></i></a></td>
      </tr>
    </table>
</div>
<br>
<div class="konten"> 
        <Table align="center">
        <tr align="center"> 
            <th><b>LEARNING MANAGEMENT SYSTEM</b></th>
        </tr>
        </Table>
        <br>
    <table align="center">
        <tr align="center">
            <th>Mata Kuliah</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
        <?php
        $sql = "SELECT * FROM matkul "; 
        $query = mysqli_query($db, $sql);
        $nomor = 1;
        while($matkul = mysqli_fetch_array($query)){
        ?>
        <tr>
        <tr height =" 100px">
            <td><b> &nbsp; <?php echo $matkul ['matkul']?></b></td>
            <td> &nbsp; <?php echo $matkul ['keterangan']?></td>
        </tr>
        <?php } ?>
    </table>
    </div>
    <div class="footer">
  <p align="center"><b>&copy; 2023 - Fadli-Iwan</b></p>
</div>
</body>
</html>

