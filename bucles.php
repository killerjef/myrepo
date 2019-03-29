<html>
<head>	
<title>serie</title>	
</head>
<body>
<form name="form1" action="bucles.php" method="post">
<table border="0" align="center">
<tr>
<td><br></td>	
</tr>
<th	colspan="2" align="center">SERIE</th>
<tr>
<td><br></td></tr>
<tr><td>Digite numero: <font color="red"></font></td>
</tr>
<tr>
<td align="right"><input type="int" name="num1"></td>
</tr>		

<tr>
<td><br></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="calcular" align="center"></td>
</tr>

</table>
</form>
</body>
</html>


<?php
//generar lista de numeros del 1 al 10
//scrip con while, for y do while
$n1= $_POST['num1'];
echo "<table border =1><tr>";
echo "<b>Lista de numeros con while</b>";
echo "<table border =1><tr>";
$i=1;

while ($i<=$n1)
{
	if ($i%2==0){
		echo "<td bgcolor='YELLOW'>".$i."</td>";
	
		
	}else{
		echo "<td bgcolor='RED'>".$i."</td>";
	
	}
	$i++; //$i=$i+1
	}
	echo "</table></tr>";
	
echo "<b>serie</b>";
echo "<table border =1><tr>";
$i=1;

while ($i<=$n1)
{
	if ($i%2==0){
		echo "<td>".$i."</td>";
	
		
	}else{
		echo "<td>".$i."</td>";
	
	}
	$i++; //$i=$i+1
	}
	echo "</table></tr>";
	
echo "<table border =1><tr>";
$i=$n1;

while ($i>=1)
{
	if ($i%2==0){
		echo "<td>".$i."</td>";
	
		
	}else{
		echo "<td>".$i."</td>";
	
	}
	$i--; //$i=$i+1
	}
	echo "</table></tr>";
		
echo "</table></tr>";	
	
?>