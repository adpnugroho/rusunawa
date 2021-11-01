@extends('frontend.layouts.v_template')
@section('title', 'Persyaratan - Rusunawa Kota Balikpapan')
@section('description', 'Persyaratan yang harus dipenuhi untuk mendaftar Rumah Susun Sederhana Sewa (Rusunawa) Kota Balikpapan')
@section('content')
@foreach($persyaratan as $persyaratans)
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>{{ $persyaratans->judul }}</h2>
        </div>
    </div>
    <!-- ======= Persyaratan Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 content">
                    {!!$persyaratans->isi!!}
                </div>
            </div>
        </div>
    </section>
</main>
@endforeach
@endsection
