<!DOCTYPE html>
<html>
<body>

<h2>Reverse String Without Built-in Function</h2>

<form method="post">

Enter a string:
<input type="text" name="str"><br><br>

 <input type="submit" name="submit" value="Reverse">

</form>

<?php
function reverseString($str)
{
	$rev = "";
	for($i = strlen($str)-1; $i>=0;$i--)
	{
		$rev .= $str[$i];
	}
	return $rev;

}

if (isset($_POST['submit']))
{
    $str = $_POST['str'];

    echo "Original String = $str <br>";
    echo "Revesed string = ".reverseString($str);
}
?>
</body>
</html>
