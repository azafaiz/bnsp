<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Pegawai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: #7c90ff">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h2 class="fw-bold text-center">Detail Pegawai</h2>
                        <br>
                        <label >Nama : </label>
                        <h4>{{ $post->nama }}</h4>
                        <hr>
                        <label >Alamat : </label>
                        <h4>{{ $post->alamat }}</h4>
                        <hr>
                        <label >No HP : </label>
                        <h4>{{ $post->no_hp }}</h4>
                        <div class="text-right">
                            <a href="{{ route('index') }}" class="btn btn-MD btn-warning">KEMBALI</a>
                            {{-- <button type="reset" class="btn btn-md btn-warning">KEMBALI</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>