<!DOCTYPE html>
<html>
<body>

<h2> Arithmetic Operations </h2>

<form method="post">

Enter first number:
<input type="number" name="n1"><br><br>
Enter second number:
<input type="number" name="n2"><br><br>

<input type="radio" name="op" value="mod">
Modulus

<input type="radio" name="op" value="pow">
Power

<input type="radio" name="op" value="sum">
Sum of n numbers

<input type="radio" name="op" value="fact">
factorial

<br><br>

<input type="submit" name="submit" value="Calculate">

</form>


<?php

if(isset($_POST['submit']))
{
	$a = $_POST['n1'];
	$b = $_POST['n2'];
	$op = $_POST['op'];


	switch($op)
	{
	case "mod":
		echo "Modulus = " .$a % $b;
		break;
	case "pow":
		echo "Power = " .pow($a,$b);
		break;
	case "sum":
		$sum = 0;
		for($i=1;$i<=$a;$i++)
		{
			$sum = $sum + $i;
		}
		echo "Sum of first $a numbers = $sum";
		break;
	case "fact":
		$fact=1;
		for($i=1;$i<=$b;$i++)
		{
			$fact = $fact * $i;
		}
		echo "Factorial of $b = $fact";
		break;
	}
}
?>

</body>
</html>


