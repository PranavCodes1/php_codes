<!DOCTYPE html>
<html>
<body>
<h2>Number Operations</h2>

<form method="post">

Enter first number:
<input type="number" name="n1"><br><br>

Enter Second number:
<input type="number" name="n2"><br><br>

<input type="radio" name="op" value="perfect">
Perfect

<input type="radio" name="op" value="square">
Square

<input type="radio" name="op" value="sum">
Sum of N numbers

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
	case "perfect":
		$sum =0;
		for($i=1;$i<=$a/2;$i++)
		{
			if($a % $i == 0)
			{
				$sum = $sum + $i;
			}
		}
		if($a>1 && $sum == $a)
		{
			echo "$a is a perfect number";
		}
		else
		{
			echo "$a is not a perfect number";
		}
		break;
	case "square":
		echo "$quare of second number $b = " .($b * $b);
		break;

	case "sum":
		$sum = 0;
		for($i=1;$i<=$a;$i++)
		{
			$sum = $sum + $i;
			
		}
		echo "Sum of first $a numbers= $sum";

		break;
	}
}
?>
</body>
</html>

