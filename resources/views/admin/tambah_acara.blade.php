@extends('layouts.dashboard-layout')

@section('body')
    <form action="{{ route('acara.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <h4>Informasi Acara</h4>
        <div class="input-group">
            <span class="input-group-addon" id="nama_acara">Acara</span>
            <input name="nama" type="text" class="form-control" placeholder="Nama Acara" aria-describedby="nama_acara">
        </div>
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="ketua_panitia">Ketua Panitia</span>
            <input name="ketua_panitia" type="text" class="form-control" placeholder="Nama Ketua Panitia"
                aria-describedby="ketua_panitia">
        </div>
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="penanggung_jawab">Penanggung Jawab</span>
            <input name="penanggung_jawab" type="text" class="form-control" placeholder="Nama Penanggung Jawab"
                aria-describedby="penanggung_jawab">
        </div>
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="deskripsi">Deskripsi</span>
            <textarea name="deskripsi" type="text" class="form-control" placeholder="Deskripsi" aria-describedby="deskripsi"></textarea>
        </div>
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="jumlah_peserta">Jumlah Peserta</span>
            <input name="jumlah_peserta" type="number" class="form-control" placeholder="Jumlah Peserta"
                aria-describedby="jumlah_peserta">
        </div>
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="tanggal_mulai">Tanggal Mulai</span>
            <input name="tanggal_mulai" type="date" class="form-control" placeholder="Tanggal Mulai"
                aria-describedby="tanggal_mulai">
        </div>
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="tanggal_selesai">Tanggal Selesai</span>
            <input name="tanggal_selesai" type="date" class="form-control" placeholder="Tanggal Selesai"
                aria-describedby="tanggal_selesai">
        </div>
        <h4>Status Acara</h4>
        <div class="input-group">
            <span class="input-group-addon">
                <input type="radio" id="radio_value_0" name="status_kegiatan" value="0">
            </span>
            <label for="radio_value_0" class="form-control">Belum Mulai</label>
        </div>
        <div class="input-group">
            <span class="input-group-addon">
                <input type="radio" id="radio_value_1" name="status_kegiatan" value="1">
            </span>
            <label for="radio_value_1" class="form-control">Sudah Selesai</label>
        </div>
        <h2>Gambar</h2>
        <img width="140" id="preview_gambar" alt="gambar">
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
