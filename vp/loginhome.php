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
<style>
p{
	font-size:20px;
	
	
}
h1{
	cursor:default;
}
.mySlides
 {
 display:none;
 cursor:default;
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
 img {
	    position:relative;
		left:-8px;
		top:-10px;
		
 }
</style>
</head>
<body>
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
<div id="slideshow">
  <img class="mySlides" src="ss1.png" width="1365" height="500">
  <img class="mySlides" src="ss2.png" width="1365" height="500">
  <img class="mySlides" src="ss3.png" width="1365" height="500">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</form>
</body>
</html>
