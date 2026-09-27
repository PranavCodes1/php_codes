<?php
session_start();
if(!isset($_SESSION['stack']))
{
	$_SESSION['stack'] = array(10,20,30,40);
}
?>
<!DOCTYPE html>
<html>
<body>
<h2> Stack operations</h2>

<form method ="post">
Select operation:
<select name="op">
<option value ="insert">Insert element in stack</option>
<option value ="delete">delete element from stack</option>
<option value ="display">Display elements of stack</option>
</select>
<br><br>

Enter element:
<input type="text" name="element"><br><br>


<input type = "submit" name="submit" value="perform">
</form>

<?php

if(isset($_SESSION['stack']))
{
	$op = $_POST['op'];
	switch($op)
	{
	case "insert":
		array_push($_SESSION['stack'],$_POST['element']);
		echo "$element pushed in array";
		break;

	case "delete":
		if (count($_SESSION['stack']) > 0)
		{
			$deleted = array_pop($_SESSION['stack']);
			echo "$deleted popped from array";
		}
		else
		{
			echo "stack is empty";
		}
		break;
	case "display":

		echo "array elements are: ";
		print_r($_SESSION['stack']);
		break;
	}
}
?>
</body>
</html>

