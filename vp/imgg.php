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
if(isset($_POST['im']))
{
$sql="insert into ss(image) values(:image)";
$sq=$con->prepare($sql);
$sq->bindparam(':image',$_POST['image']);
$sq->execute();
}
?>
<html>
<body>
<form action="imgg.php" method="post">
<input type="file" name="image" value="Choose Profile">
<input type="submit" name="im" value="submit">
</form>
</body>
</html>