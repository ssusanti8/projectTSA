<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NK Cafe | {{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

<div class="container mt-5 mb-5">
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
                                <label class="font-weight-bold">Total</label>
                                <input type="text" class="form-control @error('total') is-invalid @enderror" name="total" value="{{ old('total') }}" placeholder="Total Otomatis">
                            
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

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
