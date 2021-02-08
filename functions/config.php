<?php

/*Database Credentials*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'lms_db');

$server_name = 'localhost';
$db_username = 'root';
$password = '';
$name = 'lms_db';

$mysqli = new mysqli($server_name, $db_username, $password, $name);

//Check connection
if($mysqli === false){
    die("Error: Could not connect. " .$conn->connect_error);
}

?>