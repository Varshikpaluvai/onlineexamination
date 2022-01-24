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
if(!empty($_POST['firstname'])&&!empty($_POST['lastname'])&&!empty($_POST['dob'])&&!empty($_POST['phno'])&&!empty($_POST['emailid'])&&($_POST['mail']!='-select-')&&($_POST['country']!='-select-')&&($_POST['degree']!='-select-'))
{
$sql = "INSERT INTO rgs (firstname,lastname,dob,phno,emailid,gender,graduation,degree,country,mail) VALUES (:firstname,:lastname,:dob,:phno,:emailid,:gender,:graduation,:degree,:country,:mail)";
	  $stmt = $con->prepare($sql);
	    $stmt->bindparam(':firstname',$_POST['firstname']);
		 $stmt->bindparam(':lastname',$_POST['lastname']);
		  	$stmt->bindparam(':gender',$_POST['gender']);
			$stmt->bindparam(':dob',$_POST['dob']);
			$stmt->bindparam(':graduation',$_POST['graduation']);
			$stmt->bindparam(':degree',$_POST['degree']);
			$stmt->bindparam(':country',$_POST['country']);
	  $stmt->bindparam(':phno', $_POST['phno']);
	  $stmt->bindparam(':mail', $_POST['mail']);
	   $stmt->bindparam(':emailid', $_POST['emailid']);
			 if( $stmt->execute())
	  {
		 header('Location:payment.php');
	  }
		 
} 
?>
<html>
<head>
<style>
h4{color:black; 
cursor:default;}
input[type="text"]{color:black;
}
  h1{color:white;
  cursor:default;}
  body{background-size:100%;}
  h2{color:black;
 cursor:default; }
</style>
</head>
<body background="reg.jpg">
<form action ="application.php" method="post">
<div align="right"></br></br>
<h2>Online Apttitude Test Exam Registration Form</h2>
<h1><input type="text" name="firstname" autocomplete="off" placeholder="Firstname" onkeyup="lettersonly(this)">&nbsp;&nbsp;<input type="text" name="lastname"placeholder="Lastname"  autocomplete="off" onkeyup="lettersonly(this)"></h1>
<h4>Gender:<input type="radio" name="gender" value="M">Male<input type="radio" name="gender" value="F">Female</h4>
<h4>Date Of Birth:
<input type="date" name="dob" value="01/01/1995" ></h4>
<h4>Select your country
<select name="country">
<option>-select-</option>
<option value="India">India</option>
<option value="Others">others</option>
</select></h4>
<h4>Qualification:<input type="radio" name="graduation" value="UG">UG<input type="radio" name="graduation" value="PG">PG
<select name="degree">
<option>-select-</option>
<option value="B.tech">B.TECH</option>
<option value="Others" >OTHERS</option>
</select></h4>
<script>
function numbersonly(input)
{
	
	var z=/[^0-9]/gi;
	
	input.value=input.value.replace (z,"");
	

}
</script>
<script>
function lettersonly(input)
{
	
	var x=/[^a-z]/gi;
	input.value=input.value.replace (x,"");

	
}
</script>
<h4><input type="text" maxlength="10" autocomplete="off" name="phno" placeholder="contact number" onkeyup="numbersonly(this)"></h4>
<h4><input type="text" autocomplete="off" name="emailid" maxlength='100' placeholder="Email-Id">
<select name="mail" >
<option>    -select-  </option>
<option value="gmail.com">gmail.com</option>
<option value="yahoo.com" >yahoo.com</option>
<option value="orkut.com" >orkut.com</option>
</select></h4>
<input type="submit"  value="submit">
<input type="button" name="clr" onclick="location.href='application.php';" value="reset">
<input type="button" name="cancel" onclick="location.href='loginhome.php';" value="cancel">
</div>
</form>
</body></html>
