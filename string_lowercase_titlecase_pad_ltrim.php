<!DOCTYPE html>
<html>

<body>

<h2>String operations</h2>

<form method = "post">

Enter a string: 
<input type ="text" name="str"><br><br>

<input type="radio" name="choice" value="1">Lowercase and title case
<br><br>

<input type="radio" name="choice" value="2">Pad with # on both sides
<br><br>

<input type="radio" name="choice" value="3">Remove leading whitespaces
<br><br>

<input type="submit" name="submit" value="perform">
</form>

<?php
if(isset($_POST['submit']))
{
$str = $_POST['str'];
$choice = $_POST['choice'];

switch($choice)
{

	case "1":
		$lower = strtolower($str);
		echo "string lower: ".$lower."<br>";

		$title = ucwords($lower);
		echo "string to title case: ".$title."<br>";

		break;

	case "2":
		$pad = str_pad($str,strlen($str)+4,"#",STR_PAD_BOTH);
		echo "padded with #: ".$pad;
		break;
	
	case "3":
		$s = ltrim($str);
		echo "removed whitespaces: ".$s;
		break;
}
}
?>
</body>
</html>
