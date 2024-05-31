<?php
include("koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM mahasiswa WHERE id = $id";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "Data tidak ditemukan";
        exit();
    }
} else {
    echo "ID tidak valid";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $NIM = $_POST['NIM'];
    $kelas = $_POST['kelas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
      
    if ($_FILES['foto']['error'] == 0) {
        $foto_name = $_FILES['foto']['name'];
        $foto_temp = $_FILES['foto']['tmp_name'];
        $foto_path = "upload/" . $foto_name;

        move_uploaded_file($foto_temp, $foto_path);

          $query = "UPDATE mahasiswa SET nama='$nama', jk='$jk', NIM='$NIM', kelas='$kelas', username='$username', password='$password', foto='$foto_name' WHERE id=$id";
    } else {
        $query = "UPDATE mahasiswa SET nama='$nama', jk='$jk', NIM='$NIM', kelas='$kelas', username='$username', password='$password', foto='$foto_name' WHERE id=$id";
    }

    if (mysqli_query($db, $query)) {
        header("Location: list.php?edit=sukses");
        exit();
    } else {
        header("Location: list.php?edit=gagal&error=" . urlencode(mysqli_error($db)));
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title> Edit Data </title>
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
<div class="header">
    <table>
      <tr align="center">
          <td><a href="beranda.php" align="center"><i class="fa-solid fa-house fa-2x"></i></i></td>
            <td><img src="img/dnbs.png" alt="" height="100" width="200"></td>
      </tr>
    </table>
</div>
    

    <form action="edit.php?id=<?php echo $data['id']; ?>" method="post" enctype="multipart/form-data">
    <center><h1><b>Edit Data</b></h1>
  
        <table border="0">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            
			<tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $data['nama'];?>/></td>
			<tr> 
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jk" value="Laki-laki"<?php if ($data ['jk'] == 'laki laki') echo 'checked';?>>Laki-laki
                    <input type="radio" name="jk" value="Perempuan"<?php if ($data ['jk'] == 'perempuan') echo 'checked';?>>Perempuan</td>
            </tr>
			<tr>
                <td>NIM</td>
                <td><input type="number" name="nim" value=<?php echo $data['NIM'];?> required/></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value=<?php echo $data['kelas']?> ; required /></td>
            </tr>
            <tr>
                <td>username</td>
                <td><input type="text" name="username" value=<?php echo $data['username']?> ; required /></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="text" name="password" value=<?php echo $data['password']?> ; required /></td>
            </tr>
            <tr>
				<td>Foto</td>
                <td><input type="file" name="foto">
				<img src="upload/<?php echo $data['foto']?>" alt="<?php echo $data['foto']?>" height="100px"><br></td>
			</tr>
			<tr>
				<td><input type="submit" value="simpan"></td>
			</tr>
		</table>
    </form></center>       
</body>
</html>

    
