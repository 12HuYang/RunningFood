<html>
    <?php
    /////////////////////////////////////////
    // Database Variables
    $DBName         = "";
    $ServerName     = "";
    $UserName       = "";
    $Password       = "";
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
            "WHERE $CFoodPrice >= $MaxPrice ".
            "ORDER BY RAND() ".
            "LIMIT 1"
    
    /////////////////////////////////////////
    // Connect to the database
    $Conn = new mysqli($ServerName, $Username, $Password, $DBName);
    
    if($Conn->connect_error){
        die("Connection failed: " . $Conn->connect_error);
    }
    
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
            $MaxPrice -= $row[$CFoodPrice];
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
</html>