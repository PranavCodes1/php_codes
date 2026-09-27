<!DOCTYPE html>
<html>

<body>
<h2> Numbers to words</h2>

<form method = "post">
 Enter number: <input type = "text" name = "num"> 
<input type = "submit" name="submit" value = "convert">

 </form>

<?php



function numbertoWords($num)
{
	$words = array('0' => "Zero", '1' => "One", '2' => "Two", '3' => "Three", '4' => "Four", '5' => "Five", '6' => "Six", '7' => "Seven", '8' => "Eight", '9' => "Nine");

	$digits = str_split($num);

	foreach($digits as $d)
	{
		echo $words[$d]." ";
	}
}

if(isset($_POST['submit']))
{
	$num = $_POST['num'];

	echo "Number converted to words: ";
		
	numbertoWords($num);

}
?>
</body>
</html>
