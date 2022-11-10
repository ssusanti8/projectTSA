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
@include('manage.layouts.header')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('reservasi.create') }}" class="btn btn-md btn-success mb-3">Add Reservasi</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Jumlah Orang</th>
                                <th scope="col">Request</th>
                                <th scope="col">Bukti</th>
                                <th scope="col">No. Meja</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($reservasis as $reservasi)
                                <tr>
                                    <td>{{ $reservasi->tanggal }}</td>
                                    <td>{{ $reservasi->waktu }}</td>
                                    <td>{{ $reservasi->orang }}</td>
                                    <td>{{ $reservasi->spesial }}</td>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/reservasis/').$reservasi->bukti }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $reservasi->meja }}</td>
                                    
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data reservasi belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $reservasis->links() }}
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
