<!DOCTYPE html>
<html>
<body>

<h2>Array Operations </h2>

<form method="post">

<select name="op">
<option value="insert">Insert in array</option>
<option value="search">Search elemnet</option>
</select>
<br><br>

Enter a element:

<input type="text" name="element"><br><br>

Enter position:
<input type="text" name="pos"><br><br>

<input type="submit" name="submit" value="perform">

</form>

<?php

if(isset($_POST['submit']))
{
$element = $_POST['element'];
$pos = $_POST['pos'];
$op = $_POST['op'];

$arr = array(10,20,30,40,50);
print_r($arr);
echo "<br>";


function searchElement($arr,$search)
{
	foreach($arr as $element)

	{
		if($element == $search)
		{
			return true;
		}
	}
	return false;
}


switch($op)
{
case "insert":
	array_splice($arr,$pos,0,array($element));
	echo "Array after insertion: <br>";
	print_r($arr);
	echo "<br>";
	break;

case "search":
	if(searchElement($arr,$element))
	{
		echo "$element found in array";
	}
	else
	{
		echo "$element not found in array";
	}
	break;
}
}
?>
</body>
</html>
