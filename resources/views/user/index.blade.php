@extends('layouts.user')
@section('content')
    <!-- HEADER DENGAN SLIDER -->
		<div class="">
			<!-- page content -->
			<div id="page-content">
				<div class="banner">
					<div class="banner-images">
						<div id="slide" class="slide">
							<a href="#">
								<div class="img">
									<img src="{{ asset('user/pictures/banner/banner-1.jpg')}}"/>
								</div>
							</a>
							<a href="#">
								<div class="img">
									<img src="{{ asset('user/pictures/banner/banner-2.jpg')}}"/>
								</div>
							</a>
							<a href="#">
								<div class="img">
									<img src="{{ asset('user/pictures/banner/banner-3.jpg')}}"/>
								</div>
							</a>
							<a href="#">
								<div class="img">
									<img src="{{ asset('user/pictures/banner/banner-4.jpg')}}"/>
								</div>
							</a>
							<a href="#">
								<div class="img">
									<img src="{{ asset('user/pictures/banner/banner-5.jpg')}}"/>
								</div>
							</a>
							<div class="slide-bt"></div>
						</div>
					</div>
					<!-- <div class="change-banner-left">
						<span class="fa fa-chevron-left arrow"></span>
					</div>
					<div class="change-banner-right">
						<span class="fa fa-chevron-right arrow"></span>
					</div> -->
				</div>
			</div>
		</div>
		<!-- END HEADER DENGAN SLIDER -->






		<!-- BANNER IKLAN -->
		<div class=":: cs-tile-default">
			<div class="uk-container uk-text-center">
				<img src="{{ asset('user/pictures/banner-ads.jpg')}}" class="uk-width-1-1" uk-image>
			</div>
		</div>
		<!-- END BANNER IKLAN -->














		<!-- KONTEN NOVEL ROW -->
		<div class="uk-tile :: cs-tile-muted">
			<div class="uk-container-fluid">

				<div class="uk-container">
					<h2 class="uk-heading-bullet">Buku Pilihan</h2>
				</div>
				<br><br>


				<div class="uk-grid uk-grid-collapse uk-child-width-1-2@m uk-child-width-1-3@l uk-child-width-1-4@xl uk-child-width-1-6@xl">


					<!-- cover novel flip card -->
					<div>
						<div class=" :: cs-flip-card">
							<div id="buku-terpopuler-1" class=" :: cs-flip-card-inner">
								
								<!-- cover depan nover -->
								<div data-target="buku-terpopuler-1" class=" :: cs-flip-card-front">
									<div class="uk-padding-small uk-position-relative uk-height-1-1">
										<!-- aksesoris tombol baca sekarang -->
										<span class="uk-position-absolute uk-button uk-button-primary uk-width-1-2" style="top:1; left:1; right:0; bottom:21%; transform: skewY(-30deg);">read now</span>
										<!-- gambar cover novelnya -->
										<div style="background-image: url('{{ asset('user/pictures/cover/cover-3.jpeg')}};" class="uk-tile-muted uk-position-relative uk-height-1-1 uk-background-cover uk-box-shadow-large">
											<!-- detail dari novel cover depan -->
											<div class="uk-position-absolute uk-light uk-padding-small" style="background-color:rgba(0,0,0,0.7); top:1; left:0; right:0; bottom:0;">
												<h4 class="uk-margin-remove">Majo No Tabi - volume 1</h4>
												<p class="uk-margin-remove">Saya Lupa Namanya</p>
												<br><br>
											</div>
										</div>
										<!-- pin rating bagian kanan -->
										<div class="uk-position-absolute uk-badge uk-button-secondary" style="top:10%; left:1; right:0; bottom:1;">
											<span class="fa fa-star :: uk-text-muted"></span>
											<span>5+</span>
										</div>
										<!-- pin coin dan baru bagian kiri -->
										<div class="uk-position-absolute" style="top:10%; left:0; right:1; bottom:1;">
											<!-- pin baru -->
											<div class="uk-badge uk-display-block uk-margin-small-bottom">
												<span class="fa fa-shopping-cart"></span>
												<span class="uk-padding-small">baru</span>
											</div>
											<!-- pin coin -->
											<div class="uk-badge uk-display-block uk-margin-small-bottom">
												<span class="fa fa-coins"></span>
												<span class="uk-padding-small">Coin</span>
											</div>
										</div>

									</div>
								</div>

								<!-- cover belakang novel -->
								<div data-target="buku-terpopuler-1" class=" :: cs-flip-card-back">
									<div class="uk-padding-small uk-height-1-1">
										<div class="uk-tile-secondary uk-padding-small uk-height-1-1 uk-overflow-auto">
											<!-- isi cover belakang -->
											<h4>Sinopsis</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
								</div>
								
								<!-- container suka dan komen -->
								<div class="uk-padding-small uk-position-absolute uk-width-expand uk-text-muted" style="top:1; bottom:2%;">
									<div class="uk-grid uk-grid-collapse uk-child-width-1-2">
										<button class="uk-button uk-button-clear">
											<span class="fa fa-heart"></span>
											<span>200</span>
										</button>
										<a href="#" class="uk-button uk-button-clear uk-text-right">
											<span class="fa fa-comment"></span>
											<span>30</span>
										</a>
									</div>
								</div>

								<!-- tombol baca sekarang -->
								<button class="uk-button uk-button-secondary uk-position-absolute" style="top:1; left:1; right:0; bottom:32%;">
									baca sekarang
								</button>

							</div>
						</div>
					</div>
					<!-- end of novel filp card -->


					<!-- next novel cover -->



				</div>

				<!-- pagination on novel list -->
				<ul class="uk-pagination uk-flex-center" uk-margin>
					<li><a href="#"><span uk-pagination-previous></span></a></li>
					<li><a href="#">1</a></li>
					<li class="uk-disabled"><span>...</span></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li class="uk-active"><span>7</span></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<li><a href="#">10</a></li>
					<li class="uk-disabled"><span>...</span></li>
					<li><a href="#">20</a></li>
					<li><a href="#"><span uk-pagination-next></span></a></li>
				</ul>

				
			</div>
		</div>
		<!-- END NOVEL ROW -->











		<!-- KONTEN NOVEL ROW -->
		<div class="uk-tile :: cs-tile-muted">
			<div class="uk-container-fluid">

				<div class="uk-container">
					<h2 class="uk-heading-bullet">Novel Terpanas</h2>
				</div>
				<br><br>


				<div class="uk-grid uk-grid-collapse uk-child-width-1-2@m uk-child-width-1-3@l uk-child-width-1-4@xl uk-child-width-1-6@xl">


					<!-- cover novel flip card -->
					<div>
						<div class=" :: cs-flip-card">
							<div id="novel-1" class=" :: cs-flip-card-inner">
								
								<!-- cover depan nover -->
								<div data-target="novel-1" class=" :: cs-flip-card-front">
									<div class="uk-padding-small uk-position-relative uk-height-1-1">
										<!-- aksesoris tombol baca sekarang -->
										<span class="uk-position-absolute uk-button uk-button-primary uk-width-1-2" style="top:1; left:1; right:0; bottom:21%; transform: skewY(-30deg);">read now</span>
										<!-- gambar cover novelnya -->
										<div style="background-image: url('{{ asset('user/pictures/cover/cover-3.jpeg')}};" class="uk-tile-muted uk-position-relative uk-height-1-1 uk-background-cover uk-box-shadow-large">
											<!-- detail dari novel cover depan -->
											<div class="uk-position-absolute uk-light uk-padding-small" style="background-color:rgba(0,0,0,0.7); top:1; left:0; right:0; bottom:0;">
												<h4 class="uk-margin-remove">Majo No Tabi - volume 1</h4>
												<p class="uk-margin-remove">Saya Lupa Namanya</p>
												<br><br>
											</div>
										</div>
										<!-- pin rating bagian kanan -->
										<div class="uk-position-absolute uk-badge uk-button-secondary" style="top:10%; left:1; right:0; bottom:1;">
											<span class="fa fa-star :: uk-text-muted"></span>
											<span>5+</span>
										</div>
										<!-- pin coin dan baru bagian kiri -->
										<div class="uk-position-absolute" style="top:10%; left:0; right:1; bottom:1;">
											<!-- pin baru -->
											<div class="uk-badge uk-display-block uk-margin-small-bottom">
												<span class="fa fa-shopping-cart"></span>
												<span class="uk-padding-small">baru</span>
											</div>
											<!-- pin coin -->
											<div class="uk-badge uk-display-block uk-margin-small-bottom">
												<span class="fa fa-coins"></span>
												<span class="uk-padding-small">Coin</span>
											</div>
										</div>

									</div>
								</div>

								<!-- cover belakang novel -->
								<div data-target="novel-1" class=" :: cs-flip-card-back">
									<div class="uk-padding-small uk-height-1-1">
										<div class="uk-tile-secondary uk-padding-small uk-height-1-1 uk-overflow-auto">
											<!-- isi cover belakang -->
											<h4>Sinopsis</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
								</div>
								
								<!-- container suka dan komen -->
								<div class="uk-padding-small uk-position-absolute uk-width-expand uk-text-muted" style="top:1; bottom:2%;">
									<div class="uk-grid uk-grid-collapse uk-child-width-1-2">
										<button class="uk-button uk-button-clear">
											<span class="fa fa-heart"></span>
											<span>200</span>
										</button>
										<a href="#" class="uk-button uk-button-clear uk-text-right">
											<span class="fa fa-comment"></span>
											<span>30</span>
										</a>
									</div>
								</div>

								<!-- tombol baca sekarang -->
								<button class="uk-button uk-button-secondary uk-position-absolute" style="top:1; left:1; right:0; bottom:32%;">
									baca sekarang
								</button>

							</div>
						</div>
					</div>
					<!-- end of novel filp card -->
					
					


					<!-- next novel cover -->



				</div>
				
				<!-- pagination on novel list -->
				<ul class="uk-pagination uk-flex-center" uk-margin>
					<li><a href="#"><span uk-pagination-previous></span></a></li>
					<li><a href="#">1</a></li>
					<li class="uk-disabled"><span>...</span></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li class="uk-active"><span>7</span></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<li><a href="#">10</a></li>
					<li class="uk-disabled"><span>...</span></li>
					<li><a href="#">20</a></li>
					<li><a href="#"><span uk-pagination-next></span></a></li>
				</ul>


			</div>
		</div>
		<!-- END NOVEL ROW -->





		<!-- KONTEN UNTUK ANDROID APPS -->
		<div class=":: cs-tile-default">
			<img src="{{ asset('user/pictures/banner-android-apps.jpg')}}" uk-image>
		</div>
		<!-- END KONTEN ANDROID APPS -->
@endsection