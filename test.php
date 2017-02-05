<?php
/**
 * Created by PhpStorm.
 * User: yanghu
 * Date: 2/4/17
 * Time: 5:49 PM
 */
$name = $_GET['name'];
$gender = $_GET['rest'];
$price = $_GET['price'];

//$filename = time().substr($_FILES['photo']['name'], strrpos($_FILES['photo']['name'],'.'));

//$response = array();

$ID=$gender."_".$name;

$servername = "sql100.byethost11.com";
$username = "b11_19615970";
$password = "lionking";
$database = "b11_19615970_running4food";

$connection=mysql_connect($servername,$username,$password);
@mysql_select_db($database) or ("Database not found");

$insert_query= "INSERT INTO foodlist VALUES('','$ID','$name','$gender','$price','')";
mysql_query($insert_query) or die(mysql_error());
//mysql_close($connection);
header("Location: foodinput.php");
//die ();