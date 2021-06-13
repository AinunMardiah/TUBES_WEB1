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
            <a class="nav-link"  href="index.php#books">Books</a>
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

    <!-- Awal Table Perusahaan -->
    <div class="container">
        <h1 style="margin-bottom: 20px;">PROFIL COFFEE</h1>
        <table class="table table-striped">
          <tbody>
            <tr class="text-center">
              <td><img src="img/profil%20coffe1.jpg" width="800px" height="800px"></td>
            </tr>
            <tr>
              <td class="text-center"><br>"ainun's cafee adalah tokoh caffe yang menghasilkan coffe berkualitas bagus dan memiliki banyak peminat." <br>
              Di mindset kebanyakan masyarakat Indonesia kopi haruslah hitam dan pahit. Padahal seharusnya tidak begitu. Robusta yang disangrai dengan gelap tentulah memberi pahit yang luar biasa dahsyat. Kehitaman dan kepahitan tingkat kopi berasal dari proses penyangraiannya (roasting). Semakin lama biji kopi disangrai maka akan semakin pahit dan hitamlah kopi tersebut. Ada tiga tingkat proses penyangraian yaitu light, medium dan dark. Sebaiknya kopi tidak disangrai terlalu dark karena akan menghilangkan karakteristik biji kopi tersebut.</td>
            </tr>
          </tbody>
        </table>
    </div>
    <!-- Akhir Table Perusahaan -->





    <!-- awal footer section-->
    <div id="contact" class="offset">
      <footer>
        <div class="row justify-content-center">
          <div class="col-md-5 text-center">
            <img class="logo" src="img/logo%20A.jpg">
            <p>"Selamat Menikmati, Semoga anda menyukainya"</p>
            <strong>Contact Info</strong>
            <p>(888) 888-8888 <br> email@Barista.com</p>

            <a class="ikon" href="https://web.facebook.com/profile.php?id=100007666605125" target="_blank"><img src="img/facebook.svg" style="width: 30px"></a>
            <a class="ikon" href="https://twitter.com/ramyeoonnn" target="_blank"><img src="img/twitter.svg" style="width: 30px"></a>
            <a class="ikon" href="https://www.instagram.com/puanarash/" target="_blank"><img src="img/instagram.svg" style="width: 30px"></a>
          </div>

          <hr class="socket">
          &copy; Barista caffee.
        </div> <!-- end of row -->
      </footer>
    </div> <!-- Akhir footer section-->

    

    <!-- Script Source Files -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    
</body>
</html>