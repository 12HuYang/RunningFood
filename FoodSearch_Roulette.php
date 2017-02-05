<?php
/////////////////////////////////////////
// Database Variables
$DBName         = "b11_19615970_running4food";
$ServerName     = "sql100.byethost11.com";
$UserName       = "b11_19615970";
$Password       = "lionking";
$Conn           = "";
$TableName      = "foodlist";

echo $DBName . "\n";
echo $ServerName . "\n";
echo $UserName . "\n";
echo $Password . "\n";
echo $Conn . "\n";
echo $TableName . "\n";

/////////////////////////////////////////
// Column Variables
$CFoodName       = "foodname";
$CRestName       = "restaurant";
$CFoodPrice      = "price";

echo $CFoodName . "\n";
echo $CRestName . "\n";
echo $CFoodPrice . "\n";
/////////////////////////////////////////
// SQL Variable
$MaxPrice = $_POST["MaxPrice"];

$SQL =   "SELECT $CFoodName, $CRestName, $CFoodPrice " .
        "FROM $TableName " /*. 
        "WHERE CAST($CFoodPrice AS FLOAT) >= $MaxPrice " .
        "ORDER BY RAND() " .
        "LIMIT 1";*/

echo "SQL = " . $SQL;
/////////////////////////////////////////
//Connect to the database
echo "Connecting...\n";
$Conn = mysql_connect($ServerName, $UserName, $Password);
@mysql_select_db($DBName) or ("Database not found");

/////////////////////////////////////////
// Main
echo "Getting Results...\n";
$Result = mysql_query($SQL);
if(InputValidation($MaxPrice)){
    echo "Food Name/Restaurant/Price<br>";
    while(show_result($Result))
    {
        echo "Getting recursive results...\n";
        $Result = mysql_query($SQL);
    }
} 


/////////////////////////////////////////
// Functions
function show_result($Result)
{
    global $MaxPrice;
    if($row = mysql_fetch_array($result, MYSQL_BOTH))
    {
        echo $row[$CFoodName] . " " . $row[$CRestName] . " " . $row[$CFoodPrice] . "<br>";
        $MaxPrice -= ((float)$row[$CFoodPrice]);
        return true;
    }
    return false;
}

function InputValidation($Input)
{
    $Result = false;
    if(is_numeric($Input))  $Result = true;
    if($Input > 0)          $Result = true;

    if(!Result)
    {
        echo "Food Max Price is not a number value larger than 0!";
    }
    return $Result;
}
?>