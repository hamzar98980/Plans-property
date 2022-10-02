<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'agency';

$con = new mysqli($host , $username , $password , $database);
if($con-> connect_error)
{
	die('Connection error');
}

?>