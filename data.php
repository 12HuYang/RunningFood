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

//echo json_encode($response);
?>


<script type="text/javascript">
    // pass PHP array to JavaScript array
    var products = <?php echo json_encode( $response ) ?>;

    // result seen through view source
    // var products = [["choc_cake","Chocolate Cake",15],["carrot_cake","Carrot Cake",12],["cheese_cake","Cheese Cake",20],["banana_bread","Banana Bread",14]];

    // how to access elements in multi-dimensional array in JavaScript
    //alert( products[0][1] ); // Chocolate Cake
    var list='';
    for(i=0;i<products.length;i++)
    {
        for(j=0;j<products[i].length;j++)
            list.append(products[i][j]);
    }
    alert(list);
</script>