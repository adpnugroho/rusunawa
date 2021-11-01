@extends('backend.layouts.v_template')
@section('title', 'Data Gedung')
@section('content')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Gedung</h4>
                        <a href="{{ route('gedung.create') }}" class="btn btn-success btn-round ml-auto">
                            <i class="fa fa-plus"></i>
                            Tambah Data
                        </a>
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
                                    <th>Nama Gedung</th>
                                    <th>Alamat</th>
                                    <th>Kecamatan</th>
                                    <th>Tahun Pembuatan</th>
                                    <th>Jumlah Lantai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gedungs as $gedung)
                                <tr>
                                    <td>{{ $gedung->nama }}</td>
                                    <td>{{ $gedung->alamat }}</td>
                                    <td>{{ $gedung->kecamatan }}</td>
                                    <td>{{ $gedung->tahun_pembuatan }}</td>
                                    <td>{{ $gedung->jumlah_lantai }}</td>
                                    <td>
                                        <form action="{{ route('gedung.destroy',$gedung->slug) }}" method="POST" class="delete-setting-form">
                                            <div class="form-button-action">
                                                <a href="{{ route('detailRusunawa',$gedung->slug) }}" class="btn btn-primary btn-sm mr-2" target="_blank">
                                                    Lihat
                                                </a>
                                                <a href="{{ route('gedung.edit',$gedung->slug) }}" class="btn btn-warning btn-sm mr-2">
                                                    Edit
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <a href="" data-toggle="modal" data-target="#deleteModal{{ $gedung->slug }}" class="btn btn-danger btn-sm">
                                                    Hapus</a>
                                                <div class="modal fade" id="deleteModal{{ $gedung->slug }}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="ModalLabel">Hapus data gedung</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Anda yakin ingin menghapus data gedung?</div>
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
@endsection
