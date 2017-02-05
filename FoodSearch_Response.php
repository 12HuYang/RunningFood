<?php
/////////////////////////////////////////
// Database Variables
$DBName         = "b11_19615970_running4food";
$ServerName     = "sql100.byethost11.com";
$UserName       = "b11_19615970";
$Password       = "lionking";
$Conn           = "";
$TableName      = "foodlist";

/////////////////////////////////////////
// Column Variables
$CFoodName       = "foodname";
$CRestName       = "restaurant";
$CFoodPrice      = "price";

/////////////////////////////////////////
// Input Variables


/////////////////////////////////////////
// SQL String
$SQL =  "SELECT $CFoodName, $CRestName, $CFoodPrice ".
        "FROM $TableName".
        "WHERE $CFoodName = $FoodName AND ".
        "($RestName = NULL OR $CRestName = $RestName)"
        // Add Tag later


//Connect to the database
$Conn = mysql_connect($ServerName, $Username, $Password); 
@mysql_select_db($DBName) or ("Database not found");

//Format POST input
$FoodName   = format_input($_POST["FoodName"]);
$RestName   = format_input($_POST["RestName"]);
$FoodTag    = format_input($_Post["FoodTag"]);

$FoodName   = format_string_in($FoodName);
$RestName   = format_string_in($FoodName);
$FoodTag    = format_string_in($FoodName);

$Result = $Conn->query($SQL);

show_result($Result);
/////////////////////////////////////////
// Functions
/////////////////////////////////////////
function format_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function format_string_in($string)
{
    $string = strtolower($string);
    return $string
}

function show_result($result)
{
    echo "Food Name/Restaurant/Price<br>";
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            echo $row[$CFoodName]." ".$row[$CRestName]." ".$row[$CFoodPrice]."<br>";
        }
    }
    else
    {
        echo "No Results found";
    }
}

Conn->close();
///////////////////////////////////////// 
?>