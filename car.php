<?php
/**
 * Created by PhpStorm.
 * User: yanghu
 * Date: 2/4/17
 * Time: 9:26 PM
 */
//商品分类页
  session_start();//开启session环境
   //判断该用户是否点击过“放入购物车”按钮
   if(isset($_POST['cart'])){
       //循环方式赋值

       foreach($_POST['cart'] as $value){
           //购物车里如果有该商品
           //条件：
           //点击过“放入购物车”---存在数组$_SESSION['cart'];
           //判断哪件商品---- 判断该商品的名称是否在数组里出现过
           //array_key_exists(下标，数组)；
           if(isset($_SESSION['cart'])&& array_key_exists($value,$_SESSION['cart'])){
               $_SESSION['cart'][$value]++;
           }else{

               //购物车里如果没有该商品
               $_SESSION['cart'][$value]=1;
           }
       }
   }
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>网上商城_php购物车-www.#</title>
</head>
<body>
<h1>网上商城</h1>
<a href="car1.php">日用百货</a> <br/>
<a href="car2.php">家用电器</a> <br/>
<a href="car3.php">文化用品</a> <br/>
<a href="carlist.php">查看购物车</a>
<a href="cardel.php">清空购物车</a>
</body>
</html>