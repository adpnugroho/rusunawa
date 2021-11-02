@extends('frontend.layouts.v_template')
@section('title', 'Pendaftaran - Rusunawa Kota Balikpapan')
@section('description', 'Mendaftar di Rumah Susun Sederhana Sewa (Rusunawa) Kota Balikpapan')
@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Pendaftaran</h2>
        </div>
    </div>
    <!-- ======= Pendaftaran Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <form method="POST" action="{{ route('pendaftaranStore') }}" class="rusunawa-form" enctype="multipart/form-data">
                        @csrf
                        <!-- Info -->
                        <div class="row">
                            <div class="col-md-12">
                                <ol>
                                    <b>Cara Pendaftaran</b>
                                    <li>Baca persyaratan Rusunawa terlebih dahulu: <a href="/persyaratan" target="_blank"><b>Persyaratan Rusunawa</b></a></li>
                                    <li>Isi formulir di bawah ini.</li>
                                    <li>Download <b>berkas pendaftaran</b> (berkas akan muncul setelah mengisi formulir).</li>
                                    <li>Print berkas pendaftaran pada kertas F4/Legal.</li>
                                    <li>Lengkapi seluruh tanda tangan dan materai pada berkas pendaftaran.</li>
                                    <li>Bawa <b>berkas pendaftaran</b> beserta <b>berkas pendukung</b> menggunakan stopmap hijau ke kantor UPTD Rusunawa.</li>
                                </ol>
                                <ul>
                                    <b>Berkas Pendukung</b>
                                    <li>Fotokopi KTP</li>
                                    <li>Fotokopi KK</li>
                                    <li>Fotokopi Surat Nikah (jika berstatus menikah)</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Data Pemohon -->
                        <div class="info-message">* Wajib diisi</div>
                        <div class="info-message my-3">Data Pemohon</div>
                        <div class="row mt-3">
                            <div class="col-md-3 form-group">
                                <label class="form-label">Nama Lengkap*</label>
                                <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required>
                                @error('nama_lengkap')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-3 form-group">
                                <label class="form-label">Nomor HP*</label>
                                <input id="no_hp" type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" placeholder="Contoh: 081277778888" required>
                                @error('no_hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-3 form-group">
                                <label class="form-label">Nomor KTP (NIK)*</label>
                                <input id="no_ktp" type="number" class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" value="{{ old('no_ktp') }}" placeholder="Contoh: 6403050601990001" required>
                                @error('no_ktp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-3 form-group">
                                <label class="form-label">Tempat Lahir*</label>
                                <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required>
                                @error('tempat_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-3 form-group">
                                <label class="form-label">Tanggal Lahir*</label>
                                <input id="datepicker" type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                                @error('tanggal_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-3 form-group">
                                <label class="form-label">Jenis Kelamin*</label>
                                <select id="jenis_kelamin" type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                                    <option selected disabled value="">-- Pilih --</option>
                                    @foreach ($jenis_kelamin as $key => $value)
                                    <option value="{{ $key }}" {{ old('jenis_kelamin',$pendaftaran->jenis_kelamin) == $key ? 'selected' : null }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('jenis_kelamin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-3 form-group">
                                <label class="form-label">Agama*</label>
                                <select id="agama" type="text" class="form-control @error('agama') is-invalid @enderror" name="agama">
                                    <option selected disabled value="">-- Pilih --</option>
                                    @foreach ($agama as $key => $value)
                                    <option value="{{ $key }}" {{ old('agama',$pendaftaran->agama) == $key ? 'selected' : null }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('agama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-3 form-group">
                                <label class="form-label">Status Pernikahan*</label>
                                <select id="status_pernikahan" type="text" class="form-control @error('status_pernikahan') is-invalid @enderror" name="status_pernikahan">
                                    <option selected disabled value="">-- Pilih --</option>
                                    @foreach ($status_pernikahan as $key => $value)
                                    <option value="{{ $key }}" {{ old('status_pernikahan',$pendaftaran->status_pernikahan) == $key ? 'selected' : null }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('status_pernikahan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Alamat*</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" required>{{ old('alamat') }}</textarea>
                                @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Status Tempat Tinggal*</label>
                                <select id="status_tempat_tinggal" type="text" class="form-control @error('status_tempat_tinggal') is-invalid @enderror" name="status_tempat_tinggal">
                                    <option selected disabled value="">-- Pilih --</option>
                                    @foreach ($status_tempat_tinggal as $key => $value)
                                    <option value="{{ $key }}" {{ old('status_tempat_tinggal',$pendaftaran->status_tempat_tinggal) == $key ? 'selected' : null }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('status_tempat_tinggal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Foto KTP* </label>
                                <input id="foto_ktp" type="file" class="form-control @error('foto_ktp') is-invalid @enderror" name="foto_ktp" value="{{ old('foto_ktp') }}" required>
                                @error('foto_ktp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Data Pekerjaan -->
                        <div class="info-message my-3">Data Pekerjaan</div>
                        <div class="row mt-4">
                            <div class="col-md-4 form-group">
                                <label class="form-label">Pekerjaan*</label>
                                <input id="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ old('pekerjaan') }}" required>
                                @error('pekerjaan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Nama Tempat Kerja*</label>
                                <input id="nama_tempat_kerja" type="text" class="form-control @error('nama_tempat_kerja') is-invalid @enderror" name="nama_tempat_kerja" value="{{ old('nama_tempat_kerja') }}" required>
                                @error('nama_tempat_kerja')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Status Pekerjaan*</label>
                                <input id="status_pekerjaan" type="text" class="form-control @error('status_pekerjaan') is-invalid @enderror" name="status_pekerjaan" value="{{ old('status_pekerjaan') }}" placeholder="Contoh: Kontrak" required>
                                @error('status_pekerjaan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Penghasilan Tetap/Bulan*</label>
                                <input id="penghasilan_tetap" type="number" class="form-control @error('penghasilan_tetap') is-invalid @enderror" name="penghasilan_tetap" value="{{ old('penghasilan_tetap') }}" placeholder="Contoh: 1500000" required>
                                @error('penghasilan_tetap')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Penghasilan Tambahan/Bulan</label>
                                <input id="penghasilan_tambahan" type="number" class="form-control @error('penghasilan_tambahan') is-invalid @enderror" name="penghasilan_tambahan" value="{{ old('penghasilan_tambahan') }}" placeholder="Contoh: 500000">
                                @error('penghasilan_tambahan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Alamat Tempat Kerja*</label>
                                <textarea class="form-control @error('alamat_tempat_kerja') is-invalid @enderror" name="alamat_tempat_kerja" required>{{ old('alamat_tempat_kerja') }}</textarea>
                                @error('alamat_tempat_kerja')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Data Rusunawa -->
                        <div class="info-message my-3">Pilihan Rusunawa</div>
                        <div class="row mt-3">
                            <div class="col-md-6 form-group">
                                <label class="form-label">Rusunawa*</label>
                                <select id="gedung_id" class="form-control @error('gedung_id') is-invalid @enderror" name="gedung_id">
                                    <option selected disabled value="">-- Pilih Rusunawa --</option>
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
                                <label class="form-label">Lantai*</label>
                                <input id="lantai" type="number" class="form-control @error('lantai') is-invalid @enderror" name="lantai" value="{{ old('lantai') }}" placeholder="Contoh: 2" required>
                                @error('lantai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Data Pasangan -->
                        <div class="info-message my-3">Data Pasangan (jika berstatus menikah)</div>
                        <div class="row mt-3">
                            <div class="col-md-4 form-group">
                                <label class="form-label">No KTP Istri/Suami</label>
                                <input id="no_ktp_pasangan" type="number" class="form-control @error('no_ktp_pasangan') is-invalid @enderror" name="no_ktp_pasangan" value="{{ old('no_ktp_pasangan') }}" placeholder="Contoh: 6403050601990001">
                                @error('no_ktp_pasangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Pekerjaan Istri/Suami</label>
                                <input id="pekerjaan_pasangan" type="text" class="form-control @error('pekerjaan_pasangan') is-invalid @enderror" name="pekerjaan_pasangan" value="{{ old('pekerjaan_pasangan') }}">
                                @error('pekerjaan_pasangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Penghasilan Istri/Suami</label>
                                <input id="penghasilan_pasangan" type="number" class="form-control @error('penghasilan_pasangan') is-invalid @enderror" name="penghasilan_pasangan" value="{{ old('penghasilan_pasangan') }}" placeholder="Contoh: 500000">
                                @error('penghasilan_pasangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-label">Alamat Istri/Suami</label>
                                <textarea class="form-control @error('alamat_pasangan') is-invalid @enderror" name="alamat_pasangan">{{ old('alamat_pasangan') }}</textarea>
                                @error('alamat_pasangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Data Pengikut -->
                        <div class="info-message my-3">Data Pengikut (jika sudah menikah)</div>
                        <div class="row mt-3">
                            <div class="col-md-12 form-group">
                                <label class="form-label">Jumlah Pengikut</label>
                                <input id="jumlah_pengikut" type="number" class="form-control @error('jumlah_pengikut') is-invalid @enderror" name="jumlah_pengikut" value="{{ old('jumlah_pengikut') }}" placeholder="Contoh: 1 istri + 1 anak = 2 pengikut">
                                @error('jumlah_pengikut')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Nama Pengikut 1</label>
                                <input id="pengikut_1" type="text" class="form-control @error('pengikut_1') is-invalid @enderror" name="pengikut_1" value="{{ old('pengikut_1') }}" placeholder="Contoh: Nama Istri/Suami">
                                @error('pengikut_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Umur Pengikut 1 (Tahun)</label>
                                <input id="umur_1" type="number" class="form-control @error('umur_1') is-invalid @enderror" name="umur_1" value="{{ old('umur_1') }}" placeholder="Contoh: 30">
                                @error('umur_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Hubungan Pengikut 1</label>
                                <select id="hubungan_1" type="text" class="form-control @error('hubungan_1') is-invalid @enderror" name="hubungan_1">
                                    <option selected disabled value="">-- Pilih --</option>
                                    @foreach ($hubungan_1 as $key => $value)
                                    <option value="{{ $key }}" {{ old('hubungan_1',$pendaftaran->hubungan_1) == $key ? 'selected' : null }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('hubungan_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Nama Pengikut 2</label>
                                <input id="pengikut_2" type="text" class="form-control @error('pengikut_2') is-invalid @enderror" name="pengikut_2" value="{{ old('pengikut_2') }}" placeholder="Contoh: Nama Anak">
                                @error('pengikut_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Umur Pengikut 2 (Tahun)</label>
                                <input id="umur_2" type="number" class="form-control @error('umur_2') is-invalid @enderror" name="umur_2" value="{{ old('umur_2') }}" placeholder="Contoh: 5">
                                @error('umur_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Hubungan Pengikut 2</label>
                                <select id="hubungan_2" type="text" class="form-control @error('hubungan_2') is-invalid @enderror" name="hubungan_2">
                                    <option selected disabled value="">-- Pilih --</option>
                                    @foreach ($hubungan_2 as $key => $value)
                                    <option value="{{ $key }}" {{ old('hubungan_2',$pendaftaran->hubungan_2) == $key ? 'selected' : null }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('hubungan_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Nama Pengikut 3</label>
                                <input id="pengikut_3" type="text" class="form-control @error('pengikut_3') is-invalid @enderror" name="pengikut_3" value="{{ old('pengikut_3') }}" placeholder="Contoh: Nama Anak">
                                @error('pengikut_3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Umur Pengikut 3 (Tahun)</label>
                                <input id="umur_3" type="number" class="form-control @error('umur_3') is-invalid @enderror" name="umur_3" value="{{ old('umur_3') }}" placeholder="Contoh: 5">
                                @error('umur_3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="form-label">Hubungan Pengikut 3</label>
                                <select id="hubungan_3" type="text" class="form-control @error('hubungan_3') is-invalid @enderror" name="hubungan_3">
                                    <option selected disabled value="">-- Pilih --</option>
                                    @foreach ($hubungan_3 as $key => $value)
                                    <option value="{{ $key }}" {{ old('hubungan_3',$pendaftaran->hubungan_3) == $key ? 'selected' : null }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('hubungan_3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <input id="status_pendaftaran" value="baru" class="d-none" name="status_pendaftaran">
                        <div class="text-center my-3"><button type="submit">Kirim</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$(function() {
    $("#datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-M-yy',
        yearRange: "-80:+0",
    });
});

</script>
@endsection
