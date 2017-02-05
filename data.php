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
@mysql_select_db($database) or (mysql_error());

$query="SELECT ID, foodname, price,foodimage FROM foodlist";

//$query= "SELECT * FROM foodlist WHERE restaurant='Tokyoseoul'";

//$sql = "SELECT foodname, price, foodimage FROM foodlist";

$result = mysql_query($query);
$response=array();

//echo $result;


while($rows=mysql_fetch_array($result, MYSQL_BOTH))
{
    //printf("ID: %s  Name: %s", $rows["ID"], $rows["foodname"]);
    //echo $rows["foodname"]." ".$rows["price"]." "."<img src=".$rows["foodimage"].",width=100px><br>";
    $response[]=$rows;
}

echo json_encode($response);


//echo "end";
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