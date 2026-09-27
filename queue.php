<?php

session_start();
if(!isset($_SESSION['queue']))
{
	$_SESSION['queue']= array(10,20,30);
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Queue oeprations</h2>


<form method="post">
<select name="op">
<option value="insert">Insert in queue </option>
<option value="delete">Delete from queue </option>
<option value="display">Display queue </option>
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
			array_push($_SESSION['queue'],$_POST['element']);
			echo "element inserted<br>";
			break;

		case "delete":
			if(count($_SESSION['queue'])> 0)
			{
				array_shift($_SESSION['queue']);
				echo "element delted";
			}
			else{
				echo "queue is empty";
			}
			break;

		case "display":
			echo "Queue elements are: <br>";
			print_r($_SESSION['queue']);
			break;
		}
}
?>
</body>
</html>



















