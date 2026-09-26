<!DOCTYPE html>
<html>
<body>
<h2>Power of number</h2>


<form method="post">

Enter base:
<input type="number" name="a"><br><br>

Enter exponent:
<input type="number" name="b"><br><br>

<input type="submit" name="submit" value="Calculate">

</form>

<?php

function power($a,$b)
{
	$result = 1;
	for($i=1;$i<=$b;$i++)
	{
	$result = $result * $a;
	}
	return $result;
}

if(isset($_POST['submit']))
{
	$a = $_POST['a'];
	$b = $_POST['b'];

	echo "Power= ". power($a,$b);
}
?>
</body>
</html>
