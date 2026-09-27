<!DOCTYPE html>
<html>
<body>

<h2>String Operations</h2>

<form method="post">
    Enter Main String:
    <input type="text" name="big" required>
    <br><br>

    Enter Substring:
    <input type="text" name="small" required>
    <br><br>


    <input type="submit" name="submit" value="Perform">
</form>


<?php

if(isset($_POST['submit']))
{

$big = $_POST['big'];
$small = $_POST['small'];

if(substr($big,-strlen($small))== $small)
{
	 echo "Small string appears at the end of the big string.<br>";
    }
    else
    {
        echo "Small string does not appear at the end of the big string.<br>";
 }


$pos = strpos($big,$small);
if($pos !== false)
{
	 echo "$small found at position " . $pos . " in the big string.<br>";
    }
    else
    {
        echo "$small not found in $big.<br>";
}


if(strcasecmp($big,$small) == 0)
{
	 echo "Both strings are equal.";
    }
    else
    {
        echo "Both strings are not equal.";
    }
}

?>

</body>
</html>
