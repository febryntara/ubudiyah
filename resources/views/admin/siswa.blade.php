@extends('layouts.dashboard-layout')
@section('body')
    <h2 class="text-center">Daftar Siswa</h2>
    @can('admin')
        <a href="{{ route('user.create') }}" class="btn btn-primary"> [+] Tambahkan</a>
    @endcan
    @can('guru')
        <a href="{{ route('user.create') }}" class="btn btn-primary"> [+] Tambahkan</a>
    @endcan
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>Nama</th>
                <th>No Telepon</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $item)
                <tr>
                    <td>{{ $item->name }}
                    </td>
                    <td>{{ $item->userRole->name }}</td>
                    <td>{{ $item->email }}</td>
                    </td>
                    <td class="">
                        <a href="{{ route('user.detail', ['user' => $item]) }}" class="btn btn-primary">Lihat</a>
                        @can('admin')
                            <a href="{{ route('user.update', ['user' => $item]) }}" class="btn btn-warning">Ubah</a>
                            <form action="{{ route('user.delete', ['user' => $item]) }}" style="display: inline" method="post">
                                @csrf @method('delete')
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        @endcan
                        @can('guru')
                            <a href="{{ route('user.update', ['user' => $item]) }}" class="btn btn-warning">Ubah</a>
                            <form action="{{ route('user.delete', ['user' => $item]) }}" style="display: inline" method="post">
                                @csrf @method('delete')
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
