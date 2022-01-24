
<?php
session_start();
$user='root';
$host='localhost';
$pass='';
$database='onlineexam';
$error='';
try{
	$con= new PDO("mysql:host=$host;dbname=$database;",$user,$pass);
	echo "sucess";
}	
catch(PDOException $e)
{
die("conection failed".$e->getMessage());
}
if(!empty($_POST['custname'])&&!empty($_POST['address']))
{
$sql = "INSERT INTO cd (custname,address) VALUES (:custname,:address)";
	  $stmt = $con->prepare($sql);
	  $stmt->bindparam(':custname',$_POST['custname']);
	  $stmt->bindparam(':address',$_POST['address']);
	$stmt->execute();
	
}
?>


<html>
<head>
<link type="text/css" rel="stylesheet" href="stylesheet5.css"/>
<title>Result</title>
</head>
<body>
<form action="bn.php" method="post">
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
<h3>
Please enter the following details:
</h3>
<p>1.Name: <input type="text" name="custname"></p>
<p>2.Address: <input  type="text"name="address"></p>
<p>3.Phone Number: <input type="text" name="phno"></p>
<p>4.Age: <input  type="text" name="age"></p>
<input type="submit" value="submit">
</div>
</div></form>
</body>
</html>