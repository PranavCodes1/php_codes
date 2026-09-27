<!DOCTYPE html>
<html>
<body>

<h2>String Position</h2>

<form method="post">
    Enter main string:
    <input type="text" name="big" required>
    <br><br>

    Enter small string:
    <input type="text" name="small" required>
    <br><br>

    <input type="submit" name="submit" value="Check">
</form>


<?php
if (isset($_POST['submit']))
{
	$big = $_POST['big'];
	$small = $_POST['small'];

	if(strpos($big,$small) === 0)
	{
		echo "Small string is present at the beginning.<br>";
	}
	else
	{
	
        	echo "Small string is not present at the beginning.<br>";
	}

	$pos = strpos($big,$small);
	if($pos !== false)
	{
		echo "Position: " . $pos;
	}
	else
	{
		echo "Small string not found.";
	}
}	
?>

</body>
</html>
