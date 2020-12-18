<?php 
// DB credentials.
define('DB_HOST','localhost');    //define is used to create constants
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','dvdrental');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));  // PDO(PHP Data Objects) is used to access database in PHP
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>