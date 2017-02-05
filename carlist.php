<?php
//显示购物车内的商品（商品名字、商品数量）
session_start();

echo "您已经选择的商品包括：<br>";

echo " <form action='./balance.php' method='post' > ";

//显示用户购买的商品
//包括功能：删除该商品
//修改商品的数量
//Edit www.#
//获取用户购买的信息$_SESSION,循环方式显示产品
if(isset($_SESSION['cart'])){
    foreach(@$_SESSION['cart'] as $key=>$value){

        echo "<input type='checkbox' name='list[]' value='{$key}'> ";
        echo "$key &nbsp;&nbsp;&nbsp;$value&nbsp;&nbsp;";

        //减少一件商品
        echo "<a href='cardel1.php?list={$key}'>减少一件商品</a>";
        echo "   <a href='cardel2.php?list={$key}'>删除该商品 </a><br>";
    }
}
echo "<input type='submit' name='tijiao' value='结算'>";
echo "<a href='cardel.php'>清空购物车</a> ";
echo "</form>";
echo " <a href='car.php'>返回首页</a>";
/**
 * Created by PhpStorm.
 * User: yanghu
 * Date: 2/4/17
 * Time: 9:52 PM
 */
?>
