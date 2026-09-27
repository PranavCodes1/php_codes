<!DOCTYPE html>
<html>
<body>

<h2>Fibonacci Series </h2>

<form method="post">
Enter number of terms:
    <input type="number" name="n" required>
    <input type="submit" name="submit" value="Generate">
</form>

<?php

function fibonacci($n)
{
	$a = 0;
	$b = 1;
	echo "<br>Fibonacci Series:<br>";
	for($i=1;$i<=$n;$i++)
	{
		
		echo $a ." ";
		$c = $a + $b;
		$a = $b;
		$b = $c;
	}

}

if (isset($_POST['submit']))
{
    $n = $_POST['n'];

    fibonacci($n);
}
?>

</body>
</html>
