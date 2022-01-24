
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
$name='';
$age='';
if(!empty($_POST['username'])&&!empty($_POST['age']))
{

	  $name=($_POST['username']);
	  $age=($_POST['age']);
	  }

?>
<html>
<body>
<form action="testtt.php" method="post">
<input type="text" name="username">
<input type="text" name="age">
<input type="submit">
<p><?php echo $name;?></p>
<p><?php echo $age;?></p>
</body>
</html>