<!DOCTYPE html>
<html>
<body>
<h2> Prime numbers by a specific range </h2>

<form method="post">

Enter starting number:
<input type="number" name="start"><br><br>

Enter ending number:
<input type="number" name="end"><br><br>

<input type="submit" name="submit" value="Find Prime">

</form>

<?php

if(isset($_POST['submit']))
{
$start = $_POST['start'];
$end = $_POST['end'];

echo "<h3> Prime Numbers </h3>";

for($n = $start;$n <= $end;$n++)
{
if($n < 2)
{
	continue;
}

$flag = 0;

for($i = 2;$i<=sqrt($n);$i++)
{
	if($n % $i == 0)
	{
		$flag = 1;
		break;
	}

}
if($flag == 0)
{
	echo $n . " ";
}
}
}
?>
</body>
</html>

