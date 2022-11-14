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

<header class="navbar navbar-dark bg-primary">           
              <a class="navbar-brand col-md-6 col-lg-4 me-0 px-3 fs-6" href="#">Selamat Datang {{ auth()->user()->name }}, Anda Berhasil Login</a>
              <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                  <form action="/logout" method="post">
                    @csrf
                    
                    <button type="submit" class="navbar navbar-dark bg-primary"> Logout <span data-feather="log-out" class="align-text-bottom"></span></button>
                  </form>
                </div>
              </div>
            </header>

    <div class="container-fluid">
        <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar position-fixed collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <a class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted border-bottom" aria-current="page" href="/home">
                <b><span data-feather="arrow-left" class="align-text-bottom" style="font-weight: bold;">DASHBOARD</span></b>
            </a>
            <li class="nav-item">
                        @can('user')
                            <li class="nav-item">
                                <a class="nav-link @if($title=='Manage') active @endif" href="#">Halaman User</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ ('/reservasi') }}">Reservasi</a></li>
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
                        <form action="{{ route('reservasi.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal</label>
                                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}" placeholder="Masukkan Tanggal">
                            
                                <!-- error message untuk tanggal -->
                                @error('reservasi.')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Waktu</label>
                                <input type="time" class="form-control @error('waktu') is-invalid @enderror" name="waktu" value="{{ old('waktu') }}" placeholder="Masukkan waktu">
                            
                                <!-- error message untuk waktu -->
                                @error('waktu')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jumlah Orang</label>
                                <input type="text" class="form-control @error('orang') is-invalid @enderror" name="orang" value="{{ old('orang') }}" placeholder="Masukkan Jumlah Orang">
                            
                                <!-- error message untuk orang -->
                                @error('orang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Spesial Request</label>
                                <select type="text" class="form-control @error('spesial') is-invalid @enderror" name="spesial" value="{{ old('spesial') }}">
                                    <option>Indoor</option>
                                    <option>Outdoor</option>
                                </select>
                                <!-- error message untuk spesial -->
                                @error('spesial')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">DP Reservasi</label>
                                <select type="text" class="form-control @error('total') is-invalid @enderror" name="total" value="{{ old('total') }}">
                                    <option>DP 5% Rp. 10.000</option>
                                    <option>DP 10% Rp. 20.000</option>
                                </select>
                                <!-- error message untuk total -->
                                @error('total')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Bukti Pembayaran</label>
                                <input type="file" class="form-control @error('bukti') is-invalid @enderror" name="bukti">
                            
                                <!-- error message untuk bukti -->
                                @error('bukti')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">No Meja</label>
                                <input type="text" class="form-control @error('meja') is-invalid @enderror" readonly name="meja" value="{{ old('meja') }}" placeholder="Akan diisi oleh Admin">
                            
                                <!-- error message untuk total -->
                                @error('meja')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-md btn-primary">SAVE</button>
                            <a href="{{ url()->previous() }}" class="btn btn-warning">CANCEL</a>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
