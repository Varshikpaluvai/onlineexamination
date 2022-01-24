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

?>
<html>
<head>
<style>
   p{
  font-size:20px;
  cursor:default;
    }
	h2.a{
	color:white;
	background-color:purple;
	    }
	#text{
		position:relative;
		left:-8px;
		width:101%;
	background-color:gray;
	cursor:default;
	}
	p.s{
	color:white;
	   }
h2{
	position:relative;
		left:-8px;
		width:101%;
   background-color:black;
   cursor:default;
  }
  a{
	 text-decoration:none;
 }
  a:hover{
	 
	 text-shadow:4px 1px 0.5px red;
 }
 h1{
	 cursor:default;
 }
</style>
</head>
<body>
<h1><font size ="15" color="orange">ONLINE</font><font size ="15" color="purple"> APTITUDE</font><font size="15" color="orange">TEST</font></h1>


<p><font color="black">Username:</font><font color="blue"><?php echo $name;?></font></p>

<div align="right">
<h2><a href="loginhome.php" title="Home Page"><font color="white">Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="about.php" title="About Website"><font color="white">About</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="application.php" title="Register For Exam Here"><font color="white">Register</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="apptitude.php" title="Easy for exam"><font color="white">Aptitude</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="accept.php" title="Exam Login Potral"><font color="white">Exam</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="logsin.php"><font color="white">Logout</font></h2></a>
</div>
</br>
<h2 class="a">ABOUT</h2>
<font color="black"><p>In today's competitive world we have to face various tests on every stage of life, some have much more importance and become very important part of our life as it decides course of our life. Many youngsters plan for competitive exams but due to some reasons people don’t get enough time to prepare. We have to read through many reference books, guides, etc to prepare and score well in competitive exams. Considering all these things we have come up with simple and fast website onlineapptitudetest.com which is easy to access for everyone.

To be successful people should follow perfect study method and practice rigorously and regularly. People need to handle many question sets and books to practice, but just imagine if you get practice tests on just few clicks? Keeping this as our goal we have come up with "onlineapptitudetest.com" a website for online practice tests. There are various tests available for MPSC, UPSC, TET, NET, SET, SSC, RRB, IBPS, and Quantitative Aptitude Exams etc. We have exams available in two languages for now i.e. in Marathi (Regional Language) and English, we are planning to include more exams and regional languages in future.

GoPract.com website gives you 10 Marks tests with multiple choice questions. There will be new question set Every time you take a test. Your score will be calculated and displayed immediately after you submit test, and correct answers will be displayed for wrong answers.

Small test will help you to solve maximum questions and see correct answers. "onlineapptitudetest.com"is responsive website and you can take tests on your mobile devices also. There is no need for registration or providing your contact details, email id or phone number. You can take as many tests as you can and totally free of charge.

We wish to reach to maximum people to provide practice tests for all type on competitive exams. We wish you all the best for you bright future</p></font>
<div id="text" align="center">
<hr>
<p class="s">contact us:OAT@gmail.com<p>
<p class="s">Phone No:9014458952</p>
</br>
</div>
</body>
</html>
