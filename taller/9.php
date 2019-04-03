
<?php

$par=0;
$impar=0;
$mimpar=0;
$mpar=0;
	
for ($i = 1; $i <= 10; $i++) {
		
$paso=rand(-1000,1000);
echo $paso."<br>";
if($paso>=0){
if($paso%2==0){
$par++;
}else{$impar++;
}
}else{
if($paso%2==0){
$mpar++;
}else{
$mimpar++;
}
}
}
echo "<br>Numero de impares negativos: ".$mimpar,"</center>";
echo "<br>Numero de impares positivos: ".$impar,"</center>";
echo "<center><br>Numero de pares positivos: ".$par;
echo "<center><br>Numero de pares negativos: ".$mpar;
	

?>