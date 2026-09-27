<!DOCTYPE html>
<html>
<body>

<h2>Prime numbers in range</h2>

<form method = "post">

Enter starting range:
<input type ="text" name="start"><br><br>

Enter limit:
<input type="text" name="limit"><br><br>

<input type="submit" name="submit" value="check"><br><br>

</form>

<?php

if(isset($_POST['submit']))
{
$start = $_POST['start'];
$limit = $_POST['limit'];

for($n=$start;$n<=$limit;$n++)
{
	if ($n < 2)
	{
		continue;
	}

	$flag = 0;
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
		echo $n." ";
	}
}
}
?>
</body>
</html>
