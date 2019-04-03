
<?php
echo"<center>Numeros</center><br>";
echo"<table align='center'> <tr>";
	
for ($i = 1; $i <= 10; $i++) {
		
if($i%2==0){
echo "<td bgcolor='white' align='center'>".$i."</td>";
}else{
echo "<td bgcolor='yellow' align='center'>".$i."</td>";
}	
}
echo"</table> </tr>";	
?>