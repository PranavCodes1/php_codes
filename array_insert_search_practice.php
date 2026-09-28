<!DOCTYPE html>

<html>
<body>
<h2> Array insert and search </h2>

<form method = "post">

Select operation:

<select name="op">
<option value="insert">Insert</option>
<option value="search">Search</option>
</select>

<br><br>
Enter element:
<input type="text" name="ele"><br><br>

Enter position:
<input type="text" name="pos"><br><br>

<input type="submit" name="submit" value="perform">
</form>

<?php

if(isset($_POST['submit']))
{
	$element = $_POST['ele'];
	$pos = $_POST['pos'];
	$op = $_POST['op'];
	$arr = array(10,20,30,40,50);
	echo "current array: ";
	print_r($arr);


	function SearchElement($arr,$search)
	{
		foreach($arr as $ele)
		{
			if($ele == $search)
			{
				return true;
			}
		}

				return false;
			
	}

	switch($op)
	{
	case "insert":
	array_splice($arr,$pos,0,array($element));
	echo "element inserted: ";
	print_r($arr);
	break;

	case "search":
		$search = SearchElement($arr,$element);
		if($search == true)
		{
			echo "Element found in array";
		}
		else
		{
			echo "Element not found in array";
		}
		break;
	}
}
?>
</body>
</html>
