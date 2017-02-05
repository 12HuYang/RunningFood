Restaurant
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title> FormData Demo </title>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <script type="text/javascript">
        <!--
        function fsubmit(){
            var data = new FormData($('#form1')[0]);
            $.ajax({
                url: 'server.php',
                type: 'POST',
                data: data,
                dataType: 'JSON',
                cache: false,
                processData: false,
                contentType: false
            }).done(function(ret){
                if(ret['isSuccess']){
                    var result = '';
                    result += 'ID' + ret['ID']+'<br>';
                    result += 'foodname=' + ret['name'] + '<br>';
                    result += 'price=' + ret['price']+'<br>';
                    result += 'restraunt=' + ret['rest'] + '<br>';
                    result += '<img src="' + ret['photo']  + '" width="100">';
                    $('#result').html(result);
                }else{
                    alert('提交失敗');
                }
            });
            var r=confirm("Add another food ?");
            if(r){location.reload();}
            return false;
        }
        //-->
    </script>

</head>

<body>
<form name="form1" id="form1">
    <p>foodname:<input type="text" name="name" ></p>
    <p>price:<input type="text" name="price"></p>
    <p>rastaurant:<br>
        <input type="radio" name="rest" value="PizzaHut">PizzaHut<br>
        <input type="radio" name="rest" value="Domino">Dominos<br>
        <input type="radio" name="rest" value="Manderine House">Manderine House<br>
        <input type="radio" name="rest" value="Tokyoseoul">Tokyoseoul<br>
        <input type="radio" name="rest" value="NewGarden">NewGarden<br>
        <input type="radio" name="rest" value="RedBento">RedBento<br>
        <input type="radio" name="rest" value="Emerald">Emerald<br>
        <input type="radio" name="rest" value="Popo">Popo<br>
    </p>
    <p>photo:<input type="file" name="photo" id="photo"></p>
    <p><input type="button" name="b1" value="submit" onclick="fsubmit()"></p>
</form>
<div id="result"></div>
</body>
</html>