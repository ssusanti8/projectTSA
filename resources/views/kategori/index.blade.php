@extends('layouts.main')

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
                    <h2>Kategori</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/homepage">Home</a></li>
                        <li class="breadcrumb-item active">Kategori</li>
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
                    @foreach ($kategori as $KategoriItem)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $KategoriItem->KategoriRumah }}</h5>
                                <img src="{{ asset('/images/'. $KategoriItem->gambarRumah) }}" width="30" height="30" alt="">
                                <h5 class="card-title">{{ $KategoriItem->gambarRumah }}</h5>
                                <h5 class="card-title">{{ $KategoriItem->deskripsi }}</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <br>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
