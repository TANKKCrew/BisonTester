<?php 
header('Content-type: text/html; charset=utf-8');
/*$servername = "mysql2.000webhost.com";
$dbname = "a6867229_bgfarme";
$username = "a6867229_team";
$password = "team123";
*/
$servername = "localhost";
$dbname = "bison_tester";
$username = "root";
$password = "";

$connection = mysqli_connect($servername, $username, $password, $dbname) or die('Error connecting to the server!!!');

if (!$connection->set_charset("utf8"))
{
    //printf("Error loading character set utf8: %s\n", $connection->error);
} 
else 
{
    //printf("Current character set: %s\n", $connection->character_set_name());
}
     
if (!$connection) 
{
    die("Connection failed: " . mysqli_connect_error());
}



/*$sql = "SELECT id, firstname, lastname, email, description FROM team";
$result = mysqli_query($connection, $sql);


if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
    {
       $firstname = $row["firstname"];
       $lastname = $row["lastname"];
       $email = $row["email"];
       $description = $row["description"];
       echo '<br>';
       echo $firstname . " " . $lastname . " " . $email . " " . $description . "<br>";
    }
} 
else 
{
    echo "0 results";
}

mysqli_close($connection);
*/ 



?>