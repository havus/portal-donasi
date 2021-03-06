Bismillah
<?php 


require_once('../app/init.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/font.css">
	<title>Portal Donatur</title>
</head>

<body>

	<div class="container">
		<!-- =============== Navbar =============== -->
		<div class="navbar navbar-expand-lg">
			<a class="navbar-brand" href="#">
				<img src="assets/img/Logo.png" class="d-inline-block align-top" alt="logo">
				<span class="logo">QODR</span>
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<img src="assets/img/collapse.png" alt="">
			</button>

			<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				<ul class="navbar-nav justify-content-end">
					<li class="nav-item">
						<a class="nav-link" href="#">Active</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Donate</a>
					</li>
				</ul>
			</div>
		</div>


		<!-- =============== CAROUSEL =============== -->
		<section id="carousel">

			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="assets/img/12.jpg" class="d-block w-100" alt="gambar 1">
					</div>
					<div class="carousel-item">
						<img src="assets/img/12.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="assets/img/12.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

		</section>


		<!-- =============== MAIN =============== -->
		<section id="main">
			<div class="row">
				<div class="col-md-4 row">
					<!-- ============ ALUMNI ============ -->
					<div class="col-md-12 case-member">
						<span class="badge badge-primary badge-pill" id="badge">9</span>
						<div id="member-img">
							<img src="assets/img/Logo.png" alt="">
						</div>
						<div class="member-1 member">
							<!-- MAX 18 HURUF -->
							<p class="text-center">M hafidz mahrus</p>
						</div>
					</div>

					<div class="col-md-12 case-member">
						<span class="badge badge-primary badge-pill" id="badge">2</span>
						<div id="member-img">
							<img src="assets/img/Logo.png" alt="">
						</div>
						<div class="member-1 member">
							<!-- MAX 18 HURUF -->
							<p class="text-center">M hafidz mahrus</p>
						</div>
					</div>

					<div class="col-md-12 case-member">
						<span class="badge badge-primary badge-pill" id="badge">5</span>
						<div id="member-img">
							<img src="assets/img/Logo.png" alt="">
						</div>
						<div class="member-1 member">
							<!-- MAX 18 HURUF -->
							<p class="text-center">M hafidz mahrus</p>
						</div>
					</div>

				</div>

				<div class="col-md-4"></div>

				<div class="col-md-4 row">
					<!-- ============ SANTRI ============ -->
					<div class="col-md-12 case-member">
						<div id="member-img">
							<img src="assets/img/Logo.png" alt="">
						</div>
						<div class="member-1 member">
							<p class="text-center">Santri 1</p>
						</div>
					</div>

					<div class="col-md-12 case-member">
						<div id="member-img">
							<img src="assets/img/Logo.png" alt="">
						</div>
						<div class="member-1 member">
							<p class="text-center">Santri 1</p>
						</div>
					</div>

					<div class="col-md-12 case-member">
						<div id="member-img">
							<img src="assets/img/Logo.png" alt="">
						</div>
						<div class="member-1 member">
							<p class="text-center">Santri 1</p>
						</div>
					</div>

					<div class="col-md-12 case-member">
						<div id="member-img">
							<img src="assets/img/Logo.png" alt="">
						</div>
						<div class="member-1 member">
							<p class="text-center">Santri 1</p>
						</div>
					</div>

					<div class="col-md-12 case-member">
						<div id="member-img">
							<img src="assets/img/Logo.png" alt="">
						</div>
						<div class="member-1 member">
							<p class="text-center">Santri 1</p>
						</div>
					</div>

				</div>
			</div>
		</section>

	</div>

	<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>