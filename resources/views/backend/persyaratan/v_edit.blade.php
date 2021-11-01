@extends('backend.layouts.v_template')
@section('title', 'Edit Persyaratan')
@section('content')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Persyaratan</h4>
                    </div>
                </div>
                <div class="form-group p-0">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">{{ $message }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('persyaratan.update', $persyaratan->id) }}" id="myForm">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <textarea class="form-control @error('isi') is-invalid @enderror" name="isi">{{ $persyaratan->isi }}</textarea>
                                    @error('isi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<!-- Tinymce -->
<script src="{{ asset('template-backend') }}/assets/tinymce/js/tinymce/tinymce.min.js"></script>
@endsection
@section('script-internal')
<script>
tinymce.init({
    selector: 'textarea',
    plugins: [
        'lists autoresize link'
    ],
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify link | ' +
        'bullist numlist',
    menubar: false,
    statusbar: false
});

</script>
@endsection
