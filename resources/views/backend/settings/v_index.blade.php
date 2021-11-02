@extends('backend.layouts.v_template')
@section('title', 'Pengaturan')
@section('content')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Pengaturan</h4>
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
                                    <th width="30%">Pengaturan</th>
                                    <th>Isi</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($settings as $setting)
                                <tr>
                                    <td>{{ $setting->key }}</td>
                                    <td>{{ $setting->value }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm mr-2" data-toggle="modal" data-target="#editPengaturanModal{{ $setting->id }}">
                                            Edit
                                        </button>
                                        <!-- Edit Pengaturah Modal -->
                                        <div class="modal fade" id="editPengaturanModal{{ $setting->id }}" tabindex="-1" role="dialog" aria-labelledby="editPengaturanModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editPengaturanModalLabel">Edit Pengaturan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('settings.update', $setting->id) }}" id="myForm">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group">
                                                                <label for="key">Pengaturan</label>
                                                                <input id="key" type="text" class="form-control @error('key') is-invalid @enderror" name="key" value="{{ $setting->key }}" readonly>
                                                                @error('key')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="value">Isi</label>
                                                                <textarea id="value" type="text" class="form-control @error('value') is-invalid @enderror" name="value" autofocus required>{{ $setting->value }}</textarea>
                                                                @error('value')
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
        "paging": false,
        "searching": false,
        "bInfo": false
    });
});

</script>
@endsection
