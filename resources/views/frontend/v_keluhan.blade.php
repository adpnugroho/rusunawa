@extends('frontend.layouts.v_template')
@section('title', 'Keluhan - Rusunawa Kota Balikpapan')
@section('description', 'Ajukan keluhan atau permintaan perawatan untuk Rusunawa Kota Balikpapan')
@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Keluhan</h2>
        </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Keluhan Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="row mt-3">
                <div class="col-lg-12">
                    @if ($message = Session::get('success'))
                    <div class="sent-message mb-3">{{ $message }}</div>
                    @else
                    Apabila Anda menemukan kondisi dari Rusunawa yang membutuhkan pemeliharaan, silahkan lengkapi formulir di bawah ini dan pengelola akan segera menghubungi Anda
                    <div class="info-message my-3">Semua kolom wajib diisi</div>
                    @endif
                    <form method="POST" action="{{ route('keluhanStore') }}" class="rusunawa-form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="form-label">Nama Lengkap</label>
                                <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required autofocus>
                                @error('nama_lengkap')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">Nomor HP (Terhubung WA)</label>
                                <input id="no_hp" type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" placeholder="Contoh = 081277778888" required>
                                @error('no_hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="form-label">Rusunawa</label>
                                <select id="gedung_id" class="form-control @error('gedung_id') is-invalid @enderror" name="gedung_id" required>
                                    <option selected disabled value="">-- Pilih --</option>
                                    @foreach ($gedungs as $gedung)
                                    <option value="{{ $gedung['id'] }}" @if(old('gedung_id')==$gedung['id']) selected @endif>{{ $gedung['nama'] }}</option> @endforeach
                                </select>
                                @error('gedung_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">Lantai</label>
                                <input id="lantai" type="number" class="form-control @error('lantai') is-invalid @enderror" name="lantai" value="{{ old('lantai') }}" placeholder="Contoh = 2" required>
                                @error('lantai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="form-label">Detail Lokasi dan Keluhan</label>
                                <textarea id="detail_keluhan" class="form-control @error('detail_keluhan') is-invalid @enderror" name="detail_keluhan" required placeholder="Contoh = dinding kamar 103 bocor ketika hujan deras">{{ old('detail_keluhan') }}</textarea>
                                @error('detail_keluhan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">Foto Rusunawa</label>
                                <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" required>
                                @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <input id="status_keluhan" value="baru" class="d-none" name="status_keluhan">
                        <div class="text-center my-3"><button type="submit">Kirim</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Keluhan Section -->
</main><!-- End #main -->
@endsection
