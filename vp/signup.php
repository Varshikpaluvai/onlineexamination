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
if(!empty($_POST['username'])&&!empty($_POST['password']))
{
$sql = "INSERT INTO signup (username,password) VALUES (:username,:password)";
	  $stmt = $con->prepare($sql);
	  $stmt->bindparam(':username',$_POST['username']);
	  $stmt->bindparam(':password', password_hash($_POST['password'],PASSWORD_BCRYPT));
	  	 if(($_POST['password'])==($_POST['confpassword']))
		 {
			 if( $stmt->execute())
	  {
		 $error='sucessfully registered press login to view your account';
	  }
		 }
	  else{
		  $error ='Error: Password and Confirmpassword fields does not match';
	  }
		 
}
?>

<html>
<head>
<style>
h2{
	color:white;
    background-color:purple;
}
h2.black{
	color:white;
    background-color:black;
	}

body{
	background-size:115%;

}
p{
	color:red;
	font-size:25px;
	font-family:helvetica;
	
}
h3{
	color:black;
}
h4{
	color:red;
	font-size:18px;
	
}
body{
	background-color:black;
}
p.i{
	
	font-size:20px;
}

 summary:hover{
	 
 text-shadow:1px 1px 0.5px white;
 cursor:pointer;
 }

</style>
</head>
<body>
<script>
	function nsconly(input)
{
	
	var z=/[^! ^@ ^# ^$ ^% ^^ ^& ^* ^a-z ^0-9]/gi;
	
	input.value=input.value.replace (z,"");

}

function lettersonly(input)
{
	
	var x=/[^_ ^0-9 ^a-z]/gi;
	input.value=input.value.replace (x,"");

}
</script>
</br>
<form action="signup.php" method="post">
<div align="center" id="text">
<div style="background-color:white;width:500px;padding:30px;margin:30px;opacity:0.85;filter:alpha(opacity=50);">
<h2 class="black">Create Account in OAT!</h2><details align="right">
<summary><b>SignUp Policy</b></summary>
<ul>
<li>only characters of uppercase and lower case and only underscore('_')for Username</li>
<li>special characters like"!,@,#,$,%,^,&,*" and Numeric values and characters of upper and lower case for password</li>
</ul></details>
<h3>Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"autocomplete="off"  name="username"onkeyup="lettersonly(this)" re></h3>
<h3>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" autocomplete="off" name="password" onkeyup="nsconly(this)"></h3>
<h3>confirmPassword:<input type="password" name="confpassword"autocomplete="off"  onkeyup="nsconly(this)"></h3>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="SignIn" >&nbsp;&nbsp;&nbsp;
<input type="button" onclick="location.href='logsin.php';"value="cancel" ></div>&nbsp;&nbsp;&nbsp;
<?phpif(!empty($error)):?>
<h4><?=$error?></h4>
<?phpendif;?>
<div align="center">
<input type="button" name="back" value="login now!" onclick="location.href='logsin.php';"></div>
</div>
</body>
</html>