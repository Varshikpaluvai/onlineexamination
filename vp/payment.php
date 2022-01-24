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
if(!empty($_POST['cardno'])&&!empty($_POST['name'])&&!empty($_POST['expdate'])&&!empty($_POST['pin'])&&($_POST['expdate']!='-select-'))
{
$sql = "INSERT INTO payment (cardno,name,expdate,pin,bank) VALUES (:cardno,:name,:expdate,:pin,:bank)";
	  $stmt = $con->prepare($sql);
	  $stmt->bindparam(':bank',$_POST['bank']);
	    $stmt->bindparam(':cardno',$_POST['cardno']);
		 $stmt->bindparam(':name',$_POST['name']);
		  $stmt->bindparam(':expdate',$_POST['expdate']);
	  $stmt->bindparam(':pin', password_hash($_POST['pin'],PASSWORD_BCRYPT));
			 if( $stmt->execute())
	  {
		 header('Location:examid.php');
	  }
		 
	  else{
		  $error = 'fields you have entered are wrong';
	  }
} 
?>
<html>
<head>
<style>
p{
	position:relative;
	left:900px;
	top:-100px;
	color:red;
}
body{background-size:100%;}
</style>
</head>
<body background="card.jpg">
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
<div align="center">
<form action="payment.php" method="post">
</br>
<h1>Welcome to Payment portal</h1>
<h4><input type="radio" name="bank" autocomplete="off"  value="Union Bank">Unionbank<input type="radio" name="bank" value="SBI Bank">SBI Bank<input type="radio" name="bank" value="Andhra Bank">Andhra Bank</h4>
<hr>
<h3><input type="text" name="name" autocomplete="off" placeholder="Name on card"onkeyup="lettersonly(this)"></h3>
<h3><input type="text" name="cardno" maxlength="16" autocomplete="off"  placeholder="Number on card" onkeyup="numbersonly(this)"></h3>
Exp-Date:
<select name="expdate">
<option>    -select-  </option>
<option value="2017">2016</option>
<option value="2018" >2018</option>
<option value="2019" >2019</option>
<option value="2020">2020</option>
<option value="2021" >2021</option>
<option value="2022" >2022</option>
<option value="2023">2023</option>
<option value="2024" >2024</option>
<option value="2025" >2025</option>
</select>


<h3><input type="password"name="pin" maxlength="4" autocomplete="off" placeholder="PIN" onkeyup="numbersonly(this)"></h3>
<input type="submit"  value="submit">
<div></form>
<?phpif(!empty($error)):?>
<p><?=$error?></p>
<?phpendif;?>
</body>
</html>