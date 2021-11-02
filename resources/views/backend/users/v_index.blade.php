@extends('backend.layouts.v_template')
@section('title', 'Data Pengelola')
@section('content')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Pengelola</h4>
                        <button type="button" class="btn btn-success btn-round ml-auto" data-toggle="modal" data-target="#tambahPengelolaModal"><i class="fa fa-plus"></i>Tambah Data</button>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">{{ $message }}</div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Foto</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>@isset($user->foto_profil)
                                        <img src="{{ Storage::url($user->foto_profil) }}" class="avatar-img rounded-circle" style="height: 75px; width: 75px; object-fit: cover;">
                                        @else
                                        <img src="/storage/default/user-default.jpeg" class="avatar-img rounded-circle" style="height: 75px; width: 75px; object-fit: cover;">
                                        @endisset</td>
                                    <td>
                                        <div class="form-button-action">
                                            <button type="button" class="btn btn-warning btn-sm mr-2" data-toggle="modal" data-target="#editPengelolaModal{{ $user->id }}">
                                                Edit
                                            </button>
                                            <form action="{{ route('users.destroy',$user->id) }}" method="POST" class="delete-user-form">
                                                @csrf
                                                @method('DELETE')
                                                <a href="" data-toggle="modal" data-target="#deleteModal{{ $user->id }}" class="btn btn-danger btn-sm">
                                                    Hapus</a>
                                                <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="ModalLabel">Hapus data pengelola</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Anda yakin ingin menghapus data pengelola?</div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                                <button class="btn btn-danger btn-border" type="button" data-dismiss="modal">Batal</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Pengelola Modal -->
<div class="modal fade" id="tambahPengelolaModal" tabindex="-1" role="dialog" aria-labelledby="tambahPengelolaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPengelolaModalLabel">Tambah Data Pengelola</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('users.store') }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputGambar">Foto Profil</label>
                        <input type="file" class="form-control @error('foto_profil') is-invalid @enderror" name="foto_profil">
                        @error('foto_profil')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputConfirmPassword">Konfirmasi Kata Sandi</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                    <input id="level" value="2" class="d-none" name="level">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-success btn-border" data-dismiss="modal">Batal</button>
            </div>
            </form>
        </div>
    </div>
</div>
@foreach($users as $user)
<!-- Edit Pengelola Modal -->
<div class="modal fade" id="editPengelolaModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editPengelolaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPengelolaModalLabel">Edit Data Pengelola</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('users.update', $user->id) }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputGambar">Foto Profil</label>
                        <input type="file" class="form-control @error('foto_profil') is-invalid @enderror" name="foto_profil" class="form-control">
                        @error('foto_profil')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        @isset($user->foto_profil)
                        <img src="{{ Storage::url($user->foto_profil) }}" class="avatar-img rounded-circle" style="height: 150px; width: 150px; object-fit: cover;">
                        @else
                        <img src="/storage/default/user-default.jpeg" class="avatar-img rounded-circle" style="height: 150px; width: 150px; object-fit: cover;">
                        @endisset
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-success btn-border" data-dismiss="modal">Batal</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection
@section('script')
<!-- Datatables -->
<script src="{{ asset('template-backend') }}/assets/js/plugin/datatables/datatables.min.js"></script>
@endsection
@section('script-internal')
<!-- Datatables -->
<script>
$(document).ready(function() {
    $('#add-row').DataTable({
        "pageLength": 25,
    });
});

</script>
<script>
$('#tambahPengelolaModal').on('shown.bs.modal', function() {
    $('#name').trigger('focus')
})

</script>
@endsection
