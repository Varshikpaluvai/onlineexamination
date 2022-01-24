<?php

session_start();
$user='root';
$host='localhost';
$pass='';
$database='onlineexam';
$error=$name='';
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
$query="SELECT max(id)FROM signup";
if($is_query_run=mysql_query($query))
{
	while($query_excute=mysql_fetch_assoc($is_query_run))
	{
		$name=$query_excute['max(id)'];	
	}
}
if(!empty($_POST['logex'])&&!empty($_POST['pasex']))
{	
$ch=$con->prepare("SELECT username,password FROM signup where username='$_POST[logex]'");

$ch->execute();
$re=$ch->fetch(PDO::FETCH_ASSOC);
					if(count($re) > 0 && password_verify($_POST['pasex'],$re['password'])){
					$sql = "INSERT INTO logged (logex,pasex) VALUES (:logex,:pasex)";
	  $stmt = $con->prepare($sql);
	  $stmt->bindparam(':logex',$_POST['logex']);
	  $stmt->bindparam(':pasex', password_hash($_POST['pasex'],PASSWORD_BCRYPT));
	  $stmt->execute();
                                                                       header('Location:loginhome.php');
                                                                    }
																	else{
																			$error='username or password is wrong!';
																		}
}

?>

<html>
<head><style>h2{color:black;
cursor:default;}
h1{color:black;

cursor:default;}
p{
	position:relative;
	
	color:red;
	font-size:20px;
	cursor:default;
	
}
marquee{color:brown;
cursor:default;}
  body{background-size:100%;}
	summary{
		font-size:20px;
		text-decoration:none;
        	}
			summary:hover{
				text-shadow:1px 1px 0.5px blue;
				cursor:pointer;
				
				
			}
	li{
	    color:white;
		font-size:20px;
		cursor:default;
		}
	p.i{
		background-color:transparent;
	}
	#q{
		background-color:#212F3D;
	}
	#y{
		background-color:#212F3D;
	}
	b{
		color:white;
	}
</style>
</head>
<body >
<script>
	function nsonly(input)
{
	
	var z=/[^! ^@ ^# ^$ ^% ^^ ^& ^* ^a-z ^0-9]/gi;
	
	input.value=input.value.replace (z,"");

}
function lettersonly(input)
{
	
	var x=/[^a-z ^_ ^0-9]/gi;
	input.value=input.value.replace (x,"");

}
</script>
<form action="logsin.php" method="post">
<div align="center">
<div id="q">
<h1><font color="white">Online </font><font color="white">Aptitude </font><font color="white">Examination Site</font></h1></br></div>
</div>
<marquee width="75%" ><h3>WELCOME TO ONLINE APTITUDE EXAMINATION WEBSITE!!</h3></marquee>
<div align="center">
</br>
<h2>Username:
<input type="text" name="logex" autocomplete="off" placeholder="login" onkeyup="lettersonly(this)" requiredautofocus="asdsd">
</h2>
<h2>password:
<input type="password" name="pasex" autocomplete="off" placeholder="password" onkeyup="nsonly(this)"></br>
</h2>
<?phpif(!empty($error)):?>
<p><?=$error?></p>
<?phpendif;?>
<h3>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="location.href='signup.php';" value="Signup">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="las"  value="Login"></form>
</br></br></br></br></br></br></br></br>
</h3>
</div>
<div id="y">
<details>
<Summary><b>OAT Account Registration</b></summary>
<ul>
<li>First you must have an existing account in OAT</li>
<li>If You do not have an existing account then register now!!</li>
</ul>
</details> </br>
<details>
<summary><b>Online Exam</b></summary>
<ul>
<li>This Exam Is Based On Your Aptitude Skills</li>
<li>By Attempting This Exam You Can Improve Your Skills</li>
<li>This exam contains full of logical questions regarding day to day life</li>
<li>No Negative Marks for attempting any wrong question</li>
</ul>
</details></br>
<details>
<summary><b>Exam Fee</b></summary>
<ul>
<li>This online exam is not free of cost</li>
<li>Fee for attempting this exam for one time is 1000/-</li>
<li>Fee can be paid through any debit or credit card</li>
</ul>
</details></br>
<details>
<summary><b>Exam Potral</b></summary>
<ul>
<li>Exam Login will Be created By You</li>
<li>you have to login for exam potral with your Exam Login Id And password</li>
<li>Exam duration will be 1 hour</li>
</ul>
</details>
<p align="left" class="i"><font color="white">Number of hits count:<?php echo $name;?>/100</font></p></div>
</body>
</html>