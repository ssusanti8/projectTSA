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
                    <h2>ABOUT US</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">ABOUT US</li>
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
                    <div class="banner-frame"> <img class="img-fluid" src="images/nksore.jpg" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">We are <span>NK Cafe Malang</span></h2>
                    <p>Sebagai tempat wisata kuliner dengan konsep tematik alam, semenjak dibuka pada Agustus 2020, NK Cafe terus berbenah dan berkreasi untuk menambah serta melengkapi fasilitasnya.Bertujuan bagaimana caranya untuk memberikan kenyamanan bagi pengunjung / wisatawan yang datang. Sehingga, dalam kurun waktu sekitar 2 tahun sejak beroperasi, NK Cafe sudah bisa dikategorikan sebagai destinasi wisata kuliner yang kaya akan ragam aksi dan kreasi.Berada di sekitar areal persawahan yang luas, udara yang jernih, view yang cantik berupa pemandangan Gunung Arjuno, Gunung Kawi dan Gunung Panderman, merupakan daya tarik utama dari NK Cafe. Tak heran makin hari pengunjung semakin banyak, meskipun saat ini ada pembatasan jumlah karena wabah belum berakhir.</p>
					<a class="btn hvr-hover" href="#">Read More</a>
                </div>
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
                <!-- <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/img-1.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Williamson</h3> <span class="post">Web Developer</span> </div>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate. </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- End About Page -->

    