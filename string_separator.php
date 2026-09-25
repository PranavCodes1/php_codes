<!DOCTYPE html>
<html>
<body>

<h2>String Separator Operations </h2>

<form method="post">

Enter a String:
<input type="text" name="str"><br><br>
<br><br>

Select separator:
<select name="sep">
<option value="#">#</option>
<option value="|">|</option>
<option value="%">%</option>
<option value="@">@</option>
<option value="!">!</option>
<option value=",">,</option>
</select>
<br><br>

Select new Operator:
<select name="newsep">
<option value="#">#</option>
<option value="|">|</option>
<option value="%">%</option>
<option value="@">@</option>
<option value="!">!</option>
<option value=",">,</option>
</select>
<br><br>

<input type="submit" name="submit" value="submit">
<br><br>

</form>

<?php

if(isset($_POST['submit']))
{
	$str = $_POST['str'];
	$sep = $_POST['sep'];
	$newsep = $_POST['newsep'];

	$arr = explode($sep,$str);

	echo "<h2>Split string</h2>";
	foreach($arr as $word)
	{
		echo $word ."<br>";
	}

	$newstr = str_replace($sep,$newsep,$str);
	echo "<h2>New string after replacement: </h2>";
	echo $newstr;
}
?>
</body>
</html>

