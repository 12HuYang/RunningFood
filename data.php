<?php
/**
 * Created by PhpStorm.
 * User: yanghu
 * Date: 2/4/17
 * Time: 10:59 PM
 */

$servername = "sql100.byethost11.com";
$username = "b11_19615970";
$password = "lionking";
$database = "b11_19615970_running4food";

$connection=mysql_connect($servername,$username,$password);
@mysql_select_db($database) or ("Database not found");

$query= "SELECT * FROM foodlist WHERE restaurant='Tokyoseoul'";

//$sql = "SELECT foodname, price, foodimage FROM foodlist";

$result = mysql_query($query);

echo $result;

while($rows=mysql_fetch_array($result,MYSQL_ASSOC))
{
    echo "<tr><td>".$row["foodname"]."</td><td>".$row["price"].$row["foodimage"]."</td></tr>";
}

/*if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["foodname"]."</td><td>".$row["price"].$row["foodimage"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$connection->close();*/