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
if(isset($_POST['update']))
{
$username=$_POST['oldname'];
$newpass=$_POST['newpass'];
echo $username,$newpassword;
$sql="update signup SET password='$newpass' where username='$username'";
}
?>
<html>
<body>
<form method="edit.php" action="post">
<input type="text" name="oldname">
<input type="text" name="newpass">
<input type="submit" name="update" value="update">
</form>
</body>
</html>