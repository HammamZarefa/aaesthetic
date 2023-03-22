<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- Internet Explorer Meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- First Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Aesthetic Dashboard</title>
		<link rel="icon" href="{{ asset('images/icon.png') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap4.css') }}">
		<link rel="stylesheet" href="{{ asset('css/all.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style-admin.css') }}">
        <!--[if lt IE 9]>
        <script src="{{ asset('js/html5shiv.min.js') }}"></script>
       	<script src="{{ asset('js/respond.min.js') }}"></script>
        <![endif]-->
	</head>
	<body>

		<!-- Side Menu -->
		<header>
			<div class="menu">
				<img src="{{ asset ('images/logo-white.png') }}" class="img-responsive logo">
				<button id="menu-btn">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<nav class="navbar navbar-expand-lg">					
					<div class="collapse navbar-collapse show" id="navbarSupportedContent">
						<ul class="navbar-nav">
						<li class="nav-item {{ Request::is('admin/slider') ? 'active' : '' }}">
							<a class="nav-link" href="{{ url('/admin/slider') }}">
								<i class="far fa-images"></i>
								<span class="link">
									Slider
								</span>
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item {{ Request::is('admin/about-us') ? 'active' : '' }}">
							<a class="nav-link" href="{{ url('/admin/about-us') }}">
								<i class="fas fa-info-circle"></i>
								<span class="link">
									About Us
								</span>
							</a>
						</li>
						<li class="nav-item menu {{ Request::is('admin/products') ? 'active' : '' }}">
							<a class="nav-link" href="{{ url('/admin/products') }}">
								<i class="fas fa-award"></i>
								<span class="link">
									Our Products
								</span>
							</a>
							<ul>
								<li class="{{ Request::is('admin/product/add') ? 'active' : '' }}">
									<a href="{{ url('/admin/product/add') }}">
										<i class="fas fa-plus"></i>
										<span class="link">
											Add new product
										</span>
									</a> 
								</li>
							</ul>
						</li>
						<li class="nav-item menu {{ Request::is('admin/team') ? 'active' : '' }}">
							<a class="nav-link" href="{{ url('/admin/team') }}">
								<i class="fas fa-users"></i>
								<span class="link">
									Our Team
								</span>
							</a>
							<ul>
								<li class="{{ Request::is('admin/team/add') ? 'active' : '' }}">
									<a href="{{ url('/admin/team/add') }}">
										<i class="fas fa-plus"></i>
										<span class="link">
											Add new member
										</span>
									</a> 
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('logout') }}"
								onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
								<i class="fas fa-door-open"></i>
								<span class="link">
									Logout
								</span>
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</li>
					</div>
				</nav>
			</div>
		</header>
		<div class="overlay"></div>
		<!-- ./Side Menu -->

		<div class="page-wrapper">
			<div class="container">
				<div class="row">