<?Php

$dbhost_name = "localhost";
$database = "fbhotelk_db";
$username = "fbhotelk_dev";
$password = "I}2,4R_58*1T"; 

/*$connect = mysql_connect($dbhost_name, $username, $password) or die("Database Connection Error");
mysql_select_db($database) or ("Database Selection Error");*/

try {
$dbo = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}


?>