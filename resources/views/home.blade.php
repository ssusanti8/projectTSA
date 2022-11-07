@extends('layouts.app')

@section('content')

<!-- COBAIN -->
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container">
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if($title=='Links') active @endif" href="/linksosmed">Links</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title=='Background') active @endif" href="/background">Background</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title=='Preview') active @endif" href="/viewlink">Preview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title=='Analytics') active @endif" href="/analytics">Analytics</a>
                </li>
                
            </ul>

            @can('admin')
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if($title=='Manage') active @endif" href="/manage">Admin</a>
                </li>
            </ul>
            @endcan

            @can('superadmin')
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if($title=='Manage') active @endif" href="/manage">Super Admin</a>
                </li>
            </ul>
            @endcan

            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="position:relative; padding-left:50px;">
                        <img src="/img/profile_photos/{{ auth()->user()->profile_photo }}" style="width:32px; height:32px; position:absolute; top:7px; left:10px; border-radius:50%" alt="">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="/profile"><i class="bi bi-person-circle"></i> My Profile</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link @if($title=='Login') active @endif"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
    
</nav> -->
<!-- 
<div class="container"> -->
<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/nk1.jpeg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> NK Cafe Malang </strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
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
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
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
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
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

    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hallo Selamat Datang') }}</div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('LINK RESERVASI NANTINYA!') }}


                    
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection
