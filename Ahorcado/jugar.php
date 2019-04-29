<html>

	<head>
		<title>Ahorcado</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
		<style>
			body {
				background-color:#FFCC33;
			}
			h1,p{
				font-family: 'Architects Daughter';
				font-size:5vw;
			}p2{
				font-family: 'Architects Daughter';
				font-size:1.5vw;
			}
		</style>
	</head>
	
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand"><p2>Ahorcado</p2></a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="parcial2elregreso.php"><p2>Home</p2></a></li>
					<li><a href="ingresapalabra.php"><p2>Ingresar palabra</p2></a></li>
				</ul>
			</div>
		</nav>
		<table border='0'align='center'>
		
		
<?php

	$tamaño = $_GET['tamaño'];
	$tamamit = $tamaño/2;
	$palabra = $_GET['palabra'];
	$dificultad = $_GET['dificultad'];
	$arraypal=str_split($palabra);
	$vidas;
	$arrayacierto;
	$estado=true;
	$fallas=1;
	$aciertos=0;
	//$letra = $_POST['letra'];
	
	switch ($dificultad){
		case "principiante":
			$vidas=10;
			break;
		case "intermedio":
			$vidas=6;
			break;
		case "avanzado":
			$vidas=4;
			break;
	}
	
		echo"<tr>
				<td colspan=$tamaño align='center'>
					<img class='img-responsive' src='images/$fallas.png' style='width:45%'>
				</td>
			</tr>
			<tr>";
		for($i = 0 ; $i < $tamaño ; $i++){
			$arrayacierto[$i]="_";
			echo "<td align='center'><p>".$arrayacierto[$i]."</td></p>";
		}
		echo"</tr>";
		echo"<tr><td colspan=$tamaño>
			<div class='form-group'>
				<label for='pal'><p2>Ingrese su letra:</p2></label>
				<input name='letra'type='text' class='form-control' required pattern='[a-z]+' maxlength='1'>
			</div></td></tr>";
		echo"<tr><td colspan=$tamaño>
			<button type='submit' class='btn btn-default btn-lg' ><p2>Ingresar letra</p2></button>
			</td></tr>";
		echo"<tr><td colspan=$tamaño id='letr'><p2>Dificultad: ".$dificultad."</p2></td></tr>
			<tr><td colspan=$tamaño align='left'><p2>Largo de la palabra: ".$tamaño." letras</p2></td></tr>
			<tr><td colspan=$tamaño><p2>Fallos: ".($fallas-1)."</p2></td></tr>
			<tr><td colspan=$tamaño align='left'><p2>Aciertos: ".$aciertos."</p2></td></tr>
			<tr><td colspan=$tamaño align='left'><p2>".$vidas." vidas restantes</p2></td></tr>";
?>
	</body>

</html>