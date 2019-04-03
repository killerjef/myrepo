
<?php
$impar=0;
$par=0;
for ($i = 1; $i <= 10; $i++) {
$paso=rand();
echo $paso."<br>";
if($paso%2==0){
$par++;}else{
$impar++;
}
}
echo "<br>pares: ".$par;
echo "<br>impares: ".$impar;
	
?>