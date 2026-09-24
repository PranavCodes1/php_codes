<!DOCTYPE html>
<html>
<body>

<h2> Prime Number </h2>

<form method="post">
Enter number:
<input type="number" name="n"><br><br>

<input type="submit" name="submit" value="check">

</form>

<?php

if(isset($_POST['submit']))
{
	$n = $_POST['n'];
	$flag = 0;

	if($n<2)
	{
		echo "$n is not prime number";
	}
	else
	{
		for($i=2;$i<=sqrt($n);$i++)
		{
			if($n % $i == 0)
			{
				$flag = 1;
				break;
			}
		}
		if($flag == 0)
		{
			echo "$n is a prime number";
		}
		else
		{
			echo"$n is not prime number";
		}
	}
}
?>
</body>
</html>

