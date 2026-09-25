<!DOCTYPE html>
<html>
<body>
<h2>String Operations</h2>

<form method="post">

Enter big string:
<input type="text" name="big"><br><br>

Enter small string:
<input type="text" name="small"><br><br>

<input type="submit" name="submit" value="check">

</form>

<?php

if(isset($_POST['submit']))
{
$big = $_POST['big'];
$small = $_POST['small'];

if(strpos($big,$small) === 0)
{
	echo "small string appears at the start <br>";
}
else
{
	echo "small string does not appear at the start <br>";
}

$pos = strpos($big,$small);

if($pos !== false)
{
	echo "$small found at positon ".$pos." in the big string";
}
else
{
	echo "$small not found in $big";
}
}

?>
</body>
</html>
