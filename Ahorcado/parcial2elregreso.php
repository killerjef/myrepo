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
				font-size:3vw;
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
					<li class="active"><a href="parcial2elregreso.php"><p2>Home</p2></a></li>
					<li><a href="ingresapalabra.php"><p2>Ingresar palabra</p2></a></li>
				</ul>
			</div>
		</nav>
		<p>
			¿Como se juega?
		</p>
		<p2>
		Usando una fila de guiones, se representa la palabra a adivinar, dando el número de letras, Si el jugador adivinador 
		<br>sugiere una letra que aparece en la palabra, el otro jugador la escribe en todas sus posiciones
		<br>correctas. Si la letra sugerida no esta en la palabra, el otro jugador añade una parte al hombre
		<br>ahorcado como una marca de conteo. El juego termina cuando:
		<br>  *El jugador adivinador completa la palabra
		<br>  *El otro jugador completa el diagrama
		</p2>
	</body>

</html>

<?php



?>