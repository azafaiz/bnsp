<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Pegawai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: #7c90ff">

    <div class="container mt-5">
        
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                  <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                        
                    @csrf
                
                    <div class="form-group">
                        <label class="font-weight-bold">NAMA</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Pegawai">
                    
                        <!-- error message untuk title -->
                        @error('nama')
                            <div class="alert alert-danger mt-2">
                                {{ $nama }}
                            </div>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label class="font-weight-bold">ALAMAT</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat Pegawai">
                    
                        <!-- error message untuk title -->
                        @error('alamat')
                            <div class="alert alert-danger mt-2">
                                {{ $alamat }}
                            </div>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label class="font-weight-bold">NO HP</label>
                        <input type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" placeholder="Masukkan Nomor Handphone">
                    
                        <!-- error message untuk title -->
                        @error('no_hp')
                            <div class="alert alert-danger mt-2">
                                {{ $no_hp }}
                            </div>
                        @enderror
                    </div>
                
                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-danger">RESET</button>
                    
                
                </form> 
                  <div class="text-right">
                    <a href="{{ route('index') }}" class="btn btn-MD btn-warning">KEMBALI</a>
                    {{-- <button type="reset" class="btn btn-md btn-warning">KEMBALI</button> --}}
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

</body>
</html>