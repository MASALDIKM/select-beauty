<title>Login | Select Beauty</title>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="vendor/bootstrap/css/tiny-slider.css" rel="stylesheet">
<link href="vendor/bootstrap/css/style.css" rel="stylesheet">
<link href="vendor/bootstrap/css/lgn.css" rel="stylesheet">
<link href="vendor/bootstrap/css/dash.css" rel="stylesheet">
@section('css')
<body>
  @include('partials.navbar')
    
  <table class="table">
	<thead>
	  <tr>
		<th scope="col">#/th>
		<th scope="col">Jenis Make Up</th>
		<th scope="col">Deskripsi</th>
		<th scope="col">Gambar</th>
		<th scope="col">Action</th>
	  </tr>
	</thead>
	<tbody>
	  <tr>
		<th scope="row">1</th>
		<td>Mark</td>
		<td>Otto</td>
		<td>@mdo</td>
		<td>@mdo</td>
	  </tr>
	</tbody>
  </table>
    
  @include('partials.footer')
</body>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/bootstrap/js/tiny-slider.js"></script>
	<script src="vendor/bootstrap/js/custom.js"></script>
	<script src="vendor/bootstrap/js/lgn.js"></script>
</html>