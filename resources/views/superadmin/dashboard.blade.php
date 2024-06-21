<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>
    
    {{-- Main Content --}}

    <nav class="navbar navbar-expand-lg navbar-light shadow-md fixed-top" style="background-color: #7c90ff">
      <div class="container">
        <a class="navbar-brand fw-bold fs-2" href="#">Arkatama</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <div class="container">
              <form action="/index" method="get">
                @csrf
                <button type="submit" class="btn btn-success">Pegawai</button>
              </form>
            </div>
            <div class="container">
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
              </form>
            </div>
            {{-- <a class="nav-link active fs-5" aria-current="page" href="#home">Home</a>
            <a class="nav-link active fs-5" href="#about">Pegawai</a> --}}
          </div>
        </div>
      </div>
    </nav>



    {{-- <div class="container">
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div> --}}
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('foto/cropped.jpg') }}" class="d-block w-100" alt="Slide 1">
          <div class="carousel-caption d-none d-md-block">
            {{-- <h5>Slide 1</h5>
            <p>Description for Slide 1.</p> --}}
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('foto/dua.jpg') }}" class="d-block w-100" alt="Slide 2">
          <div class="carousel-caption d-none d-md-block">
            {{-- <h5>Slide 2</h5>
            <p>Description for Slide 2.</p> --}}
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('foto/tiga.jpg') }}" class="d-block w-100" alt="Slide 3">
          <div class="carousel-caption d-none d-md-block">
            {{-- <h5>Slide 3</h5>
            <p>Description for Slide 3.</p> --}}
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <footer class="text-center text-lg-start" style="background-color: #7c90ff">
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2024 Arkatama Multi Solusindi
      </div>
    </footer>

    {{-- Main Content --}}







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        // Initialize the carousel
        $('#myCarousel').carousel({
          interval: 3000 // Change slide interval to 3 seconds
        });
    
        // Manually control the carousel
        $('#myCarousel').on('slide.bs.carousel', function () {
          console.log('Slide event triggered.');
        });
    
        // Event listeners for custom controls (if needed)
        $('.carousel-control-prev').click(function(){
          $('#myCarousel').carousel('prev');
        });
    
        $('.carousel-control-next').click(function(){
          $('#myCarousel').carousel('next');
        });
      });
    </script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>