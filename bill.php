<!DOCTYPE html>
<html>
<body>
<h2> Enter details of 5 items </h2>

<form method="post">

Enter Item code:
<input type="text" name="code" placeholder="101,102,103"><br><br>

Enter Item name:
<input type="text" name="name" placeholder="pen,pencil,eraser"><br><br>

Enter Units Sold:
<input type="text" name="units" placeholder="10,20,100"><br><br>

Enter Rate:
<input type="text" name="rate" placeholder="100,10,5"><br><br>

<input type="submit" name="submit" value="Generate Bill">

</form>


<?php

if(isset($_POST['submit']))
{
	$code = explode(",", $_POST['code']);
	$name = explode(",",$_POST['name']);
	$units = explode(",",$_POST['units']);
	$rate = explode(",", $_POST['rate']);

	echo "<h2> Bill </h2>";
	echo "<table border = '1', cellpadding='8'>";

	echo "<tr>
		<th> Item code</th>
		<th> Name </th>
		<th> Units </th>
		<th> Rate </th>
		<th> Amount </th>
		</tr>";

	for($i=0;$i<5;$i++)
	{
	$amount = $units[$i] * $rate[$i];
	$total = $total + $amount;

	echo "<tr>";
	echo "<td>".$code[$i]."</td>";
	echo "<td>".$name[$i]."</td>";
	echo "<td>".$units[$i]."</td>";
	echo "<td>".$rate[$i]."</td>";
	echo "<td>".$amount."</td>";
	}
	echo "<tr>";
	echo "<th colspan='4'>total</th>";
	echo "<th>$total</th>";
	echo "</tr>";

	echo "</table>";
}
?>
</body>
</html>

