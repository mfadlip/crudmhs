<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];

    // buat query
    $sql = "INSERT INTO daftar (nama, npm) VALUE ('$nama', '$npm')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list-daftar.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: daftar.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>