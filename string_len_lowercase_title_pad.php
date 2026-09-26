<!DOCTYPE html>

<html>
<body>

<form method = "post">

Enter string:
<input type="text" name="string"><br><br>

<input type="submit" name="submit" value="perform">
</form>

<?php

if(isset($_POST['submit']))
{
$str = $_POST['string'];

echo "Length of string: ".strlen($str);

$lower = strtolower($str);
echo "<br>String to lowercase:".$lower;

$title = ucwords($lower);
echo "<br> lowercase to Title: ".$title;

$pad = str_pad($str,strlen($str) + 4,"*",STR_PAD_BOTH);
echo "<br>Padded string =".$pad;
}
?>
</body>
</html>

