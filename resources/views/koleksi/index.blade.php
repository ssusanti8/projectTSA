@extends('layouts.main')

@section('title') {{'KOLEKSI'}} @endsection

@section('container')
<!-- Start Top Search -->
<div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Koleksi</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Koleksi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->


        <br>
        <div class="container">
            <br>
            <div class="col-12">
                <div class="row">
                    @foreach ($koleksi as $koleksi)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $koleksi->KategoriRumah }}</h5>
                                <img src="{{ asset('/images/'. $koleksi->gambarRumah) }}" width="30" height="30" alt="">
                                <h5 class="card-title">{{ $koleksi->gambarRumah }}</h5>
                                <h5 class="card-title">{{ $koleksi->deskripsi }}</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <br>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
