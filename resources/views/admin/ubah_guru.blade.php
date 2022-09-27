@extends('layouts.dashboard-layout') @section('body')
    <h2 class="text-center">Ubah Data Guru</h2>

    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama Guru</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_guru']; ?>">
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <input type="text" name="Jk" class="form-control" value="<?php echo $pecah['jenis_kelamin']; ?>">
        </div>
        <div class="form-group">
            <label>No. Telepon</label>
            <input type="text" name="tlp" class="form-control" value="<?php echo $pecah['telepon']; ?>">
        </div>
        <div class="form-group">
            <img src="../foto_guru/<?php echo $pecah['foto_guru']; ?>" width="150" height="100">
        </div>
        <div class="form-group">
            <label>Ganti Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <button class="btn btn-primary" name="ubah">Ubah</button>
        <a href="index.php?halaman=guru" class="btn btn-warning">Kembali</a>
    </form>
@endsection()
