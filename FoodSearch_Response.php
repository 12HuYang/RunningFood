<?PHP
    echo "test";


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
    $CFoodName       = 'foodname';
    $CRestName       = 'restaurant';
    $CFoodPrice      = 'price';

    echo $CFoodName . "\n";
    echo $CRestName . "\n";
    echo $CFoodPrice . "\n";
    
    /////////////////////////////////////////
    // Input Variables


    //Connect to the database
    echo "Connecting...\n";
    $Conn = mysql_connect($ServerName, $UserName, $Password); 
    if(!$Conn) die('Could not connect; ' . mysql_error());
    else mysql_select_db($DBName, $Conn);
    
    //Format POST input
    echo "Formatting inputs...\n";
    echo $_POST['FoodName'];
    echo $_POST['RestName'];
    echo $_POST['FoodTag'];

    $FoodName   = trim($_POST['FoodName']);
    $RestName   = trim($_POST['RestName']);
    $FoodTag    = trim($_POST['FoodTag']);

    $SQL =  "SELECT $CFoodName, $CRestName, $CFoodPrice " . 
            "FROM $TableName " .
            "WHERE (( ($FoodName = \"\") OR ($CFoodName = $FoodName) ) AND " .
            "(($RestName = \"\") OR ($CRestName = $RestName))";
            // Add Tag later
    echo "SQL = " . $SQL;

    echo "Sending string...\n";
    
    $Result = mysql_query($SQL);

    echo "showing result...\n";
    
    show_result($Result);
    
    /////////////////////////////////////////
    // Functions
    /////////////////////////////////////////
    /*
    function format_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    */

    function show_result($result)
    {
        echo "Food Name/Restaurant/Price<br>";
        while($row = mysql_fetch_array($result, MYSQL_BOTH))
        {
            echo $row["foodname"] . " " . $row["restaurant"] . " " . $row["price"] . "<br>";
        }
    }
///////////////////////////////////////// 
?>