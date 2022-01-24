
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
$mysql_host='localhost';
 $mysql_user='root';
 $mysql_password='';
  if(!@mysql_connect($mysql_host,$mysql_user,$mysql_password))
 {
	 die('connot connect to database');
 }
 else{
  if(mysql_select_db('onlineexam'))
	 {
	 }
 }
if(!empty($_POST['eexamid'])&&!empty($_POST['password']))
{
$ch=$con->prepare('SELECT examid,passwords FROM examloginid where examid=:examid');
$ch->bindparam(':examid',$_POST['eexamid']);
$ch->execute();
$re=$ch->fetch(PDO::FETCH_ASSOC);
$ex=$_POST['eexamid'];
if(count($re) > 0 && password_verify($_POST['password'],$re['passwords']))
{
	
$sql = "INSERT INTO examlogged(eexamid,password) VALUES (:eexamid,:password)";
	  $stmt = $con->prepare($sql);
	  $stmt->bindparam(':eexamid',$_POST['eexamid']);
	  $stmt->bindparam(':password', password_hash($_POST['password'],PASSWORD_BCRYPT));
	  $delete="delete examid,passwords from examloginid where examid=:'$ex'";
	  $r=$con->prepare($delete);
	  $r->execute();
	  $stmt->execute();
	  
	header('Location:q1.php');
  }
else{
$error='Error: Entered username or password is wrong';
}
}

?><html>
<body><head>
<style>
marquee{
	background-color:black;
	   }
	   h4{
		   background-color:red;
		   color:white;
		   font-size:20px;
		   font-family:helvetica;
		   cursor:default;
	   }
	   h3{
		  cursor:default;
	   }
</style>
</head>
<form action="enterexam.php" method="post">
<div align="center"></br></br></br></br>
<marquee width="100%"><font size="5" color="white">Enter Exam LoginId</font></marquee>
<h3>ExamId&nbsp;:&nbsp;&nbsp;<input type="text"autocomplete="off"  name="eexamid"></h3>
<h3>password&nbsp;:&nbsp;<input type="password"  maxlength="8" autocomplete="off"  name="password"></h3>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="location.href='enterexam.php';"value="clear" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="SignIn">
</form>
</div>
<?phpif(!empty($error)):?>
<h4 align="center"><?=$error?></h4>
<?phpendif;?>
</body>
</html>