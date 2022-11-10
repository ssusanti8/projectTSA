<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta readonly name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NK Cafe || {{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                    <form action="{{ route('reservasi.update', $reservasi->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="user_id">ID USER</label>
                                <input type="text" class="form-control" readonly name="user_id" value="{{ old('user_id', $reservasi->user_id) }}"></br>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" readonly name="tanggal" value="{{ old('tanggal', $reservasi->tanggal) }}"></br>
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu</label>
                                <input type="time" class="form-control" readonly name="waktu" value="{{ old('waktu', $reservasi->waktu) }}"></br>
                            </div>
                            <div class="form-group">
                                <label for="orang">Jumlah Orang</label>
                                <input type="text" class="form-control" readonly name="orang" value="{{ old('orang', $reservasi->orang) }}"></br>
                            </div>
                            <div class="form-group">
                                <label for="spesial">Request</label>
                                <input type="text" class="form-control" readonly name="spesial" value="{{ old('spesial', $reservasi->spesial) }}"></br>
                            </div>
                            <!-- <div class="form-group">
                                <label for="bukti">Bukti</label>
                                <input type="file" class="form-control" readonly name="bukti" value="{{ old('bukti', $reservasi->bukti) }}"></br>
                            </div> -->
                            <!-- <div class="form-group">
                                <label for="meja">No Meja</label>
                                <input type="text" class="form-control" required="required" name="meja" value="{{ old('meja', $reservasi->meja) }}">
                                <br>
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
                            <button type="submit" name="edit" class="btn btn-md btn-primary">UPDATE</button>
                            <!-- <button type="submit" name="edit" class="btn btn-primary float-right">SIMPAN</button> -->
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>