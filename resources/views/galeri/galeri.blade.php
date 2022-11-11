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
                    <h2>GALERI</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">GALERI</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
				<div class="col-lg-6">
                    @forelse ($galeris as $galeri)
                    <div class="banner-frame"> <img class="img-fluid" src="{{ Storage::url('public/galeris/').$galeri->gambar }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">{{ $galeri->judul }}</h2>
                    <p>{{ $galeri->deskripsi }}</p>
                </div>
                @empty
                    <div class="alert alert-danger">
                    Belum ada galeri yang tersedia. Terus Update untuk galeri selanjutnya!!!
                    </div>
                @endforelse
            </div>

            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Trusted</h3>
                        <p>Kami terpecaya, dengan memberikan menu yang halal sehingga dapat disantap oleh semua kalangan </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Professional</h3>
                        <p>Pelayanan yang sudah berpengalaman, tidak akan mengecewakan para pengunjung NK Cafe </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Expert</h3>
                        <p>Hiburan live music dan lainnya dapat menambah kenyamanan pengujung NK Cafe </p>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <h2 class="noo-sh-title">Choose Your Table</h2>
                </div>
                <div class="col-sm-6 col-lg-3">
                <span align="center"></span>
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/nkmalam.png" alt="" />
                            <div class="team-content">
                                <h3 class="title">NIGHT</h3> <span class="post">Modern</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Pemandangan malam hari dengan suasana malang yang sejuk dapat membuat hati tenang </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/nksore.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">GOLD</h3> <span class="post">Elegant</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Kilauan lampu yang indah menambah keindahan pemandangan di NK Cafe</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/nkpagi.png" alt="" />
                            <div class="team-content">
                                <h3 class="title">OUTDOOR</h3> <span class="post">Classic</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Pemandangan luar ruangan dengan udara yang segar akan mengurangi stress dan menambah ketenangan jiwa </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
    </div>
    <!-- End About Page -->

    