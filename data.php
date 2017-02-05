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


$result = mysql_query("SELECT field_name, field_value
                       FROM the_table");
$to_encode = array();
while($row = mysql_fetch_assoc($result)) {
    $to_encode[] = $row;
}
echo json_encode($to_encode);