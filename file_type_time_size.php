<!DOCTYPE html>
<html>
<body>
<h2> File operations </h2>

<form method="post">

Enter file name:
<input type="text" name="file"><br><br>

<select name="op">
<option value="type">Type of file</option>
<option value="time">Last modification time</option>
<option value="size">Size of file</option>
</select>

<input type="submit" name="submit" value="perform">

</form>

<?php

if(isset($_POST['submit']))
{
$file = $_POST['file'];
$op = $_POST['op'];

if(file_exists($file))
{

switch($op)
{
case "type":
	echo "file type = ".filetype($file)."<br>";
	break;

case "time":
	echo "last modified time of the file: ".date("d-m-Y H:i:s",filemtime($file))."<br>";
	break;

case "size":
	echo "size of the file: ".filesize($file)."bytes";
	break;
}
}
else
{
	echo "File does not exists";
}
}
?>
</body>
</html>
