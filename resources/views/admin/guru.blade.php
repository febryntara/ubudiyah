@extends('layouts.dashboard-layout') @section('body')
    <h2 class="text-center">Data Guru</h2>

    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>No.</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>No. Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    <a href="/admin/tambah_guru" class="btn btn-primary"> [+] Tambahkan</a>
@endsection()
