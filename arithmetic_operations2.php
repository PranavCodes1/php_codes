<!DOCTYPE html>

<html>
<body>

<h2> Arithmetic Operations </h2>

<form method="post">

Enter first number:
<input type="number" name="n1"><br><br>

Enter second number:
<input type="number" name="n2"><br><br>

Select operation:
<select name="op">
    <option value="add">Addition</option>
    <option value="sub">Subtraction</option>
    <option value="mul">Multiplication</option>
    <option value="div">Division</option>
</select>

<br><br>

<input type="submit" name="submit" value="Calculate">

</form>


<?php

function calculate($n1,$n2 = 0,$op = "add")
{
	switch($op)
	{
	case "add":
		return $n1 + $n2;
	
	case "sub":
		return $n1 - $n2;
	case "mul":
		return $n1 * $n2;
	case "div":
		return $n1 / $n2;
	}
}

if(isset($_POST['submit']))
{
$num1 = $_POST['n1'];
$num2 = $_POST['n2'];
$op = $_POST['op'];

$result = calculate($num1,$num2,$op);
echo $result;
}
?>
</body>
</html>
