@extends('layouts.dashboard-layout') @section('body')
    <?php

    $ambil = $koneksi->query("SELECT * FROM guru WHERE id_guru = '$_GET[id]'");
    $pecah = $ambil->fetch_assoc();
    $foto_guru = $pecah['foto_guru'];

    if (file_exists("../foto_guru/$foto_guru")) {
        unlink("../foto_guru/$foto_guru");
    }

    $koneksi->query("DELETE FROM guru WHERE id_guru = '$_GET[id]'");

    echo "<script>location='index.php?halaman=guru'; </script>";

    ?>
@endsection()
