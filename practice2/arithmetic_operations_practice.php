<!DOCTYPE html>
<html>
<body>

<form method="post">

Enter first number:
<input type="number" name="n1"><br><br>

Enter second number:
<input type="number" name="n2"><br><br>

<select name="op">
<option value="add">Add</option>
<option value="sub">Subtract</option>
<option value="mul">Multiply</option>
<option value="div">Divide</option>
</select>
<br><br>

<input type="submit" name="submit" value="calculate">
</form>

<?php

if(isset($_POST['submit']))
{
$num1 = $_POST['n1'];
$num2 = $_POST['n2'];
$op = $_POST['op'];

switch($op)
	{
	case "add":
		$result = $num1 + $num2;
		echo $result;
		break;

	case "sub":
		$result = $num1 - $num2;
		echo $result;
		break;

	case "mul":
		$result = $num1 * $num2;
		echo $result;
		break;

	case "div":
		$result = $num1 / $num2;
		echo $result;
		break;

	}
}
?>
</body>
</html>

