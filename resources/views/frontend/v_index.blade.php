@extends('frontend.layouts.v_template')
@section('title', 'Rusunawa Kota Balikpapan')
@section('description', 'Rumah Susun Sederhana Sewa (Rusunawa) di Kota Balikpapan')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Rusunawa<br>Kota Balikpapan</h1>
        <h2>Rumah Susun Sederhana Sewa di Kota Balikpapan</h2>
        <a href="/rusunawa" class="btn-get-started">Lihat Rusunawa</a>
    </div>
</section>
<main id="main">
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container">
            <div class="row counters">
                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $data['data']['total_rusunawa'] }}" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Gedung Rusunawa</p>
                </div>
                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $data['data']['total_kamar'] }}" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Total Kamar</p>
                </div>
                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $data['data']['total_kamar_terisi'] }}" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Kamar Terisi</p>
                </div>
                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $data['data']['total_kamar_kosong'] }}" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Kamar Kosong</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 order-1" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{ asset('template-frontend') }}/assets/img/about.jpg" class="img-fluid" alt="Rusunawa Kota Balikpapan">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 content">
                    <p>
                        Rumah Susun Sederhana Sewa (Rusunawa) adalah bangunan gedung bertingkat yang dibangun dalam suatu lingkungan yang terbagi dalam bagian-bagian yang distrukturkan secara fungsional dalam arah horisontal maupun vertikal dan merupakan satuan-satuan yang masing-masing digunakan secara terpisah, status penguasaannya sewa, dengan fungsi utamanya sebagai hunian.
                    </p>
                    <p>
                        Rusunawa dilengkapi dengan bagian bersama, yang dibangun dengan menggunakan bahan bangunan dan konstruksi sederhana akan tetapi masih memenuhi standar kebutuhan minimal dari aspek kesehatan, keamanan, dan kenyamanan.
                    </p>
                    <p>
                        Rusunawa didirikan untuk memenuhi kebutuhan hunian bagi kelompok Masyarakat Berpenghasilan Rendah (MBR) yang belum mampu membangun atau menghuni rumah layak huni.
                    </p>
                    <p>
                        Rusunawa di Kota Balikpapan dibangun oleh Kementerian Perumahan Rakyat RI yang selanjutnya dikelola oleh Dinas Perumahan dan Permukiman Kota Balikpapan melalui Unit Pelaksana Teknis Daerah (UPTD) Rusunawa.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
