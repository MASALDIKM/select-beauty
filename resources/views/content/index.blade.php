@extends('layouts.app')

@section('title', "Select Beauty")

@section('page')
	<body>
		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Membantu Temukan MUA yang Sesuai</h1>
								<p class="mb-4">Menyempurnakan kecantikan, satu sapuan <br> kuas pada satu waktu.</p>
								<p><a href="/shop" class="btn btn-light">Explore</a></p>
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

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="vendor/bootstrap/images/testing.jpeg" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="vendor/bootstrap/images/testing2.jpeg" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="vendor/bootstrap/images/testing2.jpeg" alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">Kami membantu anda menemukan MUA yang tepat</h2>
							<p>Kami membantu Anda menemukan produk make up yang tepat dan sesuai dengan kebutuhan Anda. Dengan berbagai pilihan berkualitas, kami memastikan Anda tampil sempurna di setiap kesempatan.</p>
						<ul class="list-unstyled custom-list my-4">
							<li>Produk make up pilihan terbaik untuk semua jenis kulit yang anda miliki.</li>
							<li>Tim ahli yang siap memberikan rekomendasi produk sesuai kebutuhan.</li>
							<li>Beragam warna dan tekstur untuk menciptakan tampilan yang diinginkan.</li>
							<li>Produk dengan kualitas terjamin dan harga yang terjangkau.</li>  
						</ul>
						<p><a herf="#" class="btn">Explore</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End We Help Section -->

		<!-- Start Popular Product -->
		{{-- <div class="popular-product">
			<div class="container">
				<div class="row">

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="vendor/bootstrap/images/product4.jpeg" alt="Image" class="img-fluid lingkaran2">
							</div>
							<div class="pt-3">
								<h3>Nordic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="vendor/bootstrap/images/product5.jpeg" alt="Image" class="img-fluid lingkaran2">
							</div>
							<div class="pt-3">
								<h3>Kruzo Aero Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="vendor/bootstrap/images/product6.jpeg" alt="Image" class="img-fluid lingkaran2">
							</div>
							<div class="pt-3">
								<h3>Ergonomic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div> --}}
		<!-- End Popular Product -->
		
		{{-- <div class="testimonial-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title">Testimonials</h2>
					</div>
				</div>
		
				<div class="row justify-content-center">
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
				</div>
			</div>
		</div> --}}


		
	</body>

@endsection