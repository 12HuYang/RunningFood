<?php
session_start();//开启session环境

//清空购物车
unset($_SESSION['cart']);
?>
<script type="text/javascript" language="javascript">
    alert("清除成功");
    location.href="car.php";
</script>