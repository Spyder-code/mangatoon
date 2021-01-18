<!DOCTYPE html>
<html>
	<head>

		<!-- set responsive viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- load mangatoon banner scroll -->
		<link rel="stylesheet" type="text/css" href="{{ asset('user/banner-scroll.css')}}">
		<!-- load icons from font awesome -->
		<link rel="stylesheet" type="text/css" href="{{ asset('user/font-awesome/css/all.min.css')}}">
		<!-- load uikits -->
		<link rel="stylesheet" type="text/css" href="{{ asset('user/uikit/css/uikit.min.css')}}">
		<!-- load root override css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('user/index.css')}}">
		<title>Baca Buku Online</title>

	</head>
	<body class=":: __costum">
		




		<!-- NAVIGASI MENU BAR -->
		<!-- navbar untuk mobile/phone -->
		<div id="navbar-mobile" uk-offcanvas="mode: reveal; overlay: true;">
			<div class="uk-offcanvas-bar :: ">
				<img src="{{ asset('user/pictures/BBO-logo-name.png')}}" width="150px">
				<hr>
				<form class="uk-flex">
					<input class="uk-input uk-form-width-expand" type="text" placeholder="Cari buku">
					<button class="uk-button uk-button-default">
						<span class="fa fa-search :: uk-text-muted"></span>
					</button>
				</form>
				<hr>
				<ul class="uk-nav uk-nav-default">
					<li><a class="uk-link-heading" href="#">Home</a></li>
					<li><a class="uk-link-heading" href="#">Ranking</a></li>
					<li><a class="uk-link-heading" href="#">Novel</a></li>
					<li><a class="uk-link-heading" href="#">Mangga</a></li>
					{{-- <li>
						<a class="uk-link-heading" href="#">Novel</a>
						<div uk-dropdown>
							<ul class="uk-nav">
								<li><a class="uk-link-heading" href="#">Novel 1</a></li>
								<li><a class="uk-link-heading" href="#">Novel 2</a></li>
								<li><a class="uk-link-heading" href="#">Novel 3</a></li>
							</ul>
						</div>
					</li>
					<li><a class="uk-link-heading" href="#">Cerpen</a></li>
					<li><a class="uk-link-heading" href="#">Contribute</a></li>
					<li><a class="uk-link-heading" href="#">Purchase Coin</a></li>
					<li class="uk-nav-divider"></li>
					<li><a class="uk-link-heading" href="#">Profil</a></li>
					<li><a class="uk-link-heading" href="#">Isi Ulang</a></li>
					<li><a class="uk-link-heading" href="#">Kado Hadiah</a></li> --}}
					<li class="uk-nav-divider"><br></li>
					<li><a class="uk-link-heading uk-button uk-button-default" href="{{ route('login') }}">Masuk</a></li>
					<li><br></li>
					<li><a class="uk-link-heading uk-button uk-button-default" href="{{ url('daftar') }}">Daftar</a></li>
					
				</ul>
				<hr>
				<br>
				<form>
					<button class="uk-button uk-button-primary uk-width-expand">
						Mulai Sekarang
					</button>
				</form>
			</div>
		</div>
		<!-- navba untuk desktop/pc -->
		<div class="uk-container-fluid uk-padding-small uk-padding-remove-vertical uk-box-shadow-small :: cs-tile-default"  uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
			<div class="uk-navbar uk-flex-between uk-container-fluid">
				<div class="uk-navbar-left uk-visible@s">
					<a class="uk-navbar-item uk-logo" href="{{ url('/') }}">
						<img src="{{ asset('user/pictures/BBO-logo-name.png')}}" width="120px" height="120px">
					</a>
					<ul class="uk-navbar-nav">
						<li><a class="uk-link-heading" href="{{ url('/') }}">Rumah</a></li>
						<li><a class="uk-link-heading" href="#">Rangking</a></li>
						{{-- <li>
							<a class="uk-link-heading" href="#">Novel</a>
							<div uk-dropdown>
								<ul class="uk-nav">
									<li><a class="uk-link-heading" href="#">Novel 1</a></li>
									<li><a class="uk-link-heading" href="#">Novel 2</a></li>
									<li><a class="uk-link-heading" href="#">Novel 3</a></li>
								</ul>
							</div>
						</li> --}}
						<li><a class="uk-link-heading" href="#">Novel</a></li>
						<li><a class="uk-link-heading" href="#">Mangga</a></li>
						{{-- <li><a class="uk-link-heading" href="#">Beli Coin</a></li> --}}
					</ul>
				</div>
				<div class="uk-navbar-left uk-visible@l">
					<ul class="uk-navbar-nav">
						<li><a class="uk-link-heading" href="{{ url('login') }}">Masuk</a></li>
						<li><a class="uk-link-heading" href="{{ url('daftar') }}">Daftar</a></li>
						{{-- <li>
							<a class="uk-link-heading" type="button" href="#">Bahasa</a>
							<div uk-dropdown>
								<ul class="uk-nav">
									<li><a class="uk-link-heading" href="#">English</a></li>
									<li><a class="uk-link-heading" href="#">Indonesian</a></li>
									<li><a class="uk-link-heading" href="#">Japanese</a></li>
								</ul>
							</div>
						</li> --}}
					</ul>
					<div class="uk-navbar-item">
						<form class="uk-visible-toggle">
							<input class="uk-hidden-hover uk-input uk-form-width-small" type="text" placeholder="Cari Buku">
							<button class="uk-button uk-button-default">
								<span class="fa fa-search"></span>
							</button>
						</form>
					</div>
					<div class="uk-navba-item">
						<form>
							<button class="uk-button uk-button-primary uk-box-shadow-small">
								Buat Karya Sekarang
							</button>
						</form>
					</div>
				</div>
				<button class="uk-navbar-toggle uk-hidden@l" uk-toggle="#navbar-mobile" uk-navbar-toggle-icon></button>
				<div class="uk-hidden@s">
					<a class="uk-navbar-item uk-logo">
						<img src="{{ asset('user/pictures/BBO-logo-name.png')}}" width="120px" height="120px">
					</a>
				</div>
				<div class="uk-hidden@s uk-flex uk-flex-middle">
					<a class="uk-link-heading" type="button" href="#">Bahasa</a>
					<div uk-dropdown>
						<ul class="uk-nav">
							<li><a class="uk-link-heading" href="#">English</a></li>
							<li><a class="uk-link-heading" href="#">Indonesian</a></li>
							<li><a class="uk-link-heading" href="#">Japanese</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- END NAVIGASI MENU BAR -->

        @yield('content')

		<!-- CONTENT ARTICLE -->
		<div class="uk-tile :: cs-tile-secondary">
			<div class="uk-container">

				<div class="uk-grid uk-grid-collapse">
					<div class="uk-width-1-3@l uk-width-1-3@s">
						<img src="{{ asset('user/pictures/BBO-logo-name.png')}}" width="200px">
						<p class="">
							<span class="fa fa-envelope"></span>
							<span class="uk-text-muted uk-padding-small uk-padding-remove-vertical">support@bacabukuonline.com</span>
						</p>
						<p class="">
							<span class="fa fa-phone"></span>
							<span class="uk-text-muted uk-padding-small uk-padding-remove-vertical">+62 111111111</span>
						</p>
						<br>
					</div>
					<div class="uk-width-expand@s uk-grid uk-child-width-1-4@s uk-flex-right">
						<div class="">
							<h4 class="uk-text-primary">Halaman</h4>
							<ul class="uk-list">
								<li><a class="uk-link-heading" href="#">Rumah</a></li>
								<li><a class="uk-link-heading" href="#">Rangking</a></li>
								<li><a class="uk-link-heading" href="#">Genre</a></li>
								<li><a class="uk-link-heading" href="#">Novel</a></li>
								<li><a class="uk-link-heading" href="#">Kontribusi</a></li>
								<li><a class="uk-link-heading" href="#">Beli Coin</a></li>
							</ul>
						</div>
						<div class="">
							<h4 class="uk-text-primary">Heading</h4>
							<ul class="uk-list">
								<li><a href="#">listing 1</a></li>
								<li><a href="#">listing 2</a></li>
								<li><a href="#">listing 3</a></li>
								<li><a href="#">listing 4</a></li>
								<li><a href="#">listing 5</a></li>
							</ul>
						</div>
						<div class="">
							<h4 class="uk-text-primary">Heading</h4>
							<ul class="uk-list">
								<li><a href="#">listing 1</a></li>
								<li><a href="#">listing 2</a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- END KONTENT ARTICLE -->





		<!-- FOOTER COPYRIGHT -->
		<div class=":: cs-tile-secondary">
			<div class="uk-tile-xsmall" style="background-color: rgba(0,0,0,0.3);">
				<div class="uk-container">
					<div class="uk-grid uk-child-width-1-2@s">
						<div class="uk-text-left">
							<h6>Copyright &copy; 2020, <a href="#" class="uk-link-heading uk-text-primary">Baca Buku Online</a> All Right Reserved</h6>
						</div>
						<div class="uk-text-right">
							<small class="uk-text-muted">Build With <span class="fa fa-heart"></span> By People Trash Indonesia</small>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END FOOTER COPYRIGHT -->
















		<!-- load banner scroll -->
		<script type="text/javascript" src="{{ asset('user/jquery-1.11.1.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('user/banner-scroll.js')}}"></script>
		

		<!-- load font-awesome -->
		<script type="text/javascript" src="{{ asset('user/font-awesome/js/all.min.js')}}"></script>

		
		<!-- load uikit -->
		<script type="text/javascript" src="{{ asset('user/uikit/js/uikit.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('user/uikit/js/uikit-icons.min.js')}}"></script>

		
		<!-- load root override js -->
		<script type="text/javascript" src="{{ asset('user/index.js')}}"></script>
		
	</body>
</html>