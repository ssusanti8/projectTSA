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
                    <a href="{{ ('/cetak_pdf') }}" class="btn btn-md btn-success mb-3">Cetak PDF Reservasi</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">ID User</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No. HP</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Jumlah Orang</th>
                                <th scope="col">Request</th>
                                <th scope="col">DP reservasi</th>
                                <th scope="col">Bukti</th>
                                <th scope="col">No Meja</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($reservasis as $reservasi)
                                <tr>
                                    <td>{{ $reservasi->user_id }}</td>
                                    <td>{{ $reservasi->user->name }}</td>
                                    <td>{{ $reservasi->user->nomerhp }}</td>
                                    <td>{{ $reservasi->tanggal }}</td>
                                    <td>{{ $reservasi->waktu }}</td>
                                    <td>{{ $reservasi->orang }}</td>
                                    <td>{{ $reservasi->spesial }}</td>
                                    <td>{{ $reservasi->total }}</td>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/reservasis/').$reservasi->bukti }}" class="rounded" style="width: 150px">
                                    </td> 
                                    <td>{{ $reservasi->meja }}</td> 
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('reservasi.destroy', $reservasi->id) }}" method="POST">
                                            <a href="{{ route('reservasi.edit', $reservasi->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>                                 
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data reservasi belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                         
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

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</body>

</html>


   