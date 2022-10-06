@extends('layouts.dashboard-layout')
@section('body')
    @extends('layouts.dashboard-layout')
@section('body')
    <form action="{{ route('user.patch', ['user' => $user]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <h4>Informasi Pribadi</h4>
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="name">Nama</span>
            <input value="{{ old('name') ?? $user->name }}" name="name" type="text" class="form-control"
                placeholder="Nama Lengkap" aria-describedby="name">
        </div>
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="email">Email</span>
            <input value="{{ old('email') ?? $user->email }}" name="email" type="email" class="form-control"
                placeholder="Email" aria-describedby="email">
        </div>
        @error('email')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="tanggal_lahir">Tanggal Lahir</span>
            <input value="{{ old('tanggal_lahir') ?? $user->tanggal_lahir }}" name="tanggal_lahir" type="date"
                class="form-control" placeholder="Tanggal Lahir" aria-describedby="tanggal_lahir">
        </div>
        @error('tanggal_lahir')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="tempat_lahir">Tempat Lahir</span>
            <input value="{{ old('tempat_lahir') ?? $user->tempat_lahir }}" name="tempat_lahir" type="text"
                class="form-control" placeholder="Tempat Lahir" aria-describedby="tempat_lahir">
        </div>
        @error('tempat_lahir')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="umur">Umur</span>
            <input value="{{ old('umur') ?? $user->umur }}" name="umur" type="number" class="form-control"
                placeholder="Umur :tahun" aria-describedby="umur">
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
                    {{ old('jenis_kelamin') ?? $user->jenis_kelamin == 0 ? 'checked' : null }}>
            </span>
            <label for="radio_value_0" class="form-control">Laki Laki</label>
        </div>
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon">
                <input type="radio" id="radio_value_1" name="jenis_kelamin" value="1"
                    {{ old('jenis_kelamin') ?? $user->jenis_kelamin == 1 ? 'checked' : null }}>
            </span>
            <label for="radio_value_1" class="form-control">Perempuan</label>
        </div>
        <h4>Daftarkan Sebagai</h4>
        @error('role_id')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="input-group" style="margin-top: 3px">
            <span class="input-group-addon" id="nik">Role</span>
            <select id="role_id" name="role_id" class="form-control" onchange="toggleAdditionalInput()">
                <option type="text" value="1" {{ old('role_id') ?? $user->role_id == '1' ? 'selected' : null }}>
                    Siswa
                </option>
                <option type="text" value="2" {{ old('role_id') ?? $user->role_id == '2' ? 'selected' : null }}>
                    Guru
                </option>
                <option type="text" value="3" {{ old('role_id') ?? $user->role_id == '3' ? 'selected' : null }}>
                    Umum
                </option>
            </select>
        </div>
        <div class="{{ $user->role_id === 2 ? null : 'hidden' }}" id="input_guru">
            <h4>Informasi Guru</h4>
            <div class="input-group" style="margin-top: 3px">
                <span class="input-group-addon" id="nip">Nip</span>
                <input value="{{ old('nip') ?? $user->nip }}" name="nip" type="number" class="form-control"
                    placeholder="nip" aria-describedby="nip">
            </div>
        </div>
        <div class="{{ $user->role_id === 1 ? null : 'hidden' }}" id="input_siswa">
            <h4>Informasi Siswa</h4>
            <div class="input-group" style="margin-top: 3px">
                <span class="input-group-addon" id="nis">Nis</span>
                <input value="{{ old('nis') ?? $user->nis }}" name="nis" type="number" class="form-control"
                    placeholder="nis" aria-describedby="nis">
            </div>
            <div class="input-group" style="margin-top: 3px">
                <span class="input-group-addon" id="nisn">nisn</span>
                <input value="{{ old('nisn') ?? $user->nisn }}" name="nisn" type="number" class="form-control"
                    placeholder="nisn" aria-describedby="nisn">
            </div>
            <div class="input-group" style="margin-top: 3px">
                <span class="input-group-addon" id="cita_cita">Cita cita</span>
                <input value="{{ old('cita_cita') ?? $user->cita_cita }}" name="cita_cita" type="text"
                    class="form-control" placeholder="cita_cita" aria-describedby="cita_cita">
            </div>
            <div class="input-group" style="margin-top: 3px">
                <span class="input-group-addon" id="kelas">Kelas</span>
                <input value="{{ old('kelas') ?? $user->kelas }}" name="kelas" type="number" class="form-control"
                    placeholder="kelas" aria-describedby="kelas">
            </div>
        </div>
        <div>
            <h4>Informasi Umum</h4>
            <div class="input-group" style="margin-top: 3px">
                <span class="input-group-addon" id="nik">Nik</span>
                <input value="{{ old('nik') ?? $user->nik }}" name="nik" type="number" class="form-control"
                    placeholder="nik" aria-describedby="nik">
            </div>
            <div class="input-group" style="margin-top: 3px">
                <span class="input-group-addon" id="nik">Agama</span>
                <select name="agama" class="form-control">
                    <option type="text" value="hindu"
                        {{ old('agama') ?? $user->agama == 'hindu' ? 'selected' : null }}>Hindu
                    </option>
                    <option type="text" value="islam"
                        {{ old('agama') ?? $user->agama == 'islam' ? 'selected' : null }}>Islam
                    </option>
                    <option type="text" value="khatolik"
                        {{ old('agama') ?? $user->agama == 'khatolik' ? 'selected' : null }}>Khatolik
                    </option>
                    <option type="text" value="protestan"
                        {{ old('agama') ?? $user->agama == 'protestan' ? 'selected' : null }}>
                        Protestan</option>
                    <option type="text" value="budha"
                        {{ old('agama') ?? $user->agama == 'budha' ? 'selected' : null }}>Budha
                    </option>
                </select>
            </div>
            <div class="input-group" style="margin-top: 3px">
                <span class="input-group-addon" id="status_kawin">Status Kawin</span>
                <select name="" id="" name="status_kawin" class="form-control">
                    <option type="text" {{ old('status_kawin') ?? $user->status_kawin == 0 ? 'selected' : null }}
                        value="0">Tidak Kawin</option>
                    <option type="text" {{ old('status_kawin') ?? $user->status_kawin == 1 ? 'selected' : null }}
                        value="1">Kawin</option>
                </select>
            </div>
            <div class="input-group" style="margin-top: 3px">
                <span class="input-group-addon" id="nik">Kontak</span>
                <input value="{{ old('kontak') ?? $user->kontak }}" name="kontak" type="text" class="form-control"
                    placeholder="kontak" aria-describedby="kontak">
            </div>
            <div class="input-group" style="margin-top: 3px">
                <span class="input-group-addon" id="nik">Kelurahan</span>
                <input value="{{ old('kelurahan') ?? $user->kelurahan }}" name="kelurahan" type="text"
                    class="form-control" placeholder="kelurahan" aria-describedby="kelurahan">
            </div>
            <div class="input-group" style="margin-top: 3px">
                <span class="input-group-addon" id="nik">Alamat</span>
                <input value="{{ old('alamat') ?? $user->alamat }}" name="alamat" type="text" class="form-control"
                    placeholder="alamat" aria-describedby="alamat">
            </div>
        </div>
        <h4>Gambar</h4>
        @error('gambar')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <img width="140" id="preview_gambar" alt="gambar" src="">
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

        function toggleAdditionalInput() {
            if ($('#role_id').val() == 1) {
                $('#input_siswa').removeClass('hidden');
                $('#input_guru').addClass('hidden');
            } else if ($('#role_id').val() == 2) {
                $('#input_guru').removeClass('hidden');
                $('#input_siswa').addClass('hidden');
            } else {
                $('#input_siswa').addClass('hidden');
                $('#input_guru').addClass('hidden');
            }
        }
    </script>
@endsection

@endsection
