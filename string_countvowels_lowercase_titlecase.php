<!DOCTYPE html>
<html>
<body>
<h2>String operations</h2>

<form method="post">

Enter a string:
<input type="text" name="str"><br><br>

<input type="radio" name="choice" value="1">
Count Vowels
<br><br>

<input type="radio" name="choice" value="2">
Lowercase and Title Case

<br><br>

<input type="submit" name="submit" value="check"><br><br>
</form>



<?php
if (isset($_POST['submit']))
{
    $str = $_POST['str'];
    $choice = $_POST['choice'];

    if($choice == 1)
	{
		$count = 0;
		$s = strtolower($str);

		for($i=0;$i<=strlen($s);$i++)
		{
			if(in_array($s[$i],['a','e','i','o','u']))
			{
				$count++;
			}
		}
		echo "Number of vowels: ".$count;
	}


    if($choice == 2)
	{
		$lower = strtolower($str);
		echo "String converted to lowercase: ".$lower;

		$title = ucwords($lower);
		echo "<br>string converted to Title case: ".$title;
    }
}
?>
</body>
</html>
