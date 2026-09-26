<!DOCTYPE html>
<html>
<body>

<h2>String comparison using == and strcmp</h2>

<form method="post">

Enter First String:
    <input type="text" name="s1" required>
    <br><br>

    Enter Second String:
    <input type="text" name="s2" required>
    <br><br>

    <input type="submit" name="submit" value="Compare">

</form>

<?php

if (isset($_POST['submit']))
{
    $s1 = $_POST['s1'];
    $s2 = $_POST['s2'];

    if($s1 == $s2)
    {
	    echo "Strings are equal using == <br>";
	}
    else{
	    echo "Strings are not equal using == <br>";
    }

    if(strcmp($s1,$s2) == 0)
    {
	    echo "strings are equal using strcmp <br>";

    }
    else
    {
	    echo "Strings are not equal using strcmp <br>";
    }
}
?>
</body>
</html>

