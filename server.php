<?php
$name = isset($_POST['name'])? $_POST['name'] : '';
$gender = isset($_POST['rest'])? $_POST['rest'] : '';
$price = isset($_POST['price'])? $_POST['price'] : '';

$filename = time().substr($_FILES['photo']['name'], strrpos($_FILES['photo']['name'],'.'));

$response = array();

$ID=$gender."_".$name;

$servername = "sql100.byethost11.com";
$username = "b11_19615970";
$password = "lionking";
$database = "b11_19615970_running4food";

$connection=mysql_connect($servername,$username,$password);
$dbcon=mysql_select_db($database);

if(!$connection){
    die("Connection failed: ". mysqli_error());
}
if(!$dbcon){
    die("Database connection failed: ".mysql_error());
}
$insert_query= "INSERT INTO foodlist VALUES('',$ID,$name,$gender,$price,$filename)";
mysql_query($insert_query) or die("Strange error");
mysql_close($connection);
//header("Location: foodinput.php");
//die ();

if(move_uploaded_file($_FILES['photo']['tmp_name'], $filename)){

    $response['isSuccess'] = true;
    $response['ID']=$ID;
    $response['name'] = $name;
    $response['price'] = $price;
    $response['rest'] = $gender;
    $response['photo'] = $filename;
}else{
    $response['isSuccess'] = false;
}

echo json_encode($response);
?>