
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
 $query="SELECT *FROM buynow";
if($is_query_run=mysql_query($query))
{
	while($query_excute=mysql_fetch_assoc($is_query_run))
	{
		$name=$query_excute['name'];	
		$age=$query_excute['age'];	
		$sex=$query_excute['sex'];	
		$breed=$query_excute['breed'];
        $price=$query_excute['price'];			
	}
}
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="stylesheet4.css"/>
<title>Result</title>
</head>
<body>
<div id="header">
<div id="navbar">
<ul>
<li><a href="file:///C:/Users/Harshadeep/Desktop/Pet%20Heaven/Home.html">Home</a></li>
<li><a href="file:///C:/Users/Harshadeep/Desktop/Pet%20Heaven/About%20Me.html">About Me</a></li>
<li><a href="file:///C:/Users/Harshadeep/Desktop/Pet%20Heaven/Support.html">Support</a></li>
<li><a href="file:///C:/Users/Harshadeep/Desktop/Pet%20Heaven/Contact%20Us.html">Contact</a></li>
</ul>
</div>
<h2>Puppy Heaven</h2>
</div>
<div id="center">
NAME:<?php echo $name;?> </br>
AGE:<?php echo $age;?> </br>
SEX:<?php echo $sex;?> </br>
BREED:<?php echo $breed;?> </br>
PRICE:<?php echo $price;?> </br>
</div>
<div id="left">
<img src="https://s3.amazonaws.com/codecademy-blog/assets/puppy-1_zps5666b8e7.jpg"/>
</div>
<div id="right">
<table>
<th colspan="3">Our Puppies</th>
<tr>
<td><img src="https://s3.amazonaws.com/codecademy-blog/assets/puppy-1_zps5666b8e7.jpg"/></td>
<td><img src="https://s3.amazonaws.com/codecademy-blog/assets/puppy-2_zps1539e6b2.jpg"/></td>
<td><img src="https://s3.amazonaws.com/codecademy-blog/assets/puppy-3_zps4692eafa.png"/></td>
</tr>
<tr>
<td><img src="https://s3.amazonaws.com/codecademy-blog/assets/puppy-4_zps63ff5aa8.jpg"/></td>
<td><img src="https://s3.amazonaws.com/codecademy-blog/assets/puppy-5_zps0ee0d2c8.jpg"/></td>
<td><img src="https://s3.amazonaws.com/codecademy-blog/assets/puppy-6_zpsc4450a60.jpg"/></td>
</tr>
<tr>
<td><img id="bottom_left" src="https://s3.amazonaws.com/codecademy-blog/assets/puppy-7_zps26e8a8d9.jpg"/></td>
<td><img src="https://s3.amazonaws.com/codecademy-blog/assets/puppy-8_zps9a1469be.jpg"></td>
<td><img id="bottom_right" src="https://s3.amazonaws.com/codecademy-blog/assets/puppy-9_zps3bab7732.jpg"/></td>
</tr>
</table>
</div>
<div id="footer">
<div id="button">
<p><a href="file:///C:/Users/Harshadeep/Desktop/Pet%20Heaven/Buy%20Now.html">Buy <span class="bold">Now</span>
</a></p>
</div>
</div>
</body>
</html>