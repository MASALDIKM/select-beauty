@extends('layouts.app')

@section('title', "About | Select Beauty")

@section('page')

	
		<body>

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Hai! kami Select Beauty</h1>
								<p class="mb-4">Select Beauty adalah penyedia layanan dan produk kecantikan terkemuka yang berfokus pada kepuasan pelanggan. Kami menyediakan berbagai pilihan jenis make up serta layanan MUA profesional yang siap memberikan hasil terbaik.</p>
								<p><a href="shop.html" class="btn btn-light">Explore</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="vendor/bootstrap/images/removebg.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Kenapa Harus Di Web kami</h2>
						<p>Kami menawarkan layanan terbaik dengan berbagai keunggulan yang membuat Anda percaya untuk memilih kami. Berikut adalah beberapa alasan kenapa kami menjadi pilihan tepat:</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="vendor/bootstrap/images/icons8-paint-brush-46.png" alt="Image" class="imf-fluid">
									</div>
									<h3>MUA Yang berpengalangan</h3>
									<p>Kami memiliki tim MUA (Make Up Artist) profesional dan berpengalaman yang akan memastikan hasil terbaik untuk setiap acara.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="vendor/bootstrap/images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Harga Yang Ergonomis</h3>
									<p>Kami menawarkan harga yang kompetitif dan sesuai dengan kualitas layanan yang kami berikan, sehingga Anda mendapatkan nilai lebih.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="vendor/bootstrap/images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Make Up Yang Berkualitas</h3>
									<p>Kami hanya menggunakan produk make up berkualitas tinggi yang aman dan memberikan hasil maksimal untuk penampilan Anda.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="vendor/bootstrap/images/return.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Respon Cepat</h3>
									<p>Layanan pelanggan kami selalu siap membantu Anda dengan respon yang cepat dan solusi yang tepat.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="vendor/bootstrap/images/testing.jpeg " alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start Team Section -->
		<div class="untree_co-section">
			<div class="container">

				<div class="row mb-5">
					<div class="col-lg-5 mx-auto text-center">
						<h2 class="section-title">Our Team</h2>
					</div>
				</div>

				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="vendor/bootstrap/images/org1.png" class="img-fluid mb-5">
						<h3 clas><a href="https://www.instagram.com/naomifraa"><span class="">Naomi</span> Fransiska</a></h3>
            <span class="d-block position mb-4">CEO, Hustler.</span>
            <p>Do the best for everyday.</p>
            
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="vendor/bootstrap/images/org2.png" class="img-fluid mb-5">

						<h3 clas><a href="https://www.instagram.com/kharismckt"><span class="">Masaldi</span> Kharisma M</a></h3>
            <span class="d-block position mb-4">Hacker.</span>
            <p>Life is a journey so enjoy every step.</p>
            
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="vendor/bootstrap/images/org3.png" class="img-fluid mb-5">
						<h3 clas><a href="https://www.instagram.com/fikranmhdnn"><span class="">Fikran</span> Mahdan Nuha</a></h3>
            <span class="d-block position mb-4">Hacker.</span>
            <p>Happiness is not by chance, but by choice.</p>
					</div> 
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="vendor/bootstrap/images/org4.png" class="img-fluid mb-5">

						<h3 clas><a href="https://www.instagram.com/_fusysil27"><span class="">Fussy</span> Silvia Taryadi</a></h3>
            <span class="d-block position mb-4">Hipster.</span>
            <p>You can get it if you really want.</p>

					</div> 
					<!-- End Column 4 -->

					

				</div>
			</div>
		</div>
		<!-- End Team Section -->
		

		{{-- <div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="testimonial-slider-wrap text-center">
		
					<div id="testimonial-nav">
						<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
						<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
					</div>
							
					@foreach ($testimonis as $d)
					<div class="testimonial-slider">
						<div class="item">
							<div class="row justify-content-center">
								<div class="col-lg-8 mx-auto">
									<div class="testimonial-block text-center">
										<blockquote class="mb-5">
											<p>{{ $d->komentar }}</p>
										</blockquote>
				
										<div class="author-info">
											<div class="author-pic">
												<img src="vendor/bootstrap/images/person-1.png" alt="Maria Jones" class="img-fluid">
											</div>
											<h3 class="font-weight-bold">{{ $d->nama }}</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach 
					
		
				</div>
			</div>
		</div> --}}
		</body>


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	

@endsection
