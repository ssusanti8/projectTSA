@extends('layouts.main')

@section('container')

    <body>
        <br>
        <div class="container">
            <nav class="navbar navbar-dark bg-primary">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">     
                         <b> Migration- Model View Controller</b>
                    </a>
                </div>
            </nav>
            <br>
            <div class="col-12">
                <div class="row">
                    @foreach ($kategori as $KategoriItem)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $KategoriItem->KategoriRumah }}</h5>
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
    </body>
    
    </html>