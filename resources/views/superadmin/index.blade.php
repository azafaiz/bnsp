<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Pegawai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: #7c90ff">

    <div class="container mt-5">
        
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="text-right">
                        <a href="{{ route('dashboard') }}" class="btn btn-md btn-danger mb-3">KEMBALI</a>
                    </div>
                    <a href="{{ route('create') }}" class="btn btn-md btn-success mb-3">TAMBAH PEGAWAI</a>
                    
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col" class="text-center">NO</th>
                            <th scope="col" class="text-center">NAMA</th>
                            <th scope="col" class="text-center">ALAMAT</th>
                            <th scope="col" class="text-center">NO HP</th>
                            <th scope="col" class="text-center">AKSI</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($posts as $post)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td>{{ $post->nama }}</td>
                                <td>{{ $post->alamat }}</td>
                                <td>{{ $post->no_hp }}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('destroy', $post->id) }}" method="get">
                                        <a href="{{ route('show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                        <a href="{{ route('edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                          @empty
                              <div class="alert alert-danger">
                                  Data Post belum Tersedia.
                              </div>
                          @endforelse
                        </tbody>
                      </table>  
                      {{ $posts->links() }}
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