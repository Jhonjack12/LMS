<?php
include("koneksi.php");

if(isset($_POST['kirim'])) {
    // ambil data dari form
    $matkul = $_POST['matkul'];
    $keterangan = $_POST['keterangan'];

    // ambil informasi file materi
    $materi = $_FILES['materi']['name'];
    $tempfile = $_FILES['materi']['tmp_name'];
    $tipe_file = $_FILES['materi']['type'];

    //directory

        $sql = "INSERT INTO materi(`matkul`, `keterangan`, `materi`) 
                VALUES ('$matkul','$keterangan','$materi')";
        $query = mysqli_query($db, $sql);
    }else{
        echo "penggunggahan gagal.";
    }
        // Cek berhasil atau gagal
        if($query){
            // Jika berhasil, alihkan ke halaman index dengan pesan sukses
            header('location: materi.php?update=sukses');
        } else {
            // Jika gagal, alihkan ke halaman index dengan pesan gagal
            header('location: materi.php?update=gagal');
        }


