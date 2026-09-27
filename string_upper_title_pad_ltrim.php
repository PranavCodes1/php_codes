<!DOCTYPE html>

<html>
<body>

<h2>String operations </h2>
<form method="post">
Enter a string:
<input type="text" name="str"><br><br>

Select:
<input type="radio" name="choice" value="1">Uppercase & then Title case
<br><br>

<input type="radio" name="choice" value="2">Pad the string with * from both sides
<br><br>

<input type="radio" name="choice" value="3">Remove the leading spaces
<br><br>

<input type="submit" name="submit" value="perform">
</form>

<?php

if(isset($_POST['submit']))
{
$str = $_POST['str'];
$choice = $_POST['choice'];

if($choice == 1)
{
	$upper = strtoupper($str);
	echo "Uppercase string: $upper <br>";

	$title = ucwords(strtolower($upper));
	echo "Title case : $title <br>";

}
if($choice == 2)
{
	$pad = str_pad($str,strlen($str) + 4,"*",STR_PAD_BOTH);
	echo "Pad string with * from both sides: ".$pad."<br>";
}

if($choice == 3)
{
	$s = ltrim($str);
	echo "Whitespaces removed from left: ".$s;
}
}
?>
</body>
</html>


