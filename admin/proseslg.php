<?php 

session_start();
include("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM mahasiswa WHERE username='$username' AND password='$password'";
$query = mysqli_query($db ,$sql);

$data = mysqli_num_rows($query);
if ($data> 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status']='login';
    header('location: beranda.php?login=berhasil');
} else { 
    header('location: index.php?msg=gagal');
}
?>