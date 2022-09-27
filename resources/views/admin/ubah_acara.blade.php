@extends('layouts.dashboard-layout')

@section('body')
    <form action="{{ route('acara.patch', ['acara' => $acara]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <h4>Informasi Acara</h4>
        <div class="input-group">
            <span class="input-group-addon" id="nama_acara">Acara</span>
            <input name="nama" value="{{ old('nama') ?? $acara->nama }}" type="text" class="form-control"
                placeholder="Nama Acara" aria-describedby="nama_acara">
        </div>
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="ketua_panitia">Ketua Panitia</span>
            <input value="{{ old('ketua_panitia') ?? $acara->ketua_panitia }}" name="ketua_panitia" type="text"
                class="form-control" placeholder="Nama Ketua Panitia" aria-describedby="ketua_panitia">
        </div>
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="penanggung_jawab">Penanggung Jawab</span>
            <input value="{{ old('penanggung_jawab') ?? $acara->penanggung_jawab }}" name="penanggung_jawab" type="text"
                class="form-control" placeholder="Nama Penanggung Jawab" aria-describedby="penanggung_jawab">
        </div>
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="deskripsi">Deskripsi</span>
            <textarea name="deskripsi" type="text" class="form-control" placeholder="Deskripsi" aria-describedby="deskripsi">{{ old('deskripsi') ?? $acara->deskripsi }}</textarea>
        </div>
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="jumlah_peserta">Jumlah Peserta</span>
            <input value="{{ old('jumlah_peserta') ?? $acara->jumlah_peserta }}" name="jumlah_peserta" type="number"
                class="form-control" placeholder="Jumlah Peserta" aria-describedby="jumlah_peserta">
        </div>
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="tanggal_mulai">Tanggal Mulai</span>
            <input value="{{ old('tanggal_mulai') ?? $acara->tanggal_mulai }}" name="tanggal_mulai" type="date"
                class="form-control" placeholder="Tanggal Mulai" aria-describedby="tanggal_mulai">
        </div>
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="tanggal_selesai">Tanggal Selesai</span>
            <input value="{{ old('tanggal_selesai') ?? $acara->tanggal_selesai }}" name="tanggal_selesai" type="date"
                class="form-control" placeholder="Tanggal Selesai" aria-describedby="tanggal_selesai">
        </div>
        <h4>Status Acara</h4>
        <div class="input-group">
            <span class="input-group-addon">
                <input type="radio" id="radio_value_0" name="status_kegiatan" value="belum_dimulai"
                    {{ old('status_kegiatan') ?? $acara->status_kegiatan == 'belum_dimulai' ? 'checked' : null }}>
            </span>
            <label for="radio_value_0" class="form-control">Belum Mulai</label>
        </div>
        <div class="input-group">
            <span class="input-group-addon">
                <input type="radio" id="radio_value_1" name="status_kegiatan" value="sudah_selesai"
                    {{ old('status_kegiatan') ?? $acara->status_kegiatan == 'sudah_selesai' ? 'checked' : null }}>
            </span>
            <label for="radio_value_1" class="form-control">Sudah Selesai</label>
        </div>
        <h2>Gambar</h2>
        @if ($acara->images->count())
            <img id="preview_gambar" width="140" src="{{ asset('storage/' . $acara->images->first()->src) }}"
                alt="gambar">
        @else
            <img width="140" id="preview_gambar" alt="gambar">
        @endif
        <div class="form-group">
            <input name="gambar" type="file" id="gambar" onchange="previewImage()">
            <p class="help-block">Masukan Gambar Acara Disini.</p>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

@section('script')
    <script>
        function previewImage() {
            const image = document.querySelector('#gambar');
            const imagePreview = document.querySelector('#preview_gambar');

            const fileImage = new FileReader();
            fileImage.readAsDataURL(image.files[0]);

            fileImage.onload = function(e) {
                imagePreview.src = e.target.result;
            }
        }
    </script>
@endsection
