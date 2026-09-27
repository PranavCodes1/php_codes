<!DOCTYPE html>
<html>
<body>
<h2> String Reverse</h2>

<form method="post">

Enter a string:
<input type="text" name="string"><br><br>

<input type="submit" name="submit" value="reverse">

</form>

<?php

function rev($s)
{
	return strrev($s);
}

if(isset($_POST['submit']))
{
$str = $_POST['string'];

echo "Original string: ".$str;
echo "<br>";

echo"Reversed string: ".rev($str);
}
?>
</body>
</html>
