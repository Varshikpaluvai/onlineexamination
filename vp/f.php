<?php
session_start();
$user='root';
$host='localhost';
$pass='';
$database='irctc';
$error='';
try{
	$con= new PDO("mysql:host=$host;dbname=$database;",$user,$pass);
}	
catch(PDOException $e)
{
die("conection failed".$e->getMessage());
}
if(!empty($_POST['submit']))
{
if(!empty($_POST['username']))	
{
$sql = "INSERT INTO f (username) VALUES (:username,)";
	  $stmt = $con->prepare($sql);
	  $stmt->bindparam(':username',$_POST['username']);
	 }
}
	 ?>
	 <html>
	 <body>
	 <input type="text" name="username">
	 <input type="submit" value="enter">
	 
	 </body>
	 </html>
	 