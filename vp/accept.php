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
 $query="SELECT *FROM logged";
if($is_query_run=mysql_query($query))
{
	while($query_excute=mysql_fetch_assoc($is_query_run))
	{
		$name=$query_excute['logex'];	
	}
}

if(!empty($_POST['p']))
{
	$ch=$con->prepare("SELECT p FROM p");
	$ch->execute();
	
$re=$ch->fetch(PDO::FETCH_ASSOC);
					if(count($re) > 0 &&($_POST['p']==$re['p'])){
					
                                                                       header('Location:enterexam.php');
                                                                    }
																	else{
																			$error='To attempt exam accept terms and conditions';
																		}
}
?>
<html><head>
<style>
radio{
	cursor:pointer
}
p{
	font-size:20px;
	color:black;
	position:relative;
	
}
 h2{
	  position:relative;
		left:-8px;
		width:101%;
 background-color:black;
 cursor:default;

 }
 a:hover{
	 
	 text-shadow:4px 1px 0.5px red;
 }
 a{
	 text-decoration:none;
 }
 #text{
		position:relative;
		left:-8px;
		width:101%;
	background-color:gray;
	cursor:default;
	}
	h4{
color:white;
font-size:20px;	}
	</style>
</head>
<body>
<form action="accept.php" method="post">
<div>
<h1><font size ="15" color="orange">ONLINE</font><font size ="15" color="purple"> APTITUDE</font><font size="15" color="orange">TEST</h1></font>
</div>


<p><font color="black">Username:</font><font color="blue"><?php echo $name;?></font></p>

<div align="right">
<h2><a href="loginhome.php" title="Home Page"><font color="white">Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="about.php" title="About Website"><font color="white">About</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="application.php" title="Register For Exam Here"><font color="white">Register</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="apptitude.php" title="Easy for exam"><font color="white">Aptitude</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="accept.php" title="Exam Login Potral"><font color="white">Exam</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="logsin.php"><font color="white">Logout</font></h2></a>
</div></br>
<div id="text">
<p align="left">
<br>Rules To Be Followed
</br>
1)Finish your exam before the time given which will be displayed on the top right of the test.</br>
2)Before exam,you can prepare from the sites and videos we prefered in the Aptitude.</br>
3)Each Question holds 10 points.</br>
4)No Negative marks given.</br>
5)You cant leave the exam in middle if you leave,exam will not be continued and starts from beggining.</br>
6)Make sure that you have entered the correct password which was given while registration by yourself.</br></p><br><br>
<p class="y"><input type="radio" name="p" value="y">I Accept the Terms and conditions of OAT policy</br>
<input type="radio" name="p" value="n">No I dont Accept the terms and conditions of OAT Policy</p>
<input type="submit" value="submit">
<center>
<?phpif(!empty($error)):?>
<h4><?=$error?></h4>
<?phpendif;?></br></br></center>
</div>
</form>
</body>
