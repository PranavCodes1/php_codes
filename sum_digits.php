<!DOCTYPE html>
<html>
<body>
<h2> Sum of digits </h2>

<form method="post">

Enter a number:
<input type="number" name="n"><br><br>

<input type="submit" name="submit" value="Calculate">

</form>

<?php

if(isset($_POST['submit']))
{
$num = $_POST['n'];

$temp = $num;
$sum = 0;

while($temp>0)
{
	$digits = $temp % 10;
	$sum = $sum + $digits;
	$temp = $temp/10;
}
echo "SUM of digits=".$sum;
}
?>
</body>
</html>
