<!DOCTYPE html>
<html>
<body>

<h2>Factorial using Recursion</h2>

<form method="post">
    Enter a number:
    <input type="number" name="n">
    <input type="submit" name="submit" value="Find Factorial">
</form>

<?php

function factorial($n)
{
	if($n == 1)
	{
		return 1;
	}
	else
	{
		return $n * factorial($n-1);
	}
};

if (isset($_POST['submit']))
{
    $n = $_POST['n'];

    echo "Factorial = " . factorial($n);
}
?>

</body>
</html>
