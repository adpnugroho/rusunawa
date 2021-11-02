@extends('frontend.layouts.v_template')
@section('title', 'Pendaftaran - Rusunawa Kota Balikpapan')
@section('meta')
<meta name="robots" content="noindex">
@endsection
@section('description', 'Mendaftar di Rusunawa Kota Balikpapan')
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
                    <div class="sent-message mb-3">Halo Bapak/Ibu {{$pendaftaran->nama_lengkap }}, pendaftaran Anda berhasil ditambahkan.<br>Silahkan ikuti langkah-langkah di bawah ini untuk melanjutkan proses pendaftaran</div>
                    <ol>
                        <li>Download seluruh <b>berkas pendaftaran</b> Anda dengan menekan tombol berikut <a href="{{ route('cetakBerkas', $pendaftaran->slug) }}" target="_blank" class="btn btn-primary btn-sm">Download</a> </li>
                        <li>Print berkas pendaftaran pada kertas F4/Legal.</li>
                        <li>Lengkapi seluruh tanda tangan dan materai pada berkas pendaftaran.</li>
                        <li>Bawa <b>berkas pendaftaran</b> beserta <b>berkas pendukung</b> menggunakan stopmap hijau ke kantor UPTD Rusunawa.</li><br>
                        <b>Berkas Pendukung</b>
                        <ul>
                            <li>Fotokopi KTP</li>
                            <li>Fotokopi KK</li>
                            <li>Fotokopi Surat Nikah (jika berstatus menikah)</li>
                        </ul>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
