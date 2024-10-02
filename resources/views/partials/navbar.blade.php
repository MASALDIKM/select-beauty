<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="/"><img src="vendor/bootstrap/images/logosb.png" alt="" class="logo"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item " class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li><a class="nav-link" href="/shop">Shop</a></li>
                <li ><a class="nav-link" href="/about">About us</a></li>
                <li><a class="nav-link" href="/services">Services</a></li>
                <!-- <li><a class="nav-link" href="blog.html">Blog</a></li> -->
                <li><a class="nav-link" href="/contact">Contact us</a></li>
                @if (session('alert'))
                    <script>
                        alert('{{ session('alert') }}');
                    </script>
                @endif
                <li><a class="nav-link" href="/dashboard">Dashboard</a></li>
                {{-- <li><a class="" href="">. Auth .</a></li> --}}
                {{-- <li><a class="nav-link" href="/login"><img src="vendor/bootstrap/images/user.svg"></a></li> --}} 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" >
                        <img src="vendor/bootstrap/images/user.svg">
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="nav-link"  href="/login">Log In</a></li>
                      <li><a class="nav-link"  href="/logout">log Out</a></li>
                      <li><a class="nav-link"  href="/register">Register</a></li>
                    </ul>
                </li>
            </ul>

            {{-- <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="/login"><img src="vendor/bootstrap/images/user.svg"></a></li>
                <!-- <li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li> -->
            </ul> --}}
        </div>
    </div>
        
</nav>