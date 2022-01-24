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
if(!empty($_POST['firstname'])&&!empty($_POST['lastname'])&&!empty($_POST['dob'])&&!empty($_POST['phno'])&&!empty($_POST['emailid']))
{
$sql = "INSERT INTO rgs (firstname,lastname,dob,phno,emailid,gender,graduation,degree,country) VALUES (:firstname,:lastname,:dob,:phno,:emailid,:gender,:graduation,:degree,:country)";
	  $stmt = $con->prepare($sql);
	    $stmt->bindparam(':firstname',$_POST['firstname']);
		 $stmt->bindparam(':lastname',$_POST['lastname']);
		  	$stmt->bindparam(':gender',$_POST['gender']);
			$stmt->bindparam(':dob',$_POST['dob']);
			$stmt->bindparam(':graduation',$_POST['graduation']);
			$stmt->bindparam(':degree',$_POST['degree']);
			$stmt->bindparam(':country',$_POST['country']);
	  $stmt->bindparam(':phno', $_POST['phno']);
	   $stmt->bindparam(':emailid', $_POST['emailid']);
			 if( $stmt->execute())
	  {
		 header('Location:payment.php');
	  }
		 
} 
?>