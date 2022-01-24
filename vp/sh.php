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
 }$query="SELECT *FROM cd";
if($is_query_run=mysql_query($query))
{
	while($query_excute=mysql_fetch_assoc($is_query_run))
	{
		$name=$query_excute['custname'];
$address=$query_excute['address'];		
	}
}?>
<html>
<head>
<title>Staff Details</title>
<body>
<table width="70%" cellpadding="5" cellspace="5">

<tr>
	<td><?php echo $name;?></td>
	<td><?php echo $address;?></td>
	
</tr>
</body>
</html>
