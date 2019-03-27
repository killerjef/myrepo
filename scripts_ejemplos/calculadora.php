<html>
<head>	
<title>CALCULADORA BASICA</title>	
</head>
<body>
<form name="form1" action="calculadora.php" method="post">
<table border="0" align="center">
<tr>
<td><br></td>	
</tr>
<th	colspan="2" align="center">CALCULADORA BASICA</th>
<tr>
<td><br></td></tr>
<tr><td>Digite 1er numero: <font color="red"></font></td>
</tr>
<tr>
<td align="right"><input type="int" name="num1"></td>
</tr>		
<tr>		
<td>Digite 2do numero: <font color="red"></font></td>
</tr>
<tr>
<td align="right"><input type="text" name="num2" ></td>
</tr>
		

<tr>
<td>Seleccione una operacion: <font color="red"></font></td>
</tr>
<tr>
<td align="right"><select required name="oper" style="width:173px">
<option value="">  </option>
<option value="sum">Sumar</option>
<option value="res">Restar</option>
<option value="mul">Multiplicar</option>
<option value="div">Dividir</option>
<option value="pot">Potencia</option>
<option value="rad">Raiz cuadrada</option>
<option value="todo">Todas las operaciones</option>
</select></td>
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

//calculadora basica
  $n1= $_POST['num1'];
  $n2= $_POST['num2'];
  $op= $_POST['oper'];
  
 echo "numero 1: ". $n1;
 echo "<br>numero 2: ". $n2;
 echo "<br>operacion: ". $op;
  
 $suma=$n1+$n2;
 $resta=$n1-$n2;
 $mult=$n1*$n2;
 $div=$n1/$n2;

 switch($op){
 case"sum":
 echo "<br>la suma es: ". $suma;
 break;
 case"res":
 echo "<br>la resta es: ". $resta;
 break;
 case"mul":
 echo "<br>la multiplicacion es: ". $mult;
 break;
 case"div":
 echo "<br>la division es: ". $div;
 break;
 case"pot":
 echo "<br>la potencia es: ". pow($n1,$n2);
 break;
 case"rad":
 echo "<br>la la raiz es: ". pow($n1,1/$n2);
 break;
 case"todo":
 echo 
 "<br>la suma es: ". $suma.
 "<br>la resta es: ". $resta.
 "<br>la multiplicacion es: ". $mult.
 "<br>la division es: ". $div.
 "<br>la potencia es: ". pow($n1,$n2).
 "<br>la la raiz es: ". pow($n1,1/$n2);
 break;

 }
?>