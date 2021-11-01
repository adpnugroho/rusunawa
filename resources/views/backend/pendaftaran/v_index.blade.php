@extends('backend.layouts.v_template')
@section('title', 'Data Pendaftaran')
@section('content')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Pendaftaran</h4>
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
                                @foreach ($pendaftarans as $pendaftaran)
                                <tr>
                                    <th>{{ $pendaftaran->created_at }}</th>
                                    <td>{{ $pendaftaran->nama_lengkap }}</td>
                                    <td>{{ $pendaftaran->gedung->nama }} Lt. {{ $pendaftaran->lantai }}</td>
                                    <td>
                                        @if ($pendaftaran->status_pendaftaran === 'Baru')
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#statusPendaftaranModal{{ $pendaftaran->slug }}"><span class="btn-label"><i class="far fa-edit"></i></span>Baru</button>
                                        @elseif ($pendaftaran->status_pendaftaran === 'Diproses')
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#statusPendaftaranModal{{ $pendaftaran->slug }}"><span class="btn-label"><i class="far fa-edit"></i></span>Diproses</button>
                                        @else
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#statusPendaftaranModal{{ $pendaftaran->slug }}"><span class="btn-label"><i class="far fa-edit"></i></span>Selesai</button>
                                        @endif
                                    </td>
                                    <!-- Modal Status Pendaftaran-->
                                    <div class="modal fade" id="statusPendaftaranModal{{ $pendaftaran->slug }}" tabindex="-1" role="dialog" aria-labelledby="statusPendaftaranModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="statusPendaftaranModalLabel">Edit Status Pendaftaran</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('pendaftaran.update', $pendaftaran->slug) }}" id="myForm">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="status_pendaftaran">Status Pendaftaran</label>
                                                            <select id="status_pendaftaran" type="text" class="form-control @error('status_pendaftaran') is-invalid @enderror" name="status_pendaftaran" required>
                                                                @foreach ($status_pendaftaran as $key => $value)
                                                                <option value="{{ $key }}" {{ old('status_pendaftaran',$pendaftaran->status_pendaftaran) == $key ? 'selected' : null }}>{{ $value }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('status_pendaftaran')
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
                                        <form action="{{ route('pendaftaran.destroy',$pendaftaran->slug) }}" method="POST" class="delete-setting-form">
                                            <div class="form-button-action">
                                                <button type="button" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#lihatPendaftaranModal{{ $pendaftaran->slug }}">
                                                    Lihat
                                                </button>
                                                <!-- Modal Lihat Pendaftaran-->
                                                <div class="modal fade" id="lihatPendaftaranModal{{ $pendaftaran->slug }}" tabindex="-1" role="dialog" aria-labelledby="lihatPendaftaranModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="lihatPendaftaranModalLabel">Detail Pendaftaran</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mx-3">
                                                                <!-- Data Pemohon -->
                                                                <div class="row">
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Nama Lengkap</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->nama_lengkap }}">
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Nomor HP</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->no_hp }}">
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Nomor KTP (NIK)</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->no_ktp }}">
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Tempat Lahir</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->tempat_lahir }}">
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Tanggal Lahir</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->tanggal_lahir->format('d M Y') }}">
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Jenis Kelamin</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->jenis_kelamin }}">
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Agama</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->agama }}">
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Status Pernikahan</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->status_pernikahan }}">
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Status Tempat Tinggal</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->status_tempat_tinggal }}">
                                                                    </div>
                                                                    <div class="col-md-12 form-group">
                                                                        <label class="form-label">Alamat</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->alamat }}">
                                                                    </div>
                                                                </div>
                                                                <!-- Data Rusunawa -->
                                                                <div class="row">
                                                                    <div class="col-md-6 form-group">
                                                                        <label class="form-label">Rusunawa</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->gedung->nama }}">
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                        <label class="form-label">Lantai</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->lantai }}">
                                                                    </div>
                                                                </div>
                                                                <!-- Data Pekerjaan -->
                                                                <div class="row">
                                                                    <div class="col-md-6 form-group">
                                                                        <label class="form-label">Pekerjaan</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->pekerjaan }}">
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                        <label class="form-label">Nama Tempat Kerja</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->nama_tempat_kerja }}">
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                        <label class="form-label">Penghasilan Tetap per Bulan</label>
                                                                        <input class="form-control" value="Rp.{{ number_format($pendaftaran->penghasilan_tetap,2) }}">
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                        <label class="form-label">Penghasilan Tambahan per Bulan</label>
                                                                        <input class="form-control" value="Rp.{{ number_format($pendaftaran->penghasilan_tambahan,2) }}">
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                        <label class="form-label">Status Pekerjaan</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->status_pekerjaan }}">
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                        <label class="form-label">Alamat Tempat Kerja</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->alamat_tempat_kerja }}">
                                                                    </div>
                                                                </div>
                                                                <!-- Data Pasangan -->
                                                                <div class="row">
                                                                    <div class="col-md-6 form-group">
                                                                        <label class="form-label">No KTP Suami/Istri</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->no_ktp_pasangan ?? '-' }}">
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                        <label class="form-label">Pekerjaan Suami/Istri</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->pekerjaan_pasangan ?? '-' }}">
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                        <label class="form-label">Penghasilan Suami/Istri</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->penghasilan_pasangan ?? '-' }}">
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                        <label class="form-label">Alamat Suami/Istri</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->alamat_pasangan ?? '-' }}">
                                                                    </div>
                                                                </div>
                                                                <!-- Data Pengikut -->
                                                                <div class="row">
                                                                    <div class="col-md-12 form-group">
                                                                        <label class="form-label">Jumlah Pengikut</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->jumlah_pengikut ?? '-' }}">
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Nama Pengikut 1</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->pengikut_1 ?? '-' }}">
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Umur Pengikut 1</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->umur_1 ?? '-' }}">
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Hubungan Pengikut 1</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->hubungan_1 ?? '-' }}">
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Nama Pengikut 2</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->pengikut_2 ?? '-' }}">
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Umur Pengikut 2</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->umur_2 ?? '-' }}">
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Hubungan Pengikut 2</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->hubungan_2 ?? '-' }}">
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Nama Pengikut 3</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->pengikut_3 ?? '-' }}">
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Umur Pengikut 3</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->umur_3 ?? '-' }}">
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <label class="form-label">Hubungan Pengikut 3</label>
                                                                        <input class="form-control" value="{{ $pendaftaran->hubungan_3 ?? '-' }}">
                                                                    </div>
                                                                </div>
                                                                <!-- Foto KTP -->
                                                                <div class="row">
                                                                    <div class="col-md-12 form-group">
                                                                        <label class="form-label">Foto KTP</label><br>
                                                                        <center><a href="{{ Storage::url($pendaftaran->foto_ktp) }}" target="_blank"><img src="{{ Storage::url($pendaftaran->foto_ktp) }}" width="250px"></a></center>
                                                                    </div>
                                                                    
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @csrf
                                                @method('DELETE')
                                                <a href="" data-toggle="modal" data-target="#deleteModal{{ $pendaftaran->slug }}" class="btn btn-danger btn-sm">
                                                    Hapus</a>
                                                <!-- Modal Hapus Pendaftaran -->
                                                <div class="modal fade" id="deleteModal{{ $pendaftaran->slug }}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="ModalLabel">Hapus data pendaftaran</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Anda yakin ingin menghapus data pendaftaran?</div>
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
