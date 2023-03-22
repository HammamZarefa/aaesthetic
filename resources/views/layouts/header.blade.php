<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Internet Explorer Meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- First Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Aesthetic</title>
		<link rel="icon" href="{{ asset('images/icon.png') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('css/flickity.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!--[if lt IE 9]>
        <script src="{{ asset('js/html5shiv.min.js') }}"></script>
       	<script src="{{ asset('js/respond.min.js') }}"></script>
        <![endif]-->
	</head>
	<body>
		
		<!-- Header -->
		@if (\Request::is('/'))
		<header class="custom-header">
		@else
		<header>
		@endif

			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<a href="{{ url('/') }}">
							<img src="{{ asset('images/logo-color.png') }}" class="img-responsive logo">
						</a>
					</div>
					<div class="col-sm-9 col-xs-12">

						<!-- Navbar -->
						<nav class="navbar" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="collapse navbar-collapse in" id="bs-example-navbar-collapse-1">
								<button class="close"><span>&times;</span></button>
								<ul class="nav navbar-nav">
									<li class="{{ Request::is('/') ? 'active' : '' }}">
										<a href="{{ url('/') }}">
											Home
											<span class="line"></span>
										</a>
									</li>
									<li class="{{ Request::is('about-us') ? 'active' : '' }}">
										<a href="{{ url('/about-us') }}">
											About Us
											<span class="line"></span>
										</a>
									</li>
									<li class="{{ (Request::is('products') || Request::is('product/*') ) ? 'active' : '' }}">
										<a href="{{ url('/products') }}">
											Our Products
											<span class="line"></span>
										</a>
									</li>
									<li class="{{ Request::is('team') ? 'active' : '' }}">
										<a href="{{ url('/team') }}">
											Our Team
											<span class="line"></span>
										</a>
									</li>
									<li class="{{ Request::is('contact') ? 'active' : '' }}">
										<a href="{{ url('/contact') }}">
											Contact Us
											<span class="line"></span>
										</a>
									</li>
								</ul>
							</div>
						</nav>
						<div class="overlay-all"></div>
						<!-- ./Navbar -->

					</div>
				</div>
			</div>
		</header>
		<!-- ./Header -->

		<!-- Social -->
		<div class="share">
			<ul>
				<li class="facebook">
					<a href="https://www.facebook.com/Aes5ausC/">
						<i class="fab fa-facebook-f"></i>
						<span>Facebook</span>
					</a>
				</li>
				<li class="twitter">
					<a href="https://twitter.com/AestheticCompa3?s=09">
						<i class="fab fa-twitter"></i>
						<span>Twitter</span>
					</a>
				</li>
				<li class="instagram">
					<a href="https://instagram.com/companyaesthetic?igshid=rrk1jtnllczx">
						<i class="fab fa-instagram"></i>
						<span>Instagram</span>
					</a>
				</li>
				<li class="linkedin">
					<a href="https://www.linkedin.com/company/aesthetic-company">
						<i class="fab fa-linkedin"></i>
						<span>Linked in</span>
					</a>
				</li>
			</ul>
		</div>
		<!-- ./Social -->