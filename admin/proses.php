<?php

include("../config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nm = $_POST['nm'];
    $exp = $_POST['exp'];
    $pvr = $_POST['pvr'];
    // buat query
    $sql = "INSERT INTO ckr (nm, exp, pvr) VALUE ('$nm', '$exp', '$pvr')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>