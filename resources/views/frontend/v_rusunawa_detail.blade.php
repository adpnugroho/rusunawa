@extends('frontend.layouts.v_template')
@section('title', '' . e($gedung->nama) . ' Kota Balikpapan')
@section('description', 'Informasi tentang ' . e($gedung->nama) . ' Kota Balikpapan beserta tahun pembuatan, jumlah lantai, jumlah kamar, fasilitas, biaya, dan foto gedung')
@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>{{ $gedung->nama }} Kota Balikpapan</h2>
        </div>
    </div>
    <!-- ======= Gedung Details Section ======= -->
    <section id="course-details" class="course-details">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8" style="margin-bottom: 20px;">
                    @if ($gedung->gallery->count()>0)
                    @for($i=0; $i < count($images=$gedung->gallery()->get()); $i++)
                        @if ($i==0)
                        <a href="{{ Storage::url($images[$i]['nama']) }}" data-lightbox="{{ ($images[$i]['id']) }}"><img src="{{ Storage::url($images[$i]['nama']) }}" class="img-fluid" style="object-fit: cover; height: 350px; width: 100%;" alt="{{ $gedung->nama }} Kota Balikpapan"></a>
                        @endif
                        @endfor
                        @endif
                </div>
                <div class="col-lg-4">
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Tahun Pembuatan</h5>
                        <p>{{ $gedung->tahun_pembuatan }}</p>
                    </div>
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Jumlah Lantai</h5>
                        <p>{{ $gedung->jumlah_lantai }}</p>
                    </div>
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Total Kamar</h5>
                        <p>{{ $data['data']['total_kamar'] }}</p>
                    </div>
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Kamar Terisi</h5>
                        <p>{{ $data['data']['total_kamar_terisi'] }}</p>
                    </div>
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Kamar Kosong</h5>
                        <p>{{ $data['data']['total_kamar_kosong'] }}</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h3>Alamat</h3>
                    <!-- ======= Alamat Section ======= -->
                    <section id="features" class="features">
                        <div class="container" data-aos="fade-up" style="padding: 0;">
                            <div class="row mb-3" data-aos="zoom-in" data-aos-delay="100">
                                <span>{{ $gedung->alamat }} (<a href="{{ $gedung->link_gmaps }}" target="_blank" style="font-weight: bold;">Link Google Maps</a>)
                            </div>
                        </div>
                    </section>
                    <h3>Fasilitas</h3>
                    <!-- ======= Fasilitas Section ======= -->
                    <section id="features" class="features">
                        <div class="container" data-aos="fade-up" style="padding: 0;">
                            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                                @foreach($fasilitas as $fasilita)
                                <div class="col-lg-3 col-md-4" style="margin-bottom:15px;">
                                    <div class="icon-box">
                                        <i class="ri-gradienter-line" style="color: #0d6efd;"></i>
                                        <h3><a href="">{{ $fasilita->nama }}</a></h3>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    <h3>Biaya</h3>
                    <!-- ======= Biaya Section ======= -->
                    <section id="features" class="features">
                        <div class="container" data-aos="fade-up" style="padding: 0;">
                            <div class="table-responsive">
                                <table class="table table-bordered" data-aos="zoom-in" data-aos-delay="100">
                                    <thead style="text-align: center;">
                                        <tr>
                                            <th scope="col">Lantai</th>
                                            <th scope="col">Total Kamar</th>
                                            <th scope="col">Kamar Terisi</th>
                                            <th scope="col">Kamar Kosong</th>
                                            <th scope="col">Harga Sewa/Bulan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($biaya['data']['data_per_lantai'] as $biayas)
                                        <tr>
                                            <td style="text-align:center;">{{ $biayas['lantai'] }}</td>
                                            <td style="text-align:center;">{{ $biayas['total_kamar'] }}</td>
                                            <td style="text-align:center;">{{ $biayas['kamar_terisi'] }}</td>
                                            <td style="text-align:center;">{{ $biayas['kamar_kosong'] }}</td>
                                            <td>Rp{{ number_format($biayas['tarif_bulanan']) }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <h3>Foto Gedung</h3>
                    <!-- ======= Foto Gedung Section ======= -->
                    <section id="features" class="features">
                        <div class="container" data-aos="fade-up" style="padding: 0;">
                            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                                @if ($gedung->gallery->count()>0)
                                @for($i=0; $i < count($images=$gedung->gallery()->get()); $i++)
                                    @if ($i==0)
                                    <div class="col-lg-3 col-md-4">
                                        <div class="card" style="margin-bottom:15px">
                                            <a href="{{ Storage::url($images[$i]['nama']) }}" data-lightbox="{{ ($images[$i]['id']) }}"><img class="card-img-top" src="{{ Storage::url($images[$i]['nama']) }}" style="object-fit: cover; height: 200px; width: 100%;" alt="{{ $gedung->nama }} Kota Balikpapan"></a>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-lg-3 col-md-4">
                                        <div class="card" style="margin-bottom: 15px">
                                            <a href="{{ Storage::url($images[$i]['nama']) }}" data-lightbox="{{ ($images[$i]['id']) }}">
                                                <img class="card-img-top" src="{{ Storage::url($images[$i]['nama']) }}" style="object-fit: cover; height: 200px; width: 100%;" alt="{{ $gedung->nama }} Kota Balikpapan">
                                            </a>
                                        </div>
                                    </div>
                                    @endif
                                    @endfor
                                    @endif
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section('css')
<link href="{{ asset('template-frontend') }}/assets/vendor/lightbox2/dist/css/lightbox.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="{{ asset('template-frontend') }}/assets/vendor/lightbox2/dist/js/lightbox-plus-jquery.min.js"></script>
@endsection
