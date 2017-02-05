<html>
    <?php
    /////////////////////////////////////////
    // Database Variables
    $DBName         = "";
    $ServerName     = "";
    $UserName       = "";
    $Password       = "";
    $Conn           = "";
    $TableName      = "";
    
    /////////////////////////////////////////
    // Column Variables
    $CFoodName       = "";
    $CRestName       = "";
    $CFoodPrice      = "";
    
    /////////////////////////////////////////
    // Functions
    function InputValidation($Input)
    {
        $Result = false;
        if(is_numeric($Input))  $Result = true;
        if($Input > 0)          $Result = true;
        
        if(!Result)
        {
            echo "Food Max Price is not a number value larger than 0!"
        }
    }
    ?>
</html>