@extends('backend.layouts.v_template')
@section('title', 'Data Keluhan')
@section('content')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Keluhan</h4>
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
                                    <th>Tanggal</th>
                                    <th>Nama Lengkap</th>
                                    <th>Rusunawa</th>
                                    <th>Status</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($keluhans as $keluhan)
                                <tr>
                                    <th>{{ $keluhan->created_at }}</th>
                                    <td>{{ $keluhan->nama_lengkap }}</td>
                                    <td>{{ $keluhan->gedung->nama }} Lt. {{ $keluhan->lantai }}</td>
                                    <td>
                                        @if ($keluhan->status_keluhan === 'Baru')
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#statusKeluhanModal{{ $keluhan->id }}"><span class="btn-label"><i class="far fa-edit"></i></span>Baru</button>
                                        @elseif ($keluhan->status_keluhan === 'Diproses')
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#statusKeluhanModal{{ $keluhan->id }}"><span class="btn-label"><i class="far fa-edit"></i></span>Diproses</button>
                                        @else
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#statusKeluhanModal{{ $keluhan->id }}"><span class="btn-label"><i class="far fa-edit"></i></span>Selesai</button>
                                        @endif
                                    </td>
                                    <!-- Modal Status Keluhan-->
                                    <div class="modal fade" id="statusKeluhanModal{{ $keluhan->id }}" tabindex="-1" role="dialog" aria-labelledby="statusKeluhanModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="statusKeluhanModalLabel">Edit Status Keluhan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('keluhan.update', $keluhan->id) }}" id="myForm">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="status_keluhan">Status Keluhan</label>
                                                            <select id="status_keluhan" type="text" class="form-control @error('status_keluhan') is-invalid @enderror" name="status_keluhan" required>
                                                                @foreach ($status_keluhan as $key => $value)
                                                                <option value="{{ $key }}" {{ old('status_keluhan',$keluhan->status_keluhan) == $key ? 'selected' : null }}>{{ $value }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('status_keluhan')
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
                                    <td>
                                        <form action="{{ route('keluhan.destroy',$keluhan->id) }}" method="POST" class="delete-setting-form">
                                            <div class="form-button-action">
                                                <button type="button" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#lihatKeluhanModal{{ $keluhan->id }}">
                                                    Lihat
                                                </button>
                                                <!-- Modal Lihat Keluhan-->
                                                <div class="modal fade" id="lihatKeluhanModal{{ $keluhan->id }}" tabindex="-1" role="dialog" aria-labelledby="lihatKeluhanModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="lihatKeluhanModalLabel">Detail Keluhan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table table-bordered table-striped">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>
                                                                                Nama Lengkap
                                                                            </th>
                                                                            <td>
                                                                                {{ $keluhan->nama_lengkap }}
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <th>
                                                                                Rusunawa
                                                                            </th>
                                                                            <td>
                                                                                {{ $keluhan->gedung->nama }} Lt. {{ $keluhan->lantai }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                Keluhan
                                                                            </th>
                                                                            <td>
                                                                                {{ $keluhan->detail_keluhan }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                Nomor Telepon
                                                                            </th>
                                                                            <td>
                                                                                {{ $keluhan->no_hp }}<a class="btn btn-success btn-sm ml-2" style="color:white" href="https://api.whatsapp.com/send?phone=62{{ $keluhan->no_hp }}&text=Halo+bapak%2Fibu+%2A{{ $keluhan->nama_lengkap }}%2A%2C+kami+dari+UPTD+Rusunawa+Kota+Balikpapan+telah+menerima+laporan+dari+Anda+sebagai+berikut%3A%0D%0A%0D%0A%2ANama%2A+%3D+{{ $keluhan->nama_lengkap }}%0D%0A%2ARusunawa%2A+%3D+{{ $keluhan->gedung->nama }}+Lantai+{{ $keluhan->lantai }}%0D%0A%2AKeluhan%2A+%3D+{{ $keluhan->detail_keluhan }}" target="_blank">Kirim WA</a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                Status Keluhan
                                                                            </th>
                                                                            <td>
                                                                                {{ $keluhan->status_keluhan }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2">
                                                                                <center>
                                                                                    <a href="{{ Storage::url($keluhan->foto) }}" target="_blank"><img src="{{ Storage::url($keluhan->foto) }}" width="250px" style="margin: 10px 0px"></a></center>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @csrf
                                                @method('DELETE')
                                                <a href="" data-toggle="modal" data-target="#deleteModal{{ $keluhan->id }}" class="btn btn-danger btn-sm">
                                                    Hapus</a>
                                                <!-- Modal Hapus Keluhan -->
                                                <div class="modal fade" id="deleteModal{{ $keluhan->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="ModalLabel">Hapus data keluhan</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Anda yakin ingin menghapus data keluhan?</div>
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
        "pageLength": 10,
        "order": [
            [0, "desc"]
        ]
    });
});

</script>
@endsection
