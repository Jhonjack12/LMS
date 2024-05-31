<?php include("koneksi.php");
// cek apakah tombol simpan sudah di klik atau belum
if(isset($_POST['kirim'])){

    // ambil data dari form

    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $NIM = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $username = $_POST['username'];
    $password = $_POST ['password'];
    // ambil foto
    $foto = $_FILES['foto']['name'];
    $tempfile = $_FILES['foto']['tmp_name'];

    //directory
    $dirupload = "upload/";

    //upload image
    $terupload = move_uploaded_file($tempfile,$dirupload.$foto);

    if($terupload){
    // buat query insert

    $sql = "INSERT INTO `mahasiswa`(`nama`, `jk`, `NIM`, `kelas`, `username`, `password`, `foto`)
    VALUES ('$nama','$jk','$NIM', '$kelas' ,'$username','$password','$foto')";
    
    // eksekusi perintah query
    $query = mysqli_query($db, $sql);
    }else {
        die('gagal upload file');
    }
    // cek berhasil atau gagal
    if($query){
        //jika berhasil alihkan ke halaman index dengan message data berhasil disimpan
        header('location: list.php?status=sukses');
    }else{
        //jika gagal alihkan ke halaman index dengan message data gagal di simpan
        header('location: list.php?status=gagal');
    }

}else{
    die("akses tidak diizinkan");
}

