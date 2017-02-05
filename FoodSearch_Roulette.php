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
// SQL Variable
SQL =   "SELECT $CFoodName, $CRestName, $CFoodPrice ".
        "FROM $TableName ".
        "WHERE CAST($CFoodPrice AS FLOAT) >= $MaxPrice ".
        "ORDER BY RAND() ".
        "LIMIT 1"

/////////////////////////////////////////
//Connect to the database
$Conn = mysql_connect($ServerName, $Username, $Password); $DBName);
@mysql_select_db($DBName) or ("Database not found");

/////////////////////////////////////////
// Main
$Result = $Conn->query($SQL);
if(InputValidation($MaxPrice)){
    echo "Food Name/Restaurant/Price<br>";
    while(show_result($Result))
    {
        $Result = $Conn->query($SQL);
    }
} 


/////////////////////////////////////////
// Functions
function show_result($Result)
{
    global $MaxPrice;
    if($Result->num_rows > 0)
    {
        $row = $Result->fetch_assoc();
        echo $row[$CFoodName]." ".$row[$CRestName]." ".$row[$CFoodPrice]."<br>";
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
        echo "Food Max Price is not a number value larger than 0!"
    }
    return $Result
}
?>