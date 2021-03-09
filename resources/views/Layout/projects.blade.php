<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <meta name="description" content="Neonzz.online  Homepage" />
    <meta name="author" content="Neonzz" />
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link href="../fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="../css/sb-admin-2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
	<link href="../img/favicon.ico" rel="shortcut icon" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/jquery.easing.min.js"></script>
    <script src="../js/java.js"></script>
	<script src="../js/sb-admin-2.min.js"></script>
    <style>
      .error {color: #FF0000;}
      .success {color: #64dd17;}
      body {
            background-image: url('/img/container.png');
            }
    </style>
    </head>
    <body>
        @section('topbar')
        <div id="Topbar">
 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

	<!-- Topbar -->
	<nav class="navbar navbar-expand bg-custom topbar mb-4 static-top shadow">

		<!-- Sidebar Toggle (Topbar) -->
		<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
			<i class="fa fa-bars"></i>
		</button>
		<a class="navbar-brand" href="{{ route('index') }}"><img src="/img/logo.png"></a>
		
		<!-- Topbar Search -->
		<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
			<div class="input-group">
				<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<button class="btn btn-primary" type="button">
						<i class="fas fa-search fa-sm"></i>
					</button>
				</div>
			</div>
		</form>
<!-- Topbar Navbar -->
				@guest
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<span class="mr-2 d-none d-lg-inline text-black-600 small">Welcome</span>
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-black-600 small">
						
								 	Login/Register
								</span>
							</a>
							<!-- Dropdown - User Information -->
							@if (Route::has('register'))
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="{{ route('register') }}">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Register
								</a>
							@endif

							@if (Route::has('login'))
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ route('login') }}" data-toggle="modal" data-target="#loginModal">
									<i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Login
							@endif
								
							</a>
							</div>
							</li>
					</ul>

				</nav>
</div>
				@else
					<ul class="navbar-nav ml-auto">
<!-- Nav Item - User Information -->
					<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						<span class="mr-2 d-none d-lg-inline text-black-600 small">
						{{ Auth::user()->username }}
						</span>
						<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
						</a>
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
							<a href="" class="dropdown-item">
								<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
								Profile
							</a>
							<div class="dropdown-divider"></div>
								<a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						</div>
							</li>
				@endguest
					</ul>

				</nav>
</div>
        @show
				<!-- End of Topbar -->
        @section('sidebar')
            <!-- Sidebar -->
    <div id="Navbar" name="Navbar">
	    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Nav Item - Dashboard -->
	    <li class="nav-item active">
	        <a class="nav-link" href="{{ route('index') }}">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Home</span></a>
	    </li>

	<!-- Divider -->
	    <hr class="sidebar-divider">

	<!-- Heading -->
	    <div class="sidebar-heading">
	        Projects
	    </div>

	<!-- Nav Item - Pages Collapse Menu -->
	    <li class="nav-item">
	        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
		<i class="fas fa-fw fa-cog"></i>
		<span>Projects</span>
	</a>
	<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
		<h6 class="collapse-header">Python:</h6>
		<a class="collapse-item" href="{{ route('Wormy') }}">Wormy</a>
		<a class="collapse-item" href="{{ route('Pong') }}">Pong</a>
		<h6 class="collapse-header">UE4:</h6>
		<a class="collapse-item" href="{{ route('BuildingEscape') }}">Building Escape</a>
		<a class="collapse-item" href="{{ route('BattleTank') }}">Battle Tank</a>
		</div>
	</div>
	</li>
	<div class="sidebar-heading">
		Contact and about us
	</div>
	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
		<i class="fas fa-fw fa-wrench"></i>
		<span>About & Contact</span>
	</a>
	<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
		<h6 class="collapse-header">About us</h6>
		<a class="collapse-item" href="{{ route('about') }}">About us</a>
		<a class="collapse-item" href="{{ route ('contact') }}">Contact us</a>
		</div>
	</div>
	</li>

</div>
        @show
		<div class="w3-container w3-padding-32" id="wrapper">
		<div class="container-fluid w3-border-bottom w3-border-light-grey w3-padding-custom" id="CssChange" name="CssChange">
	 		<h3 class="w3-medium w3-text-black"><span class="w3-opacity-min">Welcome<p class="w3-opacity-min" id="uname">
			@auth 
			 	{{ Auth::user()->username }}</p></span></h3>
			@else
			</p>
			</span>
			</h3>
			@endauth
	 		<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
        	<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<div class="w3-display-topmiddle">
				<h1 class="w3-small w3-text-grey"><span class="w3-opacity-min">Welcome to my site for my code!</span></h1>
			</div>
	 		</header>
			
	 <!-- Page content -->
	 <div class="w3-content w3-padding" style="max-width:1564px">
		
        @yield('Content')