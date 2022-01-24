<?php 
session_start();
$user='root';
$host='localhost';
$pass='';
$database='onlineexam';
$error='';
$id=$name="";
try{
	$con= new PDO("mysql:host=$host;dbname=$database;",$user,$pass);
	}
catch(PDOException $e)
{
die("conection failed".$e->getMessage());
}
if(isset($_POST['submit']))
{
	header("Location:b.php");
$id=$_POST['subid'];
$q="select * from books where subid=:subid";
$r=$con->prepare($q);
$e=$r->execute(array(':subid'=>$id));

if($e)
{
if($r->rowcount() >0)
{
foreach ($r as $row)
$id=$row['subid'];
$name=$row['bookid'];
}

else
{
	
	$error="no such book is there";
}
}
}
?>
<html>
<body>
<form action="book.php" method="post">
<input type="text" name="subid" value="<?php echo $id;?>">
<input type="text" name="bookid" value="<?php echo $name;?>">
<input type="submit" name="submit">
<?phpif(!empty($error)):?>
<h4><?=$error?></h4>
<?phpendif;?>
</form>
</body>
</html>