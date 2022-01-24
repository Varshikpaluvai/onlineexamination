
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
if(!empty($_POST['examid'])&&!empty($_POST['passwords']))
{
$sql = "INSERT INTO examloginid (examid,passwords) VALUES (:examid,:passwords)";
	  $stmt = $con->prepare($sql);
	  $stmt->bindparam(':examid',$_POST['examid']);
	  $stmt->bindparam(':passwords', password_hash($_POST['passwords'],PASSWORD_BCRYPT));
			 if( $stmt->execute())
	  {
		 header('Location:loginhome.php');
	  }
		 
		 else{
		  $error = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: Password and Confirmpassword fields does not match';
	  }
		 
}
?>
<html>
<body><head>
<style>
marquee{
	background-color:black;
	   }
	   p{
		   font-size:20px;
	   }
	  
</style>
</head>
<form action="examid.php" method="post">
<div align="center"></br></br></br></br>
<marquee width="90%"><font size="5" color="white">Create Exam LoginId</font></marquee>
<h3>Exam-Id&nbsp;:&nbsp;&nbsp;<input type="text" autocomplete="off" name="examid"></h3>
<h3>password&nbsp;:&nbsp;<input type="password"  maxlength="8" autocomplete="off" name="passwords"></h3>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="location.href='examid.php';"value="clear" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="SignIn">
</br>
<p><font color="red">
Note:Password will not be re-created so please remember the password !!</font></p>
</br></br></br></br></br></br></br></br></br></br>
</form>
</div>
</body>
</html>