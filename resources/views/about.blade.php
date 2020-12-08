<!DOCTYPE html>
<html>
<head>
	
	<!-- Main Style -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!--------------------------Font Huruf-------------------------->
	<!-- Pacificio ,Lobster, and Indie Flower-->
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster|Pacifico&display=swap" rel="stylesheet">
	<!-- Liu Jian Mao Cao -->
	<link href="https://fonts.googleapi	s.com/css?family=Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">

	<!--------------------------------Bootstrap Starter Template-------------------------------->
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!------------------------Bagian Title------------------------>
	<link rel="shortcut icon" href="img/favicon.ico" /> <!--menambah icon-->

    <!-- Styles -->
    <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }   

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
	<title>Farhan Mufti Hilmy</title>
</head>
<body>
	<!-- BAR NAVIGASI -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<img id="logo" src="img/hilmylogo.png" width="30" height="30" class="d-inline-block align-top">
		<a id="nav-title" class="navbar-brand" href="#">Hilmy's profile</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact us</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						More
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="https://github.com/FarhanMuftiHilmy">My Github Profile</a>
						<a class="dropdown-item" href="https://farhanmuftihilmy.github.io/profile/">My Previous Profile</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	<!-- untuk menambah margin agar bagian info utama tidak tertutup oleh bar navigasi  -->
	<section class="nobody"></section>
	<!-- HERO -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="img/programming.jfif" alt="First slide">
				<div class="carousel-caption d-none d-md-block">
				    <h5>Welcome!</h5>
				    <p>This is my professional website profile</p>
			    </div>
			</div>	
			<div class="carousel-item">
				<img class="d-block w-100" src="img/design.jfif" alt="Second slide">
				<div class="carousel-caption d-none d-md-block">
				    <h5>Why?</h5>
				    <p>Creative design lies in creative thinker</p>
			    </div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="img/scenery.jfif" alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
				    <h5>Take a break!</h5>
				    <p>Enjoy the present, be grateful</p>
			    </div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- BAGIAN : INFO UTAMA -->
	<section id="info_utama" class="section">
		<!-- identitas -->
		<div class="jumbotron mb-0">
			<img src="img/WIN_20200206_12_27_20_Pro.jpg">
			<h1 class="display-4">Halo, Saya Farhan Mufti Hilmy!</h1>
			<p class="lead">Saya adalah mahasiswa D4 Teknologi Rekayasa Perangkat Lunak Universitas Gadjah Mada tahun masuk 2019.</p>
			<hr class="my-4	">
			<p>Saya sangat tertarik untuk belajar lebih banyak mengenai pemrograman web.</p>
			<button type="button" class="btn btn-light" href="https://github.com/FarhanMuftiHilmy">Hubungi Saya!</button>
		</div>

	</section>


	<!-- BAGIAN : KEAHLIAN -->
	<!-- Page Features -->
	<h1 id="title_keahlian" style="text-align: center">KEAHLIAN</h1>
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4"> <!--Mengatur grid kolom -->
        <div class="card h-100">
          <img class="card-img-top" src="img/full-stack-developer.jpg">
          <div class="card-body">
            <h4 class="card-title">Full Stack Developer</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-outline-success">Find Out more!</button>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/data-science.jpg">
          <div class="card-body">
            <h4 class="card-title">Data Scientist</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-outline-success">Find Out more!</button>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/cyber-security.jpg">
          <div class="card-body">
            <h4 class="card-title">Cyber Security</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-outline-success">Find Out more!</button>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/software-tester.jpg">
          <div class="card-body">
            <h4 class="card-title">Software Tester</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
          	<button type="button" class="btn btn-outline-success">Find Out more!</button>
            
          </div>
        </div>
      </div>

    </div>
	<!-- FOOTER -->
   <footer class="py-5 bg-success"> 
     <div class="container">
       <p class="m-0 text-center text-white">Copyright &copy; Hilmy's Website 2020</p>
     </div>
   </footer>
   <div class="flex-center position-ref">
        @include('layouts.menu')
    </div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>