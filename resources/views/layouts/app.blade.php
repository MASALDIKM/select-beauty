<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="SelectBeauty">
    <link rel="shortcut icon" href="vendor/bootstrap/images/logosb.png">

    <meta name="description" content="Select Beauty Membantu Menemukan MUA Terbaik dan Memberikan Pengalaman Luar Biasa." />
    <meta name="keywords" content="mua, makeup, salon, select beauty, makeup artist"/>
    <title>@yield('title', '')</title>
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="/vendor/bootstrap/css/tiny-slider.css" rel="stylesheet">
	<link href="/vendor/bootstrap/css/style.css" rel="stylesheet">
	<link href="/vendor/bootstrap/css/lgn.css" rel="stylesheet">
    @yield('css')
</head>
<body>
    <!-- Navbar -->
    @include('partials.navbar')
    <main>
    @yield('page')
    
    
    @include('partials.testi')
    @include('partials.komen')
    </main>
    <!-- Footer -->
    @include('partials.footer')

	<script src="/vendor/bootstrap/js/tiny-slider.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/vendor/bootstrap/js/custom.js"></script>
	{{-- <script src="/vendor/bootstrap/js/lgn.js"></script> --}}
</body>

</html>