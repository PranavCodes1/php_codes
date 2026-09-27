<!DOCTYPE html>
<html>
<body>

<h2>Item bill</h2>

<form method="post">

Enter details for item<br><br>

Enter item code:
<input type="text" name="code" placeholder="101,102,103,104,105"><br><br>

Enter item name:
<input type="text" name="item" placeholder="pen,pencil,eraser,sharpner,brush"><br><br>

Enter units sold:
<input type="text" name="units" placeholder="141,15,165,13,10"><br><br>

Enter item rate:
<input type="text" name="rate" placeholder="10,5,2,3,100"><br><br>

<input type="submit" name="submit" value="generate bill">

</form>

<?php

if(isset($_POST['submit']))
{
    $code = explode(",", $_POST['code']);
    $item = explode(",", $_POST['item']);
    $units = explode(",", $_POST['units']);
    $rate = explode(",", $_POST['rate']);

    echo "<table border='1' cellpadding='8'>";

    echo "<tr>
            <th>Code</th>
            <th>Name</th>
            <th>Units</th>
            <th>Rate</th>
            <th>Amount</th>
          </tr>";

    $total = 0;

    for($i=0; $i<5; $i++)
    {
        $amount = $units[$i] * $rate[$i];
        $total = $total + $amount;

        echo "<tr>";
        echo "<td>".$code[$i]."</td>";
        echo "<td>".$item[$i]."</td>";
        echo "<td>".$units[$i]."</td>";
        echo "<td>".$rate[$i]."</td>";
        echo "<td>".$amount."</td>";
        echo "</tr>";
    }

    echo "<tr>
            <th colspan='4'>Total</th>
            <th>$total</th>
          </tr>";

    echo "</table>";
}

?>

</body>
</html>
