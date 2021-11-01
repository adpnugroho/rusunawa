@extends('backend.layouts.v_template')
@section('title', 'Dashboard')
@section('content')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner">
        <div class="mt-4 mb-4">
            <h2 class="text-white">Selamat datang, {{ Auth::user()->name }}!</h2>
        </div>
    </div>
</div>
<div class="page-inner">
    <div class="row">
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title">Data Keluhan</div>
                    <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-1">
                                <div class="circles-wrp">
                                    <div id="keluhan_baru"></div>
                                </div>
                            </div>
                            <h6 class="fw-bold mt-3 mb-0">Baru</h6>
                        </div>
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-2">
                                <div class="circles-wrp">
                                    <div id="keluhan_diproses"></div>
                                </div>
                            </div>
                            <h6 class="fw-bold mt-3 mb-0">Diproses</h6>
                        </div>
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-3">
                                <div class="circles-wrp">
                                    <div id="keluhan_selesai"></div>
                                </div>
                            </div>
                            <h6 class="fw-bold mt-3 mb-0">Selesai</h6>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title">Data Pendaftaran</div>
                    <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-1">
                                <div class="circles-wrp">
                                    <div id="pendaftaran_baru"></div>
                                </div>
                            </div>
                            <h6 class="fw-bold mt-3 mb-0">Baru</h6>
                        </div>
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-2">
                                <div class="circles-wrp">
                                    <div id="pendaftaran_diproses"></div>
                                </div>
                            </div>
                            <h6 class="fw-bold mt-3 mb-0">Diproses</h6>
                        </div>
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-3">
                                <div class="circles-wrp">
                                    <div id="pendaftaran_selesai"></div>
                                </div>
                            </div>
                            <h6 class="fw-bold mt-3 mb-0">Selesai</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script-internal')
<script src="{{ asset('template-backend') }}/assets/js/plugin/chart-circle/circles.min.js"></script>
<script>
    Circles.create({
    id: 'keluhan_baru',
    radius: 50,
    value: {{ $keluhan_baru->count() }},
    maxValue: {{ $keluhan_total->count() }},
    width: 7,
    text: function(value) { return value; },
    colors: ['#eee', '#F25961'],
    duration: 400,
    wrpClass: 'circles-wrp',
    textClass: 'circles-text',
    styleWrapper: true,
    styleText: true
})
Circles.create({
    id: 'keluhan_diproses',
    radius: 50,
    value: {{ $keluhan_diproses->count() }},
    maxValue: {{ $keluhan_total->count() }},
    width: 7,
    text: function(value) { return value; },
    colors: ['#eee', '#FF9E27'],
    duration: 400,
    wrpClass: 'circles-wrp',
    textClass: 'circles-text',
    styleWrapper: true,
    styleText: true
})
Circles.create({
    id: 'keluhan_selesai',
    radius: 50,
    value: {{ $keluhan_selesai->count() }},
    maxValue: {{ $keluhan_total-> count() }},
    width: 7,
    text: function(value) { return value; },
    colors: ['#eee', '#2BB930'],
    duration: 400,
    wrpClass: 'circles-wrp',
    textClass: 'circles-text',
    styleWrapper: true,
    styleText: true
})
Circles.create({
    id: 'pendaftaran_baru',
    radius: 50,
    value: {{ $pendaftaran_baru->count() }},
    maxValue: {{ $pendaftaran_total->count() }},
    width: 7,
    text: function(value) { return value; },
    colors: ['#eee', '#F25961'],
    duration: 400,
    wrpClass: 'circles-wrp',
    textClass: 'circles-text',
    styleWrapper: true,
    styleText: true
})
Circles.create({
    id: 'pendaftaran_diproses',
    radius: 50,
    value: {{ $pendaftaran_diproses->count() }},
    maxValue: {{ $pendaftaran_total->count() }},
    width: 7,
    text: function(value) { return value; },
    colors: ['#eee', '#FF9E27'],
    duration: 400,
    wrpClass: 'circles-wrp',
    textClass: 'circles-text',
    styleWrapper: true,
    styleText: true
})
Circles.create({
    id: 'pendaftaran_selesai',
    radius: 50,
    value: {{ $pendaftaran_selesai->count() }},
    maxValue: {{ $pendaftaran_total-> count() }},
    width: 7,
    text: function(value) { return value; },
    colors: ['#eee', '#2BB930'],
    duration: 400,
    wrpClass: 'circles-wrp',
    textClass: 'circles-text',
    styleWrapper: true,
    styleText: true
})

</script>
@endsection
