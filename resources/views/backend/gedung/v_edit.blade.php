@extends('backend.layouts.v_template')
@section('title', 'Edit Gedung')
@section('content')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Gedung</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form method="POST" action="{{ route('gedung.update', ['gedung' => $gedung]) }}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama',$gedung->nama) }}" required autofocus>
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat',$gedung->alamat) }}" required></textarea>
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kecamatan">Kecamatan</label>
                                    <select id="kecamatan" class="form-control @error('alamat') is-invalid @enderror" name="kecamatan" required>
                                        @foreach ($kecamatans as $key => $value)
                                        <option value="{{ $key }}" {{ old('kecamatan',$gedung->kecamatan) == $key ? 'selected' : null }}>{{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="link_gmaps">Link Google Maps</label>
                                    <input id="link_gmaps" type="text" class="form-control @error('link_gmaps') is-invalid @enderror" name="link_gmaps" value="{{ old('link_gmaps',$gedung->link_gmaps) }}" required>
                                    @error('link_gmaps')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tahun_pembuatan">Tahun Pembuatan</label>
                                <input id="tahun_pembuatan" type="text" class="form-control @error('tahun_pembuatan') is-invalid @enderror" name="tahun_pembuatan" value="{{ old('tahun_pembuatan',$gedung->tahun_pembuatan) }}" required>
                                @error('tahun_pembuatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jumlah_lantai">Jumlah Lantai</label>
                                <input id="jumlah_lantai" type="text" class="form-control @error('jumlah_lantai') is-invalid @enderror" name="jumlah_lantai" value="{{ old('jumlah_lantai',$gedung->jumlah_lantai) }}" required>
                                @error('jumlah_lantai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="id_api">ID API</label>
                                <input id="id_api" type="text" class="form-control @error('id_api') is-invalid @enderror" name="id_api" value="{{ old('id_api',$gedung->id_api) }}" required>
                                @error('id_api')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="foto_gedung">Foto Gedung</label>
                                <input id="foto_gedung" type="file" class="form-control @error('foto_gedung') is-invalid @enderror" name="foto_gedung[]" multiple>
                                @error('foto_gedung')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="fasilitas">Fasilitas</label>
                                <select id="fasilitas" class="form-control @error('fasilitas') is-invalid @enderror" name="fasilitas[]" required multiple>
                                    @if (old('fasilitas',$gedung->fasilitas))
                                    @foreach (old('fasilitas',$gedung->fasilitas) as $fasilitas)
                                    <option value="{{ $fasilitas->id }}" selected>{{ $fasilitas->nama }}</option>
                                    @endforeach
                                    @endif
                                </select>
                                @error('fasilitas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a class="btn btn-success btn-border" href="{{ route('gedung.index') }}">Kembali</a>
                            </div>
                        </div>
                        </form>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    @if ($gedung->gallery->count()>0)
                                    @for($i=0; $i < count($images=$gedung->gallery()->get()); $i++)
                                        @if ($i==0)
                                        <div class="col-lg-3 col-md-4">
                                            <div class="card" style="margin-bottom:20px">
                                                <img class="card-img-top" src="{{ Storage::url($images[$i]['nama']) }}" style="object-fit: cover; height: 100px; width: 100%">
                                                <form action="{{route('gedung.delete', ['gallery' => $images[$i]['id']])}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-lg-3 col-md-4">
                                            <div class="card" style="margin-bottom: 20px">
                                                <img class="card-img-top" src="{{ Storage::url($images[$i]['nama']) }}" style="object-fit: cover; height: 100px; width: 100%">
                                                <form action="{{route('gedung.delete', ['gallery' => $images[$i]['id']])}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                        @endif
                                        @endfor
                                        @endif
                                </div>
                                @error('foto_gedung')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
<!-- Select2 -->
<link href="{{ asset('template-backend') }}/assets/select2/css/select2.min.css" rel="stylesheet" />
@endsection
@section('script')
<!-- Select2 -->
<script src="{{ asset('template-backend') }}/assets/select2/js/select2.min.js"></script>
@endsection
@section('script-internal')
<script>
$(function() {
    $('#fasilitas').select2({
        allowClear: true,
        placeholder: 'Pilih fasilitas',
        ajax: {
            url: "{{ route('fasilitas.select') }}",
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.nama,
                            id: item.id
                        }
                    })
                };
            }
        }
    });
});

</script>
@endsection
