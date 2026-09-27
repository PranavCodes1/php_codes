<!DOCTYPE html>
<html>
<body>

<h2>File Append Operation</h2>

<form method="post">

    Enter First Filename:
    <input type="text" name="f1" required>
    <br><br>

    Enter Second Filename:
    <input type="text" name="f2" required>
    <br><br>

    <input type="submit" name="submit" value="Append">

</form>


<?php

if (isset($_POST['submit']))
{
    $f1 = $_POST['f1'];
    $f2 = $_POST['f2'];

    if(is_file($f1) && is_file($f2))
    {
	    $file1 = fopen($f1,"r");

	    $content = fread($file1,filesize($f1));

	    fclose($file1);

	    $file2 = fopen($f2,"a+");
	    fwrite($file2,$content);

	    fclose($file2);

	    echo "content appended successfully.<br>";

	echo "First File Size = " . filesize($f1) . " bytes<br>";
        echo "Second File Size = " . filesize($f2) . " bytes";
    }
    else
    {
        echo "One or both files do not exist.";
    }

}

?>
</body>
</html>
