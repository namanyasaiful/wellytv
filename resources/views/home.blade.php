<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

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
          <button class="btn btn-secondary mb-2" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <!--Film-->
    <div class="card-wrapper">
      <div class="cards">
        <div class="card">
            <img class="card-image" src="img/film/warkop dki.jpg" alt="">
            <div class="card-desc">
              <div class="card-title">Warkop DKI Reborn</div>
              <button class="pelajari-btn"><a href="{{ route('warkop.index') }}">Watching</a></button>
            </div>
        </div>
        <div class="card">
            <img class="card-image" src="img/film/harry potter.jpg" alt="">
            <div class="card-desc">
              <div class="card-title">Harry Potter</div>
              <button class="pelajari-btn"><a href="">Watching</a></button>
            </div>
        </div>
        <div class="card">
            <img class="card-image" src="img/film/alas.jpg" alt="">
            <div class="card-desc">
              <div class="card-title">Alas Pati</div>
              <button class="pelajari-btn"><a href="">Watching</a></button>
            </div>
        </div>
        <div class="card">
            <img class="card-image" src="img/film/stupid boss.jpg" alt="">
            <div class="card-desc">
              <div class="card-title">My Stupid Boss</div>
              <button class="pelajari-btn"><a href="">Watching</a></button>
            </div>
        </div>
        <div class="card">
          <img class="card-image" src="img/film/pengabdisetan.jpg" alt="">
          <div class="card-desc">
            <div class="card-title">Pengabdi Setan</div>
            <button class="pelajari-btn"><a href="">Watching</a></button>
          </div>
        </div>
      </div>
    </div>
    <div class="card-wrapper">
      <div class="cards">
        <div class="card">
            <img class="card-image" src="img/film/frozen.webp" alt="">
            <div class="card-desc">
              <div class="card-title">Frozen</div>
              <button class="pelajari-btn"><a href="">Watching</a></button>
            </div>
        </div>
        <div class="card">
            <img class="card-image" src="img/film/rasuk.jpeg" alt="">
            <div class="card-desc">
              <div class="card-title">Rasuk</div>
              <button class="pelajari-btn"><a href="">Watching</a></button>
            </div>
        </div>
        <div class="card">
            <img class="card-image" src="img/film/bajaj bajuri.jpg" alt="">
            <div class="card-desc">
              <div class="card-title">Bajaj Bajuri</div>
              <button class="pelajari-btn"><a href="">Watching</a></button>
            </div>
        </div>
        <div class="card">
            <img class="card-image" src="img/film/alice.jpg" alt="">
            <div class="card-desc">
              <div class="card-title">Alice in Wonderland</div>
              <button class="pelajari-btn"><a href="">Watching</a></button>
            </div>
        </div>
        <div class="card">
          <img class="card-image" src="img/film/baby.jpg" alt="">
          <div class="card-desc">
            <div class="card-title">Baby Blues</div>
            <button class="pelajari-btn"><a href="">Watching</a></button>
          </div>
      </div>
      </div>
    </div>
  </div>
</div>
</div>


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