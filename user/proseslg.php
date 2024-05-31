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
    header('location: home.php?login=berhasil');
} else { 
    header('location: login.php?msg=gagal');
}
?>