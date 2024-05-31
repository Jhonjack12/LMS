<?php

include("koneksi.php");

// cek apakah tombol simpan sudah di klik atau belum

if(isset($_POST['kirim'])){

    // ambil data dari form

    $matkul = $_POST['matkul'];
    $keterangan = $_POST['keterangan'];
    
    $sql = "INSERT INTO `matkul`(`matkul`, `keterangan`) 
    VALUES ('$matkul','$keterangan')";
    $query = mysqli_query($db, $sql);

    // cek berhasil atau gagal
    if($query){
        //jika berhasil alihkan ke halaman index dengan message data berhasil disimpan
        header('location: matkul.php');
    }else{
        //jika gagal alihkan ke halaman index dengan message data gagal di simpan
        header('location: matkul.php');
    }

}else{
    die("akses tidak diizinkan");
}



