<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fixed.css">

	<title>AINUN'S CAFFEE</title>
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
	<!-- awal Home -->
	<div id="home">
	
		<!-- Navigation -->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="index.php"><img src="img/logo%20A.jpg" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>	
			</button>


			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto"> <!-- meaning margin-left auto -->
					<li class="nav-item">
						<a class="nav-link" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>				
					<li class="nav-item">
						<a class="nav-link"  href="#books">Kopi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
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

		<!-- Start of Image Slider -->
		<div id="carouselExampleIndicators" class="carousel slide" data-interval="7000">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0 " class="active"></li> 
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li> 
			</ol>
			<!-- awal carousel inner -->
			<div class="carousel-inner" role="listbox">
				<!-- slide 1 -->
				<div class="carousel-item active" style="background-image: url(img/toko1.jpg);">
					<div class="carousel-caption text-center">
						<h1>Welcome TO AINUN'S COFFEE </h1>
						<h3>Where You Can Coose The Best Coffee</h3>
						<a class="btn btn-outline-light btn-lg" href="#course">Get Started</a>
					</div>
				</div>

				<!-- slide 2 -->
				<div class="carousel-item" style="background-image: url(img/cover2.jpg);">
					<div class="carousel-caption text-center">
						<h1>CAFFE IS MOOD BOOSTER</h1>
					</div>	
				</div>

			</div> <!-- akhir carousel inner -->

			<!-- prev dan next button -->
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</a>
		</div> <!-- akhir Image Slider -->
	</div>
	<!-- akhir Home -->

	
	<!-- awal about -->
	<section id="about" class="about">
		<div class="container">
			<div class="row content">
				<div class="col-lg-6">
					<h1>AINUN'S CAFFEE</h1>
					<h3>Tempat penikmat caffe yang menghasilkan aroma segar dan nikmat sangat cocok bagi pencita biji kopi .</h3>
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0">
					<p>
					Di tokoh ini tersedia beberapa macam dan jenis kopi yang berkualitas, Kopi yang sama bisa menghasilkan sensasi yang beragam ketika disajikan dengan cara yang berbeda-beda. Secara umum penyajian kopi dapat dibagi menjadi dua, espresso based dan manual brew.

                    Espresso based adalah minuman yang menggunakan espresso sebagai dasar dari campuran dengan bahan lain, misal susu, krimer, cokelat, atau es krim. Contohnya espresso, americano, cappuccino, latte, dan sebagainya.

                    Sementara kopi manual brew adalah minuman yang diseduh tanpa mesin otomatis. Contohnya kopi tubruk, pour over, vietnam drip, dan lain-lain.

                    Penting untuk mengetahui jenis minuman kopi, terlebih jika ingin melakukan brewing. Dengan mengenali jenis-jenisnya, Anda dapat memaksimalkan alat dan bahan yang Anda miliki untuk secangkir kopi yang nikmat.  :
				    </p>
					<ul>
						<li>Espresso</li>
						<li>Chemex</li>
						<li>Moka pot</li>
						<li>Tubruk</li>
						<li>Coffee late</li>
						<li>Komet</li>
					</ul>
					<p class="font-italic">
						SELAMAT MENIKMATI, 
					
				</div>
			</div>
		</div>
	</section>


	<!-- awal Book section-->
	<div id="books" class="offset">
		<div class="col-12 text-center title">
				<h2>CAFFEE</h2>
				<div class="heading-underline"></div>
		</div>

		<div class="row padding">
			<div class="col-md-4"> 
				<div class="card">
					<img class="card-img-top" src="img/kopi1.jpeg">
					<div class="card-body">
						<h4 class="text-center">Espresso</h4>
						<p class="text-justify">" Pembuatan minuman (brewing) kopi seperti ini dikembangkan di Milan, Italia, sejak awal abad ke-20.Awal terciptanya espreso ditandai dengan ditemukannya mesin kopi yang dapat mengeluarkan uap dan air mendidih melalui kopi bubuk oleh Luigi Bezzera pada 1901."</p>
					</div>
				</div>
			</div>

			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/kopi2.jpeg">
					<div class="card-body">
						<h4 class="text-center">Chemex</h4>
						<p class="text-justify">"Chemex, Alat Seduh untuk Kopi Anda.chemex untuk pertama kali ditemukan pada tahun 1941 oleh seorang ahli kimia asal jerman bernama peter j. schiumbohm saat stduy di amerika.dan ini sangat cocok bagi pencita kopi krn,merupakan alat seduh yg sederhana."</p>
					</div>
				</div>
			</div>

			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/kopi3.jpeg" width="480" height="480" >
					<div class="card-body">
						<h4 class="text-center">Moka pot</h4>
						<p class="text-justify">"Moka pot adalah sejenis alat pembuat kopi di atas kompor gas atau listrik yang menyeduh kopi menggunakan air mendidih yang dicampur dengan kopi bubuk dan diseduh menggunakan tekanan air.namun diciptakan oleh seorang insinyur Italia Alfonso Bialetti pada tahun 1933."</p>
					</div>
				</div>
			</div>

		</div>

		<div class="row padding">
			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/kopi4.jpeg" width="480" height="480">
					<div class="card-body">
						<h4 class="text-center">Tubruk</h4>
						<p class="text-justify">"Kopi tubruk. Kopi Tubruk adalah minuman kopi khas Indonesia yang dibuat dengan menuangkan air panas ke dalam gelas atau teko yang sudah diisi bubuk kopi. Bisa dengan ditambahkan gula, bisa juga tanpa gula."</p>
					</div>
				</div>
			</div>

			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/kopi5.jpg">
					<div class="card-body">
						<h4 class="text-center">Coffe latte</h4>
						<p class="text-justify">"Caffé latte atau kopi latte adalah campuran 1/3 espresso dengan 2/3 steamed milk. Buih susu hanya tipis di permukaan. Meski komposisinya mirip dengan cappuccino,rasanya lebih milky dan creamy. "</p>
					</div>
				</div>
			</div>

			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/macca%20latte6.jpg" width="480" height="480">
					<div class="card-body">
						<h4 class="text-center">Macca latte</h4>
						<p class="text-justify">"mocha adalah kependekan dari mocha latte atau caffe mocha. Menurut definisi moka,  cokelat dan espresso yang seimbang.  Biasanya, rasionya adalah ⅖ coklat, ⅖ espresso, dan ⅕ susu.dan memiliki rasa cyremy"</p>
					</div>
				</div>
			</div>

		</div>

			
	</div>
	<!-- akhir Book section-->


	<!-- awal footer section-->
	<div id="contact" class="offset">
		<footer>
			<div class="row justify-content-center">
				<div class="col-md-5 text-center">
					<img class="logo" src="img/logo%20A.jpg">
					<p>"Pembeli Adalah Raja."</p>
					<strong>Contact Info</strong>
					<p>(888) 888-8888 <br> email@barista.com</p>

					<a class="ikon" href="https://web.facebook.com/profile.php?id=100007666605125" target="_blank"><img src="img/facebook.svg" style="width: 30px"></a>
					<a class="ikon" href="https://twitter.com/ramyeoonnn" target="_blank"><img src="img/twitter.svg" style="width: 30px"></a>
					<a class="ikon" href="https://www.instagram.com/puanarash/" target="_blank"><img src="img/instagram.svg" style="width: 30px"></a>
				</div>

				<hr class="socket">
				&copy; Barista Caffe.
			</div> <!-- end of row -->
		</footer>
	</div> <!-- Akhir footer section-->

	

	<!-- Script Source Files -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

</body>
</html>