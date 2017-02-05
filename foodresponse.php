<?php
/**
 * Created by PhpStorm.
 * User: yanghu
 * Date: 2/4/17
 * Time: 3:27 PM
 */
$restraunrant = isset($_POST['Restaurant'])? $_POST['Restaurant'] : '';
//echo $restraunrant;

//$foodname = isset($_POST['FoodName'])? $_POST['FoodName'] : '';
//echo $foodname;

//$price = isset($_POST['Price'])? $_POST['Price'] : '';
//echo $price;
//$filename = time().substr($_FILES['photo']['name'], strrpos($_FILES['photo']['name'],'.'));
$filename=$_FILES['photo']['name'];



$response = array();

if(move_uploaded_file($_FILES['photo']['tmp_name'], $filename)){
    $response['isSuccess'] = true;
    $response['restraunt'] = $restraunrant;
    //$response['foodname'] = $foodname;
    //$response['price']=$price;
    $response['photo'] = $filename;
}else{
    $response['isSuccess'] = false;
}

echo json_encode($response);
?>