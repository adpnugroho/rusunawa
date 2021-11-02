@extends('backend.layouts.v_template')
@section('title', 'Data Fasilitas')
@section('content')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Fasilitas</h4>
                        <button type="button" class="btn btn-success btn-round ml-auto" data-toggle="modal" data-target="#tambahFasilitasModal"><i class="fa fa-plus"></i>Tambah Data</button>
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
                                    <th>Nama Fasilitas</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fasilitas as $fasilita)
                                <tr>
                                    <td>{{ $fasilita->nama }}</td>
                                    <td>
                                        <div class="form-button-action">
                                            <button type="button" class="btn btn-warning btn-sm mr-2" data-toggle="modal" data-target="#editFasilitasModal{{ $fasilita->id }}">
                                                Edit
                                            </button>
                                            <form action="{{ route('fasilitas.destroy',$fasilita->id) }}" method="POST" class="delete-setting-form">
                                                @csrf
                                                @method('DELETE')
                                                <a href="" data-toggle="modal" data-target="#deleteModal{{ $fasilita->id }}" class="btn btn-danger btn-sm">
                                                    Hapus</a>
                                                <!-- Hapus Fasilitas Modal -->
                                                <div class="modal fade" id="deleteModal{{ $fasilita->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="ModalLabel">Hapus data fasilitas</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Anda yakin ingin menghapus data fasilitas?</div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                                <button class="btn btn-danger btn-border" type="button" data-dismiss="modal">Batal</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
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
<!-- Tambah Fasilitas Modal -->
<div class="modal fade" id="tambahFasilitasModal" tabindex="-1" role="dialog" aria-labelledby="tambahFasilitasModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahFasilitasModalLabel">Tambah Data Fasilitas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('fasilitas.store') }}" id="myForm">
                    @csrf
                    <form method="POST" action="{{ route('fasilitas.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Fasilitas</label>
                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" autofocus required>
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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
<!-- Edit Fasilitas Modal -->
@foreach ($fasilitas as $fasilita)
<div class="modal fade" id="editFasilitasModal{{ $fasilita->id }}" tabindex="-1" role="dialog" aria-labelledby="editFasilitasModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editFasilitasModalLabel">Edit Data Fasilitas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('fasilitas.update', $fasilita->id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Fasilitas</label>
                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $fasilita->nama }}" autofocus required>
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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
$('#tambahFasilitasModal').on('shown.bs.modal', function() {
    $('#nama').trigger('focus')
})

</script>
@endsection
