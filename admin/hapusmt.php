<?php include("koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM materi WHERE id=$id";

    if (mysqli_query($db, $query)) {
        header("Location: materi.php?hapus=sukses");
        exit();
    } else {
        header("Location: materi.php?hapus=gagal&error=" . urlencode(mysqli_error($db)));
        exit();
    }
} else {
    echo "ID tidak valid";
    exit();
}

if (isset($_GET['hapus'])) {
    if ($_GET['hapus'] == 'true') {
        echo 'Data berhasil dihapus';
    } elseif ($_GET['hapus'] == 'false') {
        echo 'Gagal hapus data. Error: ' . $_GET['error'];
    }
}
?>