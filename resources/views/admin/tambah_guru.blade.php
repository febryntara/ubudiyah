@extends('layouts.dashboard-layout') @section('body')
    <h2 class="text-center">Tambahkan Guru</h2>

    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Foto">Foto</label>
            <input type="file" class="form-control" name="foto">
        </div>
        <div class="form-group">
            <label for="Nama">Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label for="Jk">Jenis Kelamin</label>
            <input type="text" class="form-control" name="Jk">
        </div>
        <div class="form-group">
            <label for="tlp">No. Telepon</label>
            <input type="text" class="form-control" name="tlp">
        </div>
        <button class="btn btn-primary" name="save">Simpan</button>
        <a href="index.php?halaman=produk" class="btn btn-warning">Kembali</a>
    </form>
@endsection()
