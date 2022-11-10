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
                        <a href="{{ route('galeri.create') }}" class="btn btn-md btn-success mb-3">TAMBAH GALERI</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">JUDUL</th>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">DESKRIPSI</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($galeris as $galeri)
                                <tr>
                                    <td>{{ $galeri->judul }}</td>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/galeris/').$galeri->gambar }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $galeri->deskripsi }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('galeri.destroy', $galeri->id) }}" method="POST">
                                            <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data galeri belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $galeris->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
