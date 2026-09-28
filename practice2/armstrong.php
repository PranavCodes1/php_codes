<!DOCTYPE html>
<html>
<body>

<h2>Armstrong number</h2>

<form method="post">

Enter number:
<input type="number" name="n"><br><br>

<input type="submit" name="submit" value="check">

</form>

<?php

if(isset($_POST['submit']))
{
$num = $_POST['n'];
$temp = $num;
$sum = 0;

while($temp > 0)
{
	$digits = $temp % 10;
	$sum = $sum + ($digits * $digits * $digits);
	$temp = $temp / 10;
}

if($sum == $num)
{
	echo "$num is Armstrong Number";
}
else
{
	echo "$num is not armstrong number";
}
}
?>
</body>
</html>

