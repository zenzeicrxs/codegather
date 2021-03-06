<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500&display=swap" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <title>Berita - code gather</title>
  </head>
  <body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-sm navbar-light mx-5 ">
      <div class="container-fluid">
        <a class="navbar-brand me-5" href="index.php">
          <img src="images/logo.png" alt="" width="175"; height="50">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Tentang</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Informasi Diklat</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Jadwal Diklat</a></li>
                <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                <li><a class="dropdown-item" href="#">Peserta</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#berita">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.html">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">Kontak</a>
            </li>
          </ul>
          <form class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login |</a>
              </li>
            </ul>
            <button class="btn outline-ungu" type="submit">Daftar</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->
    
    <!-- Start Berita -->
    <section id="berita" class="container">
    <h3 class="text-center fw-bold my-5 text-ungu">BERITA</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <!-- Tampil data berita start -->
           <?php
            include 'config/config.php';
        
            $q = $koneksi->query("SELECT * FROM berita ORDER BY id DESC");
            while ($dt = $q->fetch_assoc()) :
          ?>

      <div class="col">
        <div class="card">
          <img class="img-size" src="images/<?= $dt['gambar'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="isiberita.php?id=<?= $dt['id'] ?>"><h5 class="card-title text-dark fw-bold"><?= $dt['judul'] ?></h5></a>     
            <p class="card-text"><?= $dt['p_berita'] ?></p>
          </div>
        </div>
      </div>
       <?php
         endwhile;
        ?>
      <div class="mx-auto text-center mb-5">
      <a class="btn button" href="berita.php" role="button">Baca Selengkapnya</a>
      </div>
    </div>
    </section>
    <!-- End Berita -->


    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
      <!-- Section Social media Start -->
      <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
      >
        <!-- Left -->
        <div class="me-5 ms-5 d-none d-lg-block text-ungu">
          <span>Follow social media kami untuk mendapatkat informasi terbaru. </span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div class="text-ungu">
          <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
          </a>
        </div>
        <!-- Right -->

      </section>
      <!-- Section Social media End-->

      <!-- Section Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3 text-ungu"></i>CodeGather
              </h6>
              <p>
                Here you can use rows and columns to organize your footer content. Lorem ipsum
                dolor sit amet, consectetur adipisicing elit.
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column 1 Start -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Akses Cepat
              </h6>
              <p>
                <a href="#about" class="text-reset">Tentang</a>
              </p>
              <p>
                <a href="#kontak" class="text-reset">Kontak</a>
              </p>
              <p>
                <a href="#berita" class="text-reset">Berita</a>
              </p>
              <p>
                <a href="#!" class="text-reset">FAQ</a>
              </p>
            </div>
            <!-- Grid column 1 End -->

            <!-- Grid column 2 Start -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Kontak
              </h6>
              <p><i class="fas fa-home me-3"></i> Makassar, G2 10012, ID</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                codeghater@gmail.com
              </p>
              <p><i class="fas fa-phone me-3"></i> + 62 899 8891 026</p>
            </div>
            <!-- Grid column 2 End-->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section Links  -->

      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        ?? 2022 Copyright:
        <a class="text- fw-bold text-ungu" href="index.php">Codegather.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <!-- code solved tentang navbar toggle tidak muncul v -->
    <!-- CSS -->

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


  </body>
</html>