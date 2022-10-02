<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'agency';

$conn = new mysqli($host , $username , $password , $database);
if($conn-> connect_error)
{
	die('Connection error');
}

?>