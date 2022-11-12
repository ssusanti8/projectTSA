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

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/nk1.jpeg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> NK Cafe Malang </strong></h1>
                            <p class="m-b-40">NK Cafe sebuah kawasan kuliner dengan suguhan panorama alamnya yang memanjakan mata. Berada di Ampeldento, Karangploso, Kabupaten Malang.<br>
Hanya 3 menit dari Apartmen Begawan & Kampus UMM,  5 menit dari Kampus UNISMA, 10 menit dari Kampus UB & Kampus UIN.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/nk2.jpeg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> NK Cafe Malang </strong></h1>
                            <p class="m-b-40">NK Cafe sebuah kawasan kuliner dengan suguhan panorama alamnya yang memanjakan mata. Berada di Ampeldento, Karangploso, Kabupaten Malang.<br>
Hanya 3 menit dari Apartmen Begawan & Kampus UMM,  5 menit dari Kampus UNISMA, 10 menit dari Kampus UB & Kampus UIN.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/nk3.jpeg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> NK Cafe Malang </strong></h1>
                            <p class="m-b-40">NK Cafe sebuah kawasan kuliner dengan suguhan panorama alamnya yang memanjakan mata. Berada di Ampeldento, Karangploso, Kabupaten Malang.<br>
Hanya 3 menit dari Apartmen Begawan & Kampus UMM,  5 menit dari Kampus UNISMA, 10 menit dari Kampus UB & Kampus UIN.</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/nkpagi.png" alt="" />
                        <a class="btn hvr-hover" href="#">Suasana Pagi</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/nksore.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Suasana Sore</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/nkmalam.png" alt="" />
                        <a class="btn hvr-hover" href="#">Suasana Malam</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->
	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="images/nkcouple.png" alt="" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="images/nkcouple1.jpeg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>News View</h1>
                        <p>A view is a virtual table, through which a selective portion of the data from one or more tables can be seen.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Top featured</button>
                            <button data-filter=".best-seller">Best View</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Waterpark</p>
                            </div>
                            <img src="images/view1.png" class="img-fluid" alt="Image">
                        </div>
                        <div class="why-text">
                            <h4>-------------------------------</h4>
                            <h5> BEST VIEW </h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Hangout</p>
                            </div>
                            <img src="images/view4.jpg" class="img-fluid" alt="Image">                         
                        </div>
                        <div class="why-text">
                            <h4>-------------------------------</h4>
                            <h5> TOP FEATURED </h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Discussion</p>
                            </div>
                            <img src="images/view2.jpg" class="img-fluid" alt="Image">                        
                        </div>
                        <div class="why-text">
                            <h4>-------------------------------</h4>
                            <h5> TOP FEATURED </h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Outdoor</p>
                            </div>
                            <img src="images/view3.jpg" class="img-fluid" alt="Image">
                        </div>
                        <div class="why-text">
                            <h4>-------------------------------</h4>
                            <h5> BEST VIEW </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>LIGHT IN NIGHT</h1>
                        <p>Hiasan lampu yang indah pada pemandangan malam hari akan menyegarkan jiwa.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/nk5.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Suasana Siang Hari</h3>
                                <p>Pemandangan siang hari dengan suasana malang yang sejuk dapat membuat hati tenang dan mendungnya awan yang bikin adem</p>
                            </div>                         
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/nk6.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Suasana Sore Hari</h3>
                                <p>Kilauan lampu yang indah menambah keindahan pemandangan di NK Cafe serta dinginnya angin yang menyapa</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/nk4.png" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Suasana Malam Hari</h3>
                                <p>Pemandangan luar ruangan dengan udara yang segar akan mengurangi stress dan menambah ketenangan jiwa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->


    