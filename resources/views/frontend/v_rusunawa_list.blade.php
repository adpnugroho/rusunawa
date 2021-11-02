@extends('frontend.layouts.v_template')
@section('title', 'Rusunawa Kota Balikpapan')
@section('description', 'Kumpulan Rumah Susun Sederhana Sewa (Rusunawa) yang ada di Kota Balikpapan, Kalimantan Timur')
@section('content')
<link href="{{ asset('template-frontend') }}/assets/vendor/lightbox2/dist/css/lightbox.min.css" rel="stylesheet">
<main id="main" data-aos="fade-in">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <h2>Rusunawa Kota Balikpapan</h2>
        </div>
    </div>
    <!-- ======= Rusunawa Section ======= -->
    <section id="courses" class="courses">
        <div class="container" data-aos="fade-up">
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Cari Berdasarkan Kecamatan
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/rusunawa?term=Balikpapan+Kota">Kec. Balikpapan Kota</a>
                    </li>
                    <li> <a class="dropdown-item" href="/rusunawa?term=Balikpapan+Selatan">Kec. Balikpapan Selatan</a>
                    </li>
                    <li> <a class="dropdown-item" href="/rusunawa?term=Balikpapan+Utara">Kec. Balikpapan Utara</a>
                    </li>
                    <li> <a class="dropdown-item" href="/rusunawa?term=Balikpapan+Timur">Kec. Balikpapan Timur</a>
                    </li>
                    <li> <a class="dropdown-item" href="/rusunawa?term=Balikpapan+Barat">Kec. Balikpapan Barat</a>
                    </li>
                </ul>
            </div>
            <div class="row" data-aos="zoom-in" data-aos-delay="100" style="margin-top: 15px;">
                @foreach($gedungs as $gedung)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" style="margin-bottom: 15px;">
                    <div class="course-item">
                        @if ($gedung->gallery->count()>0)
                        @for($i=0; $i < count($images=$gedung->gallery()->get()); $i++)
                            @if ($i==0)
                            <a href="{{ route('detailRusunawa', $gedung->slug) }}"><img src="{{ Storage::url($images[$i]['nama']) }}" class="img-fluid" style="object-fit: cover; height: 200px; width: 500px;" alt="{{ $gedung->nama }} Kota Balikpapan"></a>
                            @endif
                            @endfor
                            @endif
                            <div class="course-content">
                                <h3><a href="{{ route('detailRusunawa', $gedung->slug) }}">{{ $gedung->nama }}</a></h3>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                    <div class="trainer-profile d-flex align-items-center">
                                        <i class="bx bx-map"></i>&nbsp;
                                        <span>{{ $gedung->kecamatan }}</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div> <!-- End Rusunawa Item-->
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
