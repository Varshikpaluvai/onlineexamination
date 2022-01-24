<?php
session_start();
$user='root';
$host='localhost';
$pass='';
$database='onlineexam';
$error='';
try{
	$con= new PDO("mysql:host=$host;dbname=$database;",$user,$pass);
	}
catch(PDOException $e)
{
die("conection failed".$e->getMessage());
}
if(!empty($_POST['logex'])&&!empty($_POST['pasex']))
{
$ch=$con->prepare('SELECT username,password FROM signup where username=:username');
$ch->bindparam(':username',$_POST['logex']);
$ch->execute();
$re=$ch->fetch(PDO::FETCH_ASSOC);
echo $_POST(['username']);
                                                                   
																	
			
}
