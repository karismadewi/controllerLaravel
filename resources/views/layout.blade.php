<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>My Project | Karisma Dewi</title>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Bootstrap Icons -->
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
		/>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
			crossorigin="anonymous"
		/>
		<!-- Bootstrap CSS -->
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" /> -->

		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
			crossorigin="anonymous"
		/>
		<!-- My CSS -->
		<link rel="stylesheet" href="style.css" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<!-- font asesome 6 cdn -->
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.0/css/all.css"
		/>
	</head>
	<body id="home">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg shadow-sm fixed-top" style="background-color: #dab3f8">
			<div class="container">
				<a class="navbar-brand" href="#">it is me, akarism_</a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarNav"
					aria-controls="navbarNav"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#home">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">Material</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#projects">Program</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- End Navbar -->

		<!-- Start Jumbotron using bootsrap 4-->
		<section class="jumbotron text-center">
			<img src="img/logo.jpg" alt="silhuette" width="170" class="rounded-circle img-thumbnail" />
			<h1 class="display-4">Ni Putu Karisma Dewi</h1>
			<p class="lead">Project 4 : Arithmetic Sequence Program</p>

			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
				<path
					fill="#ffffff"
					fill-opacity="1"
					d="M0,192L40,186.7C80,181,160,171,240,165.3C320,160,400,160,480,144C560,128,640,96,720,90.7C800,85,880,107,960,128C1040,149,1120,171,1200,170.7C1280,171,1360,149,1400,138.7L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
				></path>
			</svg>
		</section>
		<!-- End Jumbotron -->

		<!-- material -->
		<section id="about">
			<div class="container">
				<div class="row text-center mb-4">
					<div class="col">
						<h2>What is Arithmetic Sequence?</h2>
					</div>
				</div>
				<div class="row justify-content-center fs-5 text-center">
					<div class="col-md-5">
						<p>
							The arithmetic sequence formula is used for the calculation of the nth term of an
							arithmetic progression. The arithmetic sequence is the sequence where the common
							difference remains constant between any two successive terms. If we want to find any
							term in the arithmetic sequence then we can use the arithmetic sequence formula.
						</p>
					</div>
					<div class="col-md-5">
						<p>
							<img src="ar.png" alt="formula" class="image" />
						</p>
					</div>
				</div>
			</div>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
				<path
					fill=" #faf1ff"
					fill-opacity="1"
					d="M0,64L30,74.7C60,85,120,107,180,122.7C240,139,300,149,360,128C420,107,480,53,540,53.3C600,53,660,107,720,149.3C780,192,840,224,900,224C960,224,1020,192,1080,170.7C1140,149,1200,139,1260,128C1320,117,1380,107,1410,101.3L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
				></path>
			</svg>
		</section>
		<!-- end material -->
	@yield('project')	
<!-- Contact -->
		<section id="contact">
			<div class="container">
				<div class="row text-center mb-4">
					<div class="col">
						<h2>Contact Me</h2>
					</div>
				</div>
				<div class="center">
					<button class="btn btn-outline-danger" type="button">
						<span><i class="fa-brands fa-youtube"></i></span> <span>Youtube</span>
					</button>
					<a
						href="https://www.instagram.com/a.karism_/"
						target="_blank"
						class="btn btn-outline-danger"
						type="button"
					>
						<span> <i class="fa-brands fa-instagram"></i> </span> <span>instagram</span>
					</a>
					<button class="btn btn-outline-success" type="button">
						<span> <i class="fa-brands fa-whatsapp"></i> </span> <span>Whatsapp</span>
					</button>
					<a
						href="https://github.com/karismadewi"
						target="_blank"
						class="btn btn-outline-dark"
						type="button"
					>
						<span><i class="fa-brands fa-github"></i></span> <span>GitHub</span>
					</a>
				</div>
			</div>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
				<path
					fill="#dab3f8"
					fill-opacity="1"
					d="M0,0L40,16C80,32,160,64,240,74.7C320,85,400,75,480,101.3C560,128,640,192,720,229.3C800,267,880,277,960,272C1040,267,1120,245,1200,213.3C1280,181,1360,139,1400,117.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
				></path>
			</svg>
		</section>
		<!-- end contact -->

		<!-- Footer -->
		<footer style="background-color: #dab3f8" class="text-white text-center py-3 mt-auto">
			<p>
				Created with <i class="bi bi-heart-fill text-danger"></i> by
				<a href="https://www.instagram.com/akarism_/" class="text-white fw-bold">akarism_</a>
			</p>
		</footer>
		<!-- End Footer -->

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
			crossorigin="anonymous"
		></script>

	</body>
</html>
