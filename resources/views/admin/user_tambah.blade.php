@extends('layouts.dashboard-layout')
@section('body')
    <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <h4>Informasi Pribadi</h4>
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="name">Nama</span>
            <input value="{{ old('name') }}" name="name" type="text" class="form-control" placeholder="Nama Lengkap"
                aria-describedby="name">
        </div>
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="email">Email</span>
            <input value="{{ old('email') }}" name="email" type="email" class="form-control" placeholder="Email"
                aria-describedby="email">
        </div>
        @error('email')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="password">Password</span>
            <input value="{{ old('password') }}" name="password" type="password" class="form-control" placeholder="Password"
                aria-describedby="password">
        </div>
        @error('password')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="password_2">Kondirmasi Password</span>
            <input value="{{ old('password_2') }}" name="password_2" type="password" class="form-control"
                placeholder="Konfirmasi Password" aria-describedby="password_2">
        </div>
        @error('password_2')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="tanggal_lahir">Tanggal Lahir</span>
            <input value="{{ old('tanggal_lahir') }}" name="tanggal_lahir" type="date" class="form-control"
                placeholder="Tanggal Lahir" aria-describedby="tanggal_lahir">
        </div>
        @error('tanggal_lahir')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="tempat_lahir">Tempat Lahir</span>
            <input value="{{ old('tempat_lahir') }}" name="tempat_lahir" type="text" class="form-control"
                placeholder="Tempat Lahir" aria-describedby="tempat_lahir">
        </div>
        @error('tempat_lahir')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="umur">Umur</span>
            <input value="{{ old('umur') }}" name="umur" type="number" class="form-control" placeholder="Umur :tahun"
                aria-describedby="umur">
        </div>
        @error('umur')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <h4>Jenis Kelamin</h4>
        @error('jenis_kelamin')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon">
                <input type="radio" id="radio_value_0" name="jenis_kelamin" value="0"
                    {{ old('jenis_kelamin') == 0 ? 'checked' : null }}>
            </span>
            <label for="radio_value_0" class="form-control">Laki Laki</label>
        </div>
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon">
                <input type="radio" id="radio_value_1" name="jenis_kelamin" value="1"
                    {{ old('jenis_kelamin') == 1 ? 'checked' : null }}>
            </span>
            <label for="radio_value_1" class="form-control">Perempuan</label>
        </div>
        <h4>Daftarkan Sebagai</h4>
        @error('role_id')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon">
                <input type="radio" id="radio_role_id_1" name="role_id" value="1"
                    {{ old('role_id') == 1 ? 'checked' : null }}>
            </span>
            <label for="radio_role_id_1" class="form-control">Siswa</label>
        </div>
        @can('admin')
            <div class="input-group" style="margin-top: 3px">
                <span class="input-group-addon">
                    <input type="radio" id="radio_role_id_2" name="role_id" value="2"
                        {{ old('role_id') == 2 ? 'checked' : null }}>
                </span>
                <label for="radio_role_id_2" class="form-control">Guru</label>
            </div>
            <div class="input-group" style="margin-top: 3px">
                <span class="input-group-addon">
                    <input type="radio" id="radio_role_id_3" name="role_id" value="3"
                        {{ old('role_id') == 3 ? 'checked' : null }}>
                </span>
                <label for="radio_role_id_3" class="form-control">Umum</label>
            </div>
        @endcan
        <h2>Gambar</h2>
        @error('gambar')
            <p class="text-danger">{{ $message }}</p>
        @enderror
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
