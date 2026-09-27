<!DOCTYPE html>
<html>
<body>

<h2>Rectangle area and perimeter</h2>

<form method="post">

Enter Height:
<input type = "number" name = "height"><br><br>

Enter Breadth:
<input type = "number" name = "breadth"><br><br>

<input type = "submit" name = "submit" value = "calculate"><br><br>

</form>

<?php
if(isset($_POST['submit']))
{

$h = $_POST['height'];
$b = $_POST['breadth'];

$area = $h * $b;

$perimeter = 2 * ($h + $b);

echo "Area of rectangle: ".$area."<br>";
echo "Perimeter of rectangle: ".$perimeter."<br>";
}?>
</body>
</html>
