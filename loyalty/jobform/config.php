<?Php

$dbhost_name = "localhost";
$database = "fbhotelk_db";
$username = "fbhotelk_dev";
$password = "I}2,4R_58*1T"; 

try {
$dbo = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}


?>