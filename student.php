<!DOCTYPE html>
<html>
<body>

<h2>Student File operation</h2>

<?php

$file = fopen("student.dat","r");

if($file)
{
	echo "<table border = '1' cellpadding='8'>";
	echo "<tr>
	<th>Roll no</th>
	<th>Name</th>
	<th>OS</th>
	<th>WT</th>
	<th>DS</th>
	<th>Python</th>
	<th>Java</th>
	<th>CN</th>
	<th>Total</th>
	<th>Percentage</th>
	</tr>";


	while(($line = fgets($file)) !== false)
	{
	$data = explode(",",$line);

	if(count($data) == 8)
	{
		$total = 0;

		for($i = 2;$i<8;$i++)
		{
			$total = $total + $data[$i];
		}
		$percentage = $total / 6;
		
		echo "<tr>";

		for($i=0;$i<8;$i++)
		{
			echo "<td>$data[$i]</td>";
		
		}
		echo "<td>$total</td>";
			echo "<td>$percentage</td>";

		echo "</tr>";
	}
	}
	echo "</table>";
	fclose($file);
}
else
{
	echo "unable to open file";

}
?>
</bpdy>
</html>
