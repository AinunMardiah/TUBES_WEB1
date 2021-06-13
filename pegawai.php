<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fixed.css">

  <title>Profil Pegawai</title>

  <style>
    .container {
      margin-top: 100px;
      font-size: 18px;
    }

  </style>

</head>
<body>
    <!-- Awal Home -->
    <div id="home">
    
      <!-- Awal Navigasi -->
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.html"><img src="img/logo%20A.jpg" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span> 
        </button>


        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto"> <!-- meaning margin-left auto -->
            <li class="nav-item">
            <a class="nav-link" href="index.php#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#about">About</a>
          </li>       
          <li class="nav-item">
            <a class="nav-link"  href="index.php#books">Kopi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profil_perusahaan.php">Profile</a>
          </li>         
          <li class="nav-item">
            <a class="nav-link"  href="pegawai.php">Pegawai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href=login.php>Login</a>
          </li>
          </ul> 
        </div>
      </nav>
      <!-- Akhir Navigasi -->
    </div>
    <!-- Akhir Home -->

    <!-- Awal Table Pegawai -->
    <div class="container">
        <h1 style="margin-bottom: 20px;">PROFIL PEGAWAI</h1>
        <table class="table table-striped">
          <thead>
            <tr class="text-center">
              <th scope="col">No.</th>
              <th scope="col">Gambar</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Alamat</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><img src="img/d.o.jpg" width="120px" height="170px"></td>
              <td>Doh kyung soo</td>
              <td>Dohkyongsoo@gmail
              <td>Jl. gyeonggi,korsel</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><img src="img/suhoo.jpg" width="120px" height="170px"></td>
              <td>kim jun myeon</td>
              <td>suhoo@gmail.com</td>
              <td>Jl.hwacheon,korsel  </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><img src="img/chanyol.jpg" width="120px" height="170px"></td>
              <td>park chanyoel</td>
              <td>Chanyoel@gmail.com</td>
              <td>Jl.seoul,south korea</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td><img src="img/baekhyun.jpg" width="120px" height="170px"></td>
                <td>byun baek hyun</td>
              <td>baekhyun@gmail.com</td>
              <td>jl.bucheon,korsel</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td><img src="img/sehun.jpg" width="120px" height="170px"></td>
              <td>oh se hun</td>
              <td>sehun@gmail.com</td>
              <td>jl.seoul,korea selatan</td>
            </tr>
          </tbody>
        </table>
    </div>
    <!-- Akhir Table Pegawai -->





    <!-- awal footer section-->
    <div id="contact" class="offset">
      <footer>
        <div class="row justify-content-center">
          <div class="col-md-5 text-center">
            <img class="logo" src="img/logo%20A.jpg">
            <p>"Selamat menikmati ,semoga anda menyukainya."</p>
            <strong>Contact Info</strong>
            <p>(888) 888-8888 <br> email@Barista.com</p>

            <a class="ikon" href="https://web.facebook.com/profile.php?id=100007666605125" target="_blank"><img src="img/facebook.svg" style="width: 30px"></a>
            <a class="ikon" href="https://twitter.com/ramyeoonnn" target="_blank"><img src="img/twitter.svg" style="width: 30px"></a>
            <a class="ikon" href="https://www.instagram.com/puanarash/" target="_blank"><img src="img/instagram.svg" style="width: 30px"></a>
          </div>

          <hr class="socket">
          &copy; Barista Caffee.
        </div> <!-- end of row -->
      </footer>
    </div> <!-- Akhir footer section-->

    

    <!-- Script Source Files -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

</body>
</html>