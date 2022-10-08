@extends('layouts.dashboard-layout')
@section('body')
    <h2 class="text-center">Acara</h2>
    @can('admin')
        <a href="{{ route('acara.create') }}" class="btn btn-primary"> [+] Tambahkan</a>
    @endcan
    @can('guru')
        <a href="{{ route('acara.create') }}" class="btn btn-primary"> [+] Tambahkan</a>
    @endcan
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Judul</th>
                <th>Ketua Panitia</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($acara as $item)
                <tr>
                    <td><img width="100"
                            src="{{ $item->images->count() ? asset('storage/' . $item->images->first()->src) : 'gada' }}"
                            alt="">
                    </td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->ketua_panitia }}</td>
                    <td>{{ $item->status_kegiatan == 0 ? 'Belum Mulai' : 'Telah Selesai' }}
                    </td>
                    <td class="">
                        <a href="{{ route('acara.detail', ['acara' => $item]) }}" class="btn btn-primary">Lihat</a>
                        @can('admin')
                            <a href="{{ route('acara.update', ['acara' => $item]) }}" class="btn btn-warning">Ubah</a>
                            <form action="{{ route('acara.delete', ['acara' => $item]) }}" style="display: inline"
                                method="post">
                                @csrf @method('delete')
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        @endcan
                        @can('guru')
                            <a href="{{ route('acara.update', ['acara' => $item]) }}" class="btn btn-warning">Ubah</a>
                            <form action="{{ route('acara.delete', ['acara' => $item]) }}" style="display: inline"
                                method="post">
                                @csrf @method('delete')
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection()
