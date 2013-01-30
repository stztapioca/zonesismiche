
<?php
$host = "localhost";  
    $user = "root";  
    $password = "st3f4n0";  
    $database = "youarelester";  
    //$param = $_GET["term"];  
    //make connection  
    $server = mysql_connect($host, $user, $password);  
    $connection = mysql_select_db($database, $server);  
    //query the database  
    $query = mysql_query("SELECT * FROM users ");  
    //build array of results  
    for ($x = 0, $numrows = mysql_num_rows($query); $x < $numrows; $x++) {  
        $row = mysql_fetch_assoc($query);  
        $friends[$x] = array("value" => $row["name"]);  
    } 
	
//print_r($friends);
echo json_encode($friends);
?>
