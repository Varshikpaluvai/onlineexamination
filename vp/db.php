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

{
	$is=$_POST['username'];
	$q="select * from signup where username=:username";
	$r=$conn->prepare($q);
	$e=$r->execute(array(':username'=>$is));
	if($e)
	{
		if($r->rowcount()>0)
		{
			foreach($r as $row)
			{
				$is=$row['username'];
				
			}
		}
	
	}
	
}
?>