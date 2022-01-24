
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
 $query="SELECT *FROM examlogged";
if($is_query_run=mysql_query($query))
{
	while($query_excute=mysql_fetch_assoc($is_query_run))
	{
		$name=$query_excute['eexamid'];	
	}
}

?>

<html>
<head runat="server">
<style>
h2{
	background-color:;
}
#text{
		position:relative;
		left:-8px;
		width:101%;
	background-color:purple;
	}
</style></head>
<body onload="f1()" >

<h2 align="center"><font color="purple">Welcome To </font><font color="orange"> O.A.T </font><font color="purple">Online Examination</font> </h2>
   
	<script language ="javascript" >
        var tim;
        var min = 29;
	
        var sec =60;
        var f = new Date();
        function f1() {
            f2();
            document.getElementById("starttime").innerHTML = "Exam Started at: " + f.getHours() + ":" + f.getMinutes();
           
          
        }
        function f2() {
            if (parseInt(sec) > 0) {
                sec = parseInt(sec) - 1;
                document.getElementById("showtime").innerHTML = "Time Left:"+min+":" + sec;
				tim = setTimeout("f2()", 1000);
                
            }
	
            else {
                if (parseInt(sec) == 0) {
                  min = parseInt(min) - 1;  
                    if (parseInt(min) == -1) {
                        clearTimeout(tim);
                        location.href = "ppp.php";
                    }
                    else {
                        sec = 60;
                        document.getElementById("showtime").innerHTML = "Time Left:" + min+ ":" + sec;
                      tim = setTimeout("f2()", 1000);
                    }
                }
               
            }
        }
    </script>
	

    <form id="form1" runat="server">
    <div align="right">       
        
          
		  </br>
            <div id="starttime"></div>
 
            <div id="endtime"></div>
 
            <div id="showtime"></div>
          
        
 </div>
</form>
 <p>ExamId:<?php echo $name;?></p>
<hr>
<form action="result.php" method="post">
<h3>1. 	
An accurate clock shows 8 o'clock in the morning. Through how may degrees will the hour hand rotate when the clock shows 2 o'clock in the afternoon??</h3>
<p><input type="radio" name="q1" value="144" >144</br>
<input type="radio" name="q1" value="150">150</br>
<input type="radio" name="q1" value="168">168</br>
<input type="radio" name="q1" value="180">180</p>

<h3>
2. 	
The reflex angle between the hands of a clock at 10.25 is:</h3>

<p><input type="radio" name="q2" value="180">180</br>
<input type="radio" name="q2" value="192 1/2">192 1/2</br>
<input type="radio" name="q2" value="195">195</br>
<input type="radio" name="q2" value="197 1/2">197 1/2</p>

<h3>3. 	
The cost price of 20 articles is the same as the selling price of x articles. If the profit is 25%, then the value of x is:</h3>

<p><input type="radio" name="q3" value="15">15</br>
<input type="radio" name="q3" value="16" >16</br>
<input type="radio" name="q3" value="18" >18</br>
<input type="radio" name="q3" value="25" >25</p>

<h3>
4. 	
A vendor bought toffees at 6 for a rupee. How many for a rupee must he sell to gain 20%?</h3>
<p><input type="radio" name="q4" value="3">3</br>
<input type="radio" name="q4" value="4">4</br>
<input type="radio" name="q4" value="5" >5</br>
<input type="radio" name="q4" value="6" >6</p>

<h3>5. 	
Sam purchased 20 dozens of toys at the rate of Rs. 375 per dozen. He sold each one of them at the rate of Rs. 33. What was his percentage profit?</h3>

<p><input type="radio" name="q5" value="3.5">3.5</br>
<input type="radio" name="q5" value="4.5" >4.5</br>
<input type="radio" name="q5" value="5.6" >5.6</br>
<input type="radio" name="q5" value="6.5">6.5</p>

<h3>6. 	
The length of the bridge, which a train 130 metres long and travelling at 45 km/hr can cross in 30 seconds, is:</h3>

<p><input type="radio" name="q6" value="200 m">200 m</br>
<input type="radio" name="q6" value="225 m">225 m</br>
<input type="radio" name="q6" value="245 m" >245 m</br>
<input type="radio" name="q6" value="250 m">250 m</p>

<h3>
7. 	
A train 240 m long passes a pole in 24 seconds. How long will it take to pass a platform 650 m long?</h3>

<p><input type="radio" name="q7" value="65 sec" >65 sec</br>
<input type="radio" name="q7" value="89 sec" >89 sec</br>
<input type="radio" name="q7" value="100 sec" >100 sec</br>
<input type="radio" name="q7" value="150 sec">150 sec</p>

<h3>8. 	
Two trains are moving in opposite directions @ 60 km/hr and 90 km/hr. Their lengths are 1.10 km and 0.9 km respectively. The time taken by the slower train to cross the faster train in seconds is:</h3>

<p><input type="radio" name="q8" value="1">36</br>
<input type="radio" name="q8" value="45">45</br>
<input type="radio" name="q8" value="48">48</br>
<input type="radio" name="q8" value="49">49</p>

<h3>9. 	
3 pumps, working 8 hours a day, can empty a tank in 2 days. How many hours a day must 4 pumps work to empty the tank in 1 day?</h3>

<p><input type="radio" name="q9" value="9">9</br>
<input type="radio" name="q9" value="10">10</br>
<input type="radio" name="q9" value="11" >11</br>
<input type="radio" name="q9" value="12">12</p>

<h3>
10. 	
39 persons can repair a road in 12 days, working 5 hours a day. In how many days will 30 persons, working 6 hours a day, complete the work?</h3>

<p><input type="radio" name="q10" value="10">10</br>
<input type="radio" name="q10" value="13">13</br>
<input type="radio" name="q10" value="14">14</br>
<input type="radio" name="q10" value="15">15</p>


<input type="submit" value="submit">
</form>
</body>
</html>