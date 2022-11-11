<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NK CAFE MALANG</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
</head>

<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
              
              <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Selamat Datang, Anda Berhasil Login</a>
              <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                  <form action="/logout" method="post">
                    @csrf
                    
                    <button type="submit" class="nav-link px-3 bg-dark border-0"> Logout <span data-feather="log-out" class="align-text-bottom"></span></button>
                  </form>
                </div>
              </div>
            </header>

    <div class="container-fluid">
        <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar position-fixed collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <a class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted border-bottom" aria-current="page" href="/linksosmed">
                <span data-feather="arrow-left" class="align-text-bottom" style="font-weight: bold;"></span>
                ---
            </a>
            <li class="nav-item">
                        @can('admin')
                            <li class="nav-item">
                                <a class="nav-link @if($title=='Manage') active @endif" href="#">Halaman Admin</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ ('/galeri') }}">Galeri</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ ('/menu') }}">Menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ ('/diskon') }}">Paket Diskon</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ ('/reservasiku') }}">Reservasi</a></li>
                        @endcan
            </li>
            
        </ul>
    </div>

</nav>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                    <form action="{{ route('reservasi.update', $reservasi->id) }}" method="post">                            
                        @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="user_id">ID USER</label>
                                <input type="text" class="form-control" readonly name="user_id" value="{{ $reservasi->user_id }}"></br>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" readonly name="tanggal" value="{{ $reservasi->tanggal }}"></br>
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu</label>
                                <input type="time" class="form-control" readonly name="waktu" value="{{ $reservasi->waktu }}"></br>
                            </div>
                            <div class="form-group">
                                <label for="orang">Jumlah Orang</label>
                                <input type="text" class="form-control" readonly name="orang" value="{{ $reservasi->orang }}"></br>
                            </div>
                            <div class="form-group">
                                <label for="spesial">Request</label>
                                <input type="text" class="form-control" readonly name="spesial" value="{{ $reservasi->spesial }}"></br>
                            </div>
                            <!-- <div class="form-group">
                                <label for="bukti">Bukti</label>
                                <input type="file" class="form-control" readonly name="bukti" value="{{ old('bukti', $reservasi->bukti) }}"></br>
                            </div> -->
                            <div class="form-group">
                                <label class="font-weight-bold">Nomor Meja</label>
                                <input type="text" class="form-control @error('meja') is-invalid @enderror" name="meja" value="{{ old('meja', $reservasi->meja) }}" placeholder="Update nomor">

                                <!-- error message untuk meja -->
                                @error('meja')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <!-- <button type="submit" name="edit" class="btn btn-primary float-right">SIMPAN</button> -->
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>