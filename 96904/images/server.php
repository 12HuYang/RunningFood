<?php
$name = isset($_POST['name'])? $_POST['name'] : '';
$gender = isset($_POST['rest'])? $_POST['rest'] : '';
$price = isset($_POST['price'])? $_POST['price'] : '';

$filename = time().substr($_FILES['photo']['name'], strrpos($_FILES['photo']['name'],'.'));
$saveplace="96904/images/".$filename;
$response = array();

$ID=$gender."_".$name;

$servername = "sql100.byethost11.com";
$username = "b11_19615970";
$password = "lionking";
$database = "b11_19615970_running4food";

$connection=mysql_connect($servername,$username,$password);
@mysql_select_db($database) or ("Database not found");

$insert_query= "INSERT INTO foodlist VALUES('','$ID','$name','$gender','$price','$saveplace')";
mysql_query($insert_query) or die(mysql_error());
//mysql_close($connection);
//header("Location: foodinput.php");
//die ();*/

if(move_uploaded_file($_FILES['photo']['tmp_name'], $filename)){

    $response['isSuccess'] = true;
    $response['ID']=$ID;
    $response['name'] = $name;
    $response['price'] = $price;
    $response['rest'] = $gender;
    $response['photo'] = "96904/images/".$filename;
}else{
    $response['isSuccess'] = false;
}

echo json_encode($response);
?>