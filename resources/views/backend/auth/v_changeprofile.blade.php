@extends('backend.layouts.v_template')
@section('title', 'Ubah Profil')
@section('content')
<div class="page-inner">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Ubah Profil</div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-6">
                                <form method="POST" action="{{ route('changeProfile') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="inputGambar">Foto Profil</label>
                                    <input type="file" class="form-control @error('foto_profil') is-invalid @enderror" name="foto_profil" class="form-control">
                                    @error('foto_profil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    @isset(Auth::user()->foto_profil)
                                    <img src="{{ Storage::url(Auth::user()->foto_profil) }}" class="avatar-img rounded-circle" style="height: 175px; width: 175px; object-fit: cover;">
                                    @else
                                    <img src="/storage/default/user-default.jpeg" class="avatar-img rounded-circle" style="height: 175px; width: 175px; object-fit: cover;">
                                    @endisset
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a class="btn btn-success btn-border" href="/admin">Batal</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
