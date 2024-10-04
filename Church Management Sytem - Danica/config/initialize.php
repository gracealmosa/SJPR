<?php
//we will require the two files above to be included in our initialization
require_once('config/classes/database.php');
require_once('config/classes/session.php');
require_once('config/classes/htmlclass.php');

// Database configuration
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'sjprepository';
// Create database connection
$database = new Database;
$database->db_connect("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
$session=new Session;


?>
