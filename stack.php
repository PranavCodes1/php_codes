<?php

session_start();

if(!isset($_SESSION['stack']))
{
	$_SESSION['stack'] = array(10,20,30);
}
?>



<!DOCTYPE html>
<html>
<body>

<form method="post">
<select name="op">
<option value="insert">Insert in stack </option>
<option value="delete">Delete in stack </option>
<option value="display">Display in stack </option>
</select>
<br><br>

Enter element:
<input type="text" name="element"><br><br>

<input type="submit" name="submit" value="perform">

</form>

<?php
if(isset($_POST['submit']))
{
	$op = $_POST['op'];
	
	switch($op)
	{
	case "insert":
		array_push($_SESSION['stack'],$_POST['element']);
		echo " inserted in stack";
		break;
	
	case "delete":
		 if (count($_SESSION['stack']) > 0)
		 {
			 $deleted = array_pop($_SESSION['stack']);
			 echo "$deleted element deleted from stack";
		 }
		 else
		 {
			 echo "stack is empty";
		}
			break;
	
	case "display":
		echo "Stack elements: <br>";
		print_r($_SESSION['stack']);
		break;
	}
}
?>
</body>
</html>
		

