<?php

session_start();
$user='root';
$host='localhost';
$pass='';
$database='onlineexam';
try{
	$con= new PDO("mysql:host=$host;dbname=$database;",$user,$pass);
	}
catch(PDOException $e)
{
die("conection failed".$e->getMessage());
}
?>
