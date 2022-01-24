<html>
<body>
<form method="post">
<input type="radio" name="q1" value="male">Male
<input type="submit" name="submit" value="save">
</form></body></html>
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
	$q="insert into ss(q1) values(:q1)";
	$s=$con->prepare($q);
	$s->bindparam(':q1',$_POST['q1']);
	if($s->execute())
	{
		echo "saved";
	}
?>