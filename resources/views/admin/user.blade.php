@extends('layouts.dashboard-layout')
@section('body')
    <h2 class="text-center">User</h2>
    <a href="{{ route('user.create') }}" class="btn btn-primary"> [+] Tambahkan</a>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Role</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
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
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection()
