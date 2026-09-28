<!DOCTYPE html>
<html>
<body>

<form method="post">
Enter a number:
<input type="number" name="n">

<input type="submit" name="submit" value="find factorial">
</form>


<?php

if(isset($_POST['submit']))
{
function factorial($n)
{
	if($n==0 || $n ==1)
	{
		return 1;
	}
	else
	{
		return $n * factorial($n -1);
	}
}

$num = $_POST['n'];

echo "Factorial of $num = ".factorial($num);
}
?>
</body>
</html>


