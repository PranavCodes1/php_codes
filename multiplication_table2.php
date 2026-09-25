<!DOCTYPE html>
<html>
<body>
<h2>Multiplication Table</h2>

<form method="post">

Enter number:
<input type="number" name="n"><br><br>

Enter limit:
<input type="number" name="lim"><br><br>

<input type="submit" name="submit" value="Display">
</form>

<?php

if(isset($_POST['submit']))
{
	$num = $_POST['n'];
	$limit = $_POST['lim'];

		
	echo "<table border ='1' , cellpadding = '8'>";
		echo "<tr>";
		echo "<th>Expression</th>";
		echo "<th>Result</th>";
		echo "</tr>";


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

