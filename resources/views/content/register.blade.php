<title>Register | Select Beauty</title>

<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="vendor/bootstrap/css/tiny-slider.css" rel="stylesheet">
<link href="vendor/bootstrap/css/style.css" rel="stylesheet">
<link href="vendor/bootstrap/css/lgn.css" rel="stylesheet">
@section('css')
<body>
  @include('partials.navbar')
    <div class="login-page">
        <div class="form">
          <h4>REGISTER</h4>
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $item)
                <li>
                  {{$item}}
                </li>
              @endforeach
            </ul>
          </div>
          <form class="login-form" action="{{ route('register-proses') }}" method="POST">
            @csrf
            <input type="text" name="nama" value="{{old('nama')}}" placeholder="username"/>
            <input type="email" name="email" value="{{old('email')}}" placeholder="email"/>
            <input type="password" name="password" placeholder="password"/>
            <button>Register</button>
            <p class="message">Already <a href="/login">Have an Account?</a></p>
          </form>
        </div>
      </div>
      @include('partials.footer')
</body>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/bootstrap/js/tiny-slider.js"></script>
	<script src="vendor/bootstrap/js/custom.js"></script>
	<script src="vendor/bootstrap/js/lgn.js"></script>