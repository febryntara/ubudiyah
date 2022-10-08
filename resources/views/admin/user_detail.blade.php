@extends('layouts.dashboard-layout')
@section('body')
    <div class="col-md-3 text-center">
        <div class="panel panel-default">
            <div class="panel-heading text-left">Gambar</div>
            <div class="panel-body">
                <img style="display: block; width: 100%"
                    src="{{ isset($user->image->src) ? asset('storage/' . $user->image->src) : null }}" alt="">
            </div>
        </div>
        <div class="btn-group" role="group" aria-label="...">
            <a href="{{ route('user.all') }}" class="btn btn-default">Kembali</a>
            <a href="{{ route('user.update', ['user' => $user]) }}" class="btn btn-default">Ubah</a>
            <form action="{{ route('user.delete', ['user' => $user]) }}" method="post" class="inline">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-default">Hapus</button>
            </form>
        </div>
    </div>
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">Nama</div>
            <div class="panel-body">
                {{ $user->name }}
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Email</div>
            <div class="panel-body">
                {{ $user->email }}
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Jenis Kelamin</div>
            <div class="panel-body">
                {{ $user->jenis_kelamin == 1 ? 'Perempuan' : 'Laki Laki' }}
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Tanggal Lahir</div>
            <div class="panel-body">
                {{ $user->tanggal_lahir ?? 'Belum Diatur' }}
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Tempat Lahir</div>
            <div class="panel-body">
                {{ $user->tempat_lahir ?? 'Belum Diatur' }}
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Status Kawin</div>
            <div class="panel-body">
                {{ $user->status_kawin == 0 ? 'Belum Kawin' : 'Kawin' }}
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Kelurahan</div>
            <div class="panel-body">
                {{ $user->kelurahan ?? 'Belum Diatur' }}
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Alamat</div>
            <div class="panel-body">
                {{ $user->alamat ?? 'Belum Diatur' }}
            </div>
        </div>

        @if ($user->role_id === 1)
            <div class="panel panel-default">
                <div class="panel-heading">NIS</div>
                <div class="panel-body">
                    {{ $user->nis ?? 'Belum Diatur' }}
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">NISN</div>
                <div class="panel-body">
                    {{ $user->nisn ?? 'Belum Diatur' }}
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Cita cita</div>
                <div class="panel-body">
                    {{ $user->cita_cita ?? 'Belum Diatur' }}
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Kelas</div>
                <div class="panel-body">
                    {{ $user->kelas ?? 'Belum Diatur' }}
                </div>
            </div>
        @endif
        @if ($user->role_id === 2)
            <div class="panel panel-default">
                <div class="panel-heading">NIP</div>
                <div class="panel-body">
                    {{ $user->nip ?? 'Belum Diatur' }}
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Moto Hidup</div>
                <div class="panel-body">
                    {{ $user->moto_hidup ?? 'Belum Diatur' }}
                </div>
            </div>
        @endif

    </div>
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
