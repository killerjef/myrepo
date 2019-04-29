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
				font-size:2vw;
			}
			p2{
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
					<li class="active"><a href="ingresapalabra.php"><p2>Ingresar palabra</p2></a></li>
				</ul>
			</div>
		</nav>
		<table align='center'>
			<form name="form1" action="ingresapalabra.php" method="POST">
			<tr>
				<td>
					<div class="form-group">
						<label for="tam"><p>Ingrese el numero de caracteres de su palabra:</p></label>
						<input name="tamaño" type="number" class="form-control" id="usr" required min="1" pattern="^[0-9]+" max="10">
					</div>
				</td>
			</tr>	
			<tr>
				<td>
					<div class="form-group">
						<label for="pal"><p>Ingrese su palabra:</p></label>
						<input name="palabra"type="text" class="form-control" id="usr" required pattern="[a-z]+">
					</div>
				</td>
			</tr>
			</tr>
			<tr>
				<td>
					<label for="dific"><p>Seleccione la dificultad:</p></label>
				</td>
			</tr>
			<tr>
				<td>
					<div class="radio">
						<label><input type="radio" name="dificult" checked value="principiante" ><p2>Principiante(10 vidas)</p2></label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dificult" value="intermedio"><p2>Intermedio(6 vidas)</p2></label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dificult" value="avanzado"><p2>Avanzado(4 vidas)</p2></label>
					</div>
				</td>
			</tr>
			<tr>
				<td align='center'>
					<button type="submit" class="btn btn-default"><p>Aceptar palabra</p></button>
				</td>
			</tr>
		</table>
		</form>
	</body>

</html>

<?php
	
	if(($palabra = $_POST['palabra'])!= null){
		$tamaño = $_POST['tamaño'];
		$palabra = $_POST['palabra'];
		$dificultad = $_POST['dificult'];
		$arraypal=str_split($palabra);
		
		if(sizeof($arraypal)==$tamaño){
			echo"<br><center><div class='alert alert-success'>
				<p2>Palabra registrada, <strong><a href='jugar.php?tamaño=$tamaño&palabra=$palabra&dificultad=$dificultad'>presiona aqui para jugar</a></strong></p2>
				</div></center>";
		}else{
			echo"<br><center><div class='alert alert-danger'>
				<p2>El tamaño de la palabra no coincide con el numero de caracteres<p2>
				</div></center>";
		}
	}
?>