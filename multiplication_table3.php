<!DOCTYPE html>
<html>
<body>
<h2>Multiplication table</h2>

<form method ="post">

Enter first number:
<input type = "number" name="n"<br><br>

Enter limit:
<input type = "number" name="lim"<br><br>

<input type="submit" name="submit" value="calculate">

</form>

<?php


if(isset($_POST['submit']))
{

$num = $_POST['n'];
$limit = $_POST['lim'];

echo "<table border = '1' cellpadding = '8'>";
echo "<tr>
	<th> Expression</th>
	<th> result </th>
	</tr>";


for($i=1;$i<=$limit;$i++)
{
	$result = $num * $i;
	echo "<tr>";
		echo "<td>$num x $i =</td>";
		echo "<td>".$num * $i."</td>";
		echo "</tr>";

}
echo "</table>";
}
?>
</body>
</html>


