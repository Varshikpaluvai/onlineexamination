
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
h2{
background-color:black;
position:relative;
		left:-8px;
		width:101%;
cursor:default;}
a{
text-decoration:none;}
h3{
	color:black;
	font-size:15px;
	font-family:helvetica;
	cursor:default;
	
}
 a:hover{
	 
	 text-shadow:4px 1px 0.5px red;
 }
 h1{
 cursor:default;}
 controls{
	 cursor:pointer;
 }
</style>
<form action="apptitude.php" method="post">
<body><h1><font size ="15" color="orange">ONLINE</font><font size ="15" color="purple"> APTITUDE</font><font size="15" color="orange">TEST</h1></font>


<p><font color="black">Username:</font><font color="blue"><?php echo $name;?></font></p>

<div align="right">
<h2><a href="loginhome.php" title="Home Page"><font color="white">Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="about.php" title="About Website"><font color="white">About</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="application.php" title="Register For Exam Here"><font color="white">Register</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="apptitude.php" title="Easy for exam"><font color="white">Aptitude</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="accept.php" title="Exam Login Potral"><font color="white">Exam</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="logsin.php"><font color="white">Logout</font></h2></a>
</div>
<h1>WANT SOME DIRECTIVES TO EXCELL IN THIS TEST?</h1>
<h3>Here are some preferences :</h3>
<a  href="http://www.math-shortcut-tricks.com/quantitative-aptitude-math-shortcut-tricks/ref=">Math-shortcut-tricks</a><br>
<a  href="http://www.bankaspire.in/p/ebook.html">Shortcut-trics(Bankaspire)</a><br>
<a  href="http://www.careerarm.com/437-quantitative-aptitude-formulas-shortcuts/">formulas-shortcuts(careerarm)</a><br>
<a  href="http://www.bankexamstoday.com/2013/07/quantitative-aptitude-preparation.html">aptitude-preparation(bankexamstoday)</a><br>
<a  href="http://www.gr8ambitionz.com/p/aptitude-topics-for-bank-exams.html">aptitude-topics</a>
</br></br>
<div id="i">
<h3>Here are few videos which improves your Aptitude Skills and helpful in your exam!!</h3>
<video width="440" height="250" controls>
<source src="Shortcut Maths Tricks for Competitive Exam - Problems On Ages Related - YouTube (1).mp4">
</video>
<video width="440" height="250" controls>
<source src="Speed distance math problem trains in opposite direction - Concepts and Tricks.mp4">
</video>
<video width="440" height="250" controls>
<source src="Number Pattern ,Series and Puzzles - Tricks and Solutions - 1, 2, 6, 15, 31, ___.mp4">
</video>
</div>
</form>
</body>
</html>