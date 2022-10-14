@extends('layouts.dashboard-layout')
@section('body')
    <form action="{{ route('absensi.store') }}" method="post">
        @csrf
        <label for="tanggal" class="block"><span class="block">tanggal</span>
            <input value="{{ $tanggal }}" class="block w-full px-2 py-1 rounded-md" type="text" name="tanggal">
        </label>
        <label for="kelas" class="block"><span class="block">kelas</span>
            <input value="{{ $kelas }}" class="block w-full px-2 py-1 rounded-md" type="number" max="12"
                min="1" name="kelas">
        </label>
        <h2 class="mt-10 text-4xl">Daftar Siswa</h2>
        <div class=" box-border bg-white">
            @foreach ($siswa as $data => $value)
                <input type="hidden" name="siswa[{{ $data }}][id]" value="{{ $value->id }}">
                <div class="grid grid-cols-2 {{ $data % 2 == 0 ? 'bg-gray-200' : null }}">
                    <div>{{ $value->name }}</div>
                    <div class="grid grid-cols-4">
                        <label for="hadir-{{ $data }}">
                            <input type="radio" id="hadir-{{ $data }}" name="siswa[{{ $data }}][absen]"
                                value="1">
                            <span class="capitalize">hadir</span>
                        </label>
                        <label for="ijin-{{ $data }}">
                            <input type="radio" id="ijin-{{ $data }}" name="siswa[{{ $data }}][absen]"
                                value="2">
                            <span class="capitalize">ijin</span>
                        </label>
                        <label for="sakit-{{ $data }}">
                            <input type="radio" id="sakit-{{ $data }}" name="siswa[{{ $data }}][absen]"
                                value="3">
                            <span class="capitalize">sakit</span>
                        </label>
                        <label for="alpa-{{ $data }}">
                            <input type="radio" id="alpa-{{ $data }}" name="siswa[{{ $data }}][absen]"
                                value="4">
                            <span class="capitalize">alpa</span>
                        </label>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="mt-3 btn btn-primary">buat absensi</button>
    </form>
@endsection()
