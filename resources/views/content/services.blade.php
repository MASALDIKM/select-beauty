@extends('layouts.app')

@section('title', "Service | Select Beauty")

@section('page')

	<body>


		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Layanan Kami</h1>
								<p class="mb-4">Kami menyediakan berbagai layanan yang dirancang untuk memenuhi kebutuhan kecantikan Anda. Dengan tim profesional dan produk berkualitas, kami memastikan pengalaman terbaik dalam setiap layanan yang kami tawarkan.</p>
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
				
				
				<div class="row my-5">
					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<div class="feature">
							<div class="icon">
								<img src="vendor/bootstrap/images/icons8-paint-brush-46.png" alt="Image" class="imf-fluid">							</div>
							<h3><h3>MUA Yang Berpengalangan</h3></h3>
							<p>Kami memiliki tim MUA (Make Up Artist) profesional dan berpengalaman yang akan memastikan hasil terbaik untuk setiap acara.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<div class="feature">
							<div class="icon">
								<img src="vendor/bootstrap/images/bag.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Harga Yang Ergonomis</h3>
							<p>Kami menawarkan harga yang kompetitif dan sesuai dengan kualitas layanan yang kami berikan, sehingga Anda mendapatkan nilai lebih.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<div class="feature">
							<div class="icon">
								<img src="vendor/bootstrap/images/support.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Make Up Yang Berkualitas</h3>
							<p>Kami hanya menggunakan produk make up berkualitas tinggi yang aman dan memberikan hasil maksimal untuk penampilan Anda.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
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
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row"> 

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">MUA Pilihan Terbaik yang Menemani Kamu</h2>
						<p>Temukan MUA terbaik yang siap menemani kamu di setiap momen spesial. Kami memastikan layanan make up profesional yang sesuai dengan keinginan dan kebutuhanmu, memberikan hasil yang sempurna untuk setiap kesempatan.</p>
						<p><a href="/shop" class="btn">Explore</a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="/listProduct">
							<img src="vendor/bootstrap/images/product1.jpeg" class="img-fluid product-thumbnail lingkaran">
							<h3 class="product-title">MakeUp Graduation.</h3>
							<strong class="product-price">Rp.150.000</strong>

							<!-- <span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span> -->
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="listProduct.html">
							<img src="vendor/bootstrap/images/product2.jpeg" class="img-fluid product-thumbnail lingkaran">
							<h3 class="product-title">MakeUp Wedding.</h3>
							<strong class="product-price">Rp.400.000</strong>

							<!-- <span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span> -->
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="listProduct.html">
							<img src="vendor/bootstrap/images/product3.jpeg" class="img-fluid product-thumbnail lingkaran">
							<h3 class="product-title">MakeUp Pesta.</h3>
							<strong class="product-price">Rp.100.000</strong>

							<!-- <span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span> -->
						</a>
					</div>
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

@endsection
