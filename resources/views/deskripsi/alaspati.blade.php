@section('title', 'warkop')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/deskripsi.css">

    <title>Welly TV</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="100" height="50" class="d-inline-block align-top" alt="">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Genre
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Comedy</a></li>
              <li><a class="dropdown-item" href="#">Horror</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control mr-2" type="search" placeholder="Search Film" aria-label="Search">
          <button class="btn btn-info mb-2" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="card-wrapper">
        <div class="cards">
            <div class="card">
                <img class="card-image" src="img/film/alas.jpg" alt="">
            </div>
            <div class="card" style="width: 40rem;">
              <div class="card-body">
                <h5 class="card-title">Warkop DKI Reborn</h5>
                <p class="card-text">Film Warkop DKI Reborn: Jangkrik Boss Part 1 mengisahkan tiga orang sahabat Dono (Abinama Aryasatya), Kasino (Vino G. Bastian), dan Indro (Tora Sudiro). 
                  Kisahnya berkutat pada sebuah kesialan yang mereka alami dalam pekerjaan mereka sebagai petugas keamanan di organisasi CHIIPS (Cara hebat Ikut-Ikutan Pelayanan Sosial). 
                  Suatu saat secara tidak sengaja mereka merusak sebuah warung warga dan membakar sebuah pameran lukisan. Boss Mereka (Ence Bagus) pun murka dan meminta mereka untuk mencari uang pengganti sebesar 8 milliar. 
                  Pencarian mereka pun berujung dengan mendapat kan sebuah peta harta karun yang mengharuskan ketiganya pergi ke Malaysia.
                </p>
                  <a href="#" class="btn btn-custom"><b>Watching Ver Inggris</b></a>
                  <a href="#" class="btn btn-custom"><b>Watching Ver Indonesia</b></a>
              </div>
            </div>
        </div>
    </div>

    <!--Deskripsi Film-->
    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>