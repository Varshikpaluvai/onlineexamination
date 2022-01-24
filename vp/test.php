
<?php
session_start();
$user='root';
$host='localhost';
$pass='';
$database='newaccount';
$error='';
try{
	$con= new PDO("mysql:host=$host;dbname=$database;",$user,$pass);
	
}
	
catch(PDOException $e)
{
die("conection failed".$e->getMessage());
}
if(isset($_POST['next']))
{
	
	$sql = "INSERT INTO radio(varshik) VALUES (:varshik)";
	$stm=$con->prepare($sql);
	$stm->bindparam(':varshik',$_POST['varshik']);
}
?>
<html>
<body>
<script>
function lettersonly(input)
{
	
	var z=/[^a-z][]/gi;
	input.value=input.value.replace (z,"");

}
</script>
<form action="test.php" method="post">
<input type="text" name="varshik" onkeyup="lettersonly(this)">
<input type="button" name="next" value="submit">
</body>
</html>

