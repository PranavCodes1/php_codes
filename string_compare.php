<!DOCTYPE html>
<html>
<body>
<h2>String operations</h2>

<form method="post">

Enter big string: 
<input type="text" name="big"><br><br>

Enter small string:
<input type="text" name="small"><br><br>

enter number of characters:
<input type="number" name="n"><br><br>

<input type="submit" name="submit" value="perform">
</form>

<?php

if(isset($_POST['submit']))
{
$big = $_POST['big'];
$small = $_POST['small'];
$n = $_POST['n'];

$pos = strpos($big,$small);

if($pos !== false)
{
	echo "Position = $pos <br>";
}
else
{
	echo "small string does not exist in big string <br>";
}


if(strncasecmp($big,$small,$n) == 0)
{
	echo "First $n characters are equal";
}
else
{
	echo "First $n characters are not equal";
}
}
?>
</body>
</html>

