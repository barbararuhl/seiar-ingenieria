<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	  <link rel="stylesheet" href="{{ URL::asset('../../public/css/home.css') }}" />
	  <link rel="icon" type="image/png" href="/img/logo-convinado.png">
	  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="/css/estilos.css">

</head>
<body class="fondo-home">

@include('nav')

<div class="texto-home">
	
	<h1>Las tecnologías</h1>
	<h3>plantean nuevos desafíos</h3>
	<h4>En SEIAR comprendemos las necesidades
	<br> y brindamos soluciones integrales a nuestros clientes.</h4>
	<br>

	<button type="button" class="btn btn-warning">NUESTROS CLIENTES</button>
</div>




@include('footer')

</body>
</html>