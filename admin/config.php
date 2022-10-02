<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'ag_admin';

$con = new mysqli($host , $username , $password , $database);
if($con-> connect_error)
{
	die('Connection error');
}

?>