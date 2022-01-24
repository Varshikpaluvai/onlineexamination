<?php
if(isset($_POST['q1']))
     {
         $f=$_POST['q1'];

          if($f=="180")
               {
	
	             $fcount=10;
               }
                else
				{
	
	            $fcount=0;
				}
    }
             else{
	            $f='';
	            $fcount=0;
                 }
    if(isset($_POST['q2']))
    {
      $s=$_POST['q2'];
    if($s=="197 1/2")
    {
	  $scount=10;
    }
    else
	{
	 $scount=0;
	
    }
    }
    else
	{
	$s='';
	$scount=0;
}
    if(isset($_POST['q3']))
    {
      $t=$_POST['q3'];
    if($t=="16")
    {
	  $tcount=10;
    }
    else
	{
	 $tcount=0;
	
    }
    }
    else
	{
	$t='';
	$tcount=0;
	
}

    if(isset($_POST['q4']))
    {
      $fou=$_POST['q4'];
    if($fou=="5")
    {
	  $foucount=10;
    }
    else
	{
	 $foucount=0;
	
    }
    }
    else
	{
	$fou='';
	$foucount=0;
	
	
}
	if(isset($_POST['q5']))
    {
      $fif=$_POST['q5'];
    if($fif=="5.6")
    {
	  $fifcount=10;
    }
    else
	{
	 $fifcount=0;
	
    }
    }
    else
	{
	$fif='';
	$fifcount=0;
	}
		if(isset($_POST['q6']))
    {
      $six=$_POST['q6'];
    if($six=="245 m")
    {
	  $sixcount=10;
    }
    else
	{
	 $sixcount=0;
	
    }
    }
    else
	{
	$six='';
	$sixcount=0;
	}
		if(isset($_POST['q7']))
    {
      $sev=$_POST['q7'];
    if($sev=="89 sec")
    {
	  $sevcount=10;
    }
    else
	{
	 $sevcount=0;
	
    }
    }
    else
	{
	$sev='';
	$sevcount=0;
	}
		if(isset($_POST['q8']))
    {
      $eig=$_POST['q8'];
    if($eig=="48")
    {
	  $eigcount=10;
    }
    else
	{
	 $eigcount=0;
	
    }
    }
    else
	{
	$eig='';
	$eigcount=0;
	}
		if(isset($_POST['q9']))
    {
      $nin=$_POST['q9'];
    if($nin=="12")
    {
	  $nincount=10;
    }
    else
	{
	 $nincount=0;
	
    }
    }
    else
	{
	$nin='';
	$nincount=0;
	}
		if(isset($_POST['q10']))
    {
      $ten=$_POST['q10'];
    if($ten=="13")
    {
	  $tencount=10;
    }
    else
	{
	 $tencount=0;
	
    }
    }
    else
	{
	$ten='';
	$tencount=0;
	}
	
	$total=$fcount+$scount+$tcount+$foucount+$fifcount+$sixcount+$sevcount+$eigcount+$nincount+$tencount;
if($total>=60)
{
	$error='congratulations you have passed in this exam!!';
	$result="Passed";
}
else{
	$error="you have not passed in this exam better luck next time!!";
	$result="Failed";
}

?>
<html>
<head>
<style>
p.i{
	font-size:20px;
	font-family:helvetica;
	color:white;
}
p.p{
	font-size:20px;
	color:black;
}
p.y{
	color:blue;
}
marquee{
	color:yellow;;
	font-size:25px;
}
h3{
	color:black;
	font-size:25px;
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
</style>
</head>
<body >
<h1><font size ="15" color="orange">ONLINE</font><font size ="15" color="purple"> APTITUDE</font><font size="15" color="orange">TEST</h1></font>
</div>
<div align="right">
<h2><a href="loginhome.php" title="Home Page"><font color="white">Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="about.php" title="About Website"><font color="white">About</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="application.php" title="Register For Exam Here"><font color="white">Register</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="apptitude.php" title="Easy for exam"><font color="white">Aptitude</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="accept.php" title="Exam Login Potral"><font color="white">Exam</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="logsin.php"><font color="white">Logout</font></h2></a>
</div></br>

<marquee width="75%"><?php echo $error?></marquee>
<p class="i"><h3>1.An accurate clock shows 8 o'clock in the morning. Through how may degrees will the hour hand rotate when the clock shows 2 o'clock in the afternoon??</h3></p>
<p class="p">selected answer:<font color="red"><?php echo $f?></font></p>
<p class="p">Right answer:<font color="green">180</font></p>
<p class="p">points:<?php echo $fcount?></p><hr>
<p class="i"><h3>2.The reflex angle between the hands of a clock at 10.25 is:</h3>
</p>
<p class="p">selected answer:<font color="red"><?php echo $s?></font></p>
<p class="p">Right answer:<font color="green">197 1/2</font></p>
<p class="p">points:<?php echo $scount?></p><hr>
<p class="i"><h3>3.The cost price of 20 articles is the same as the selling price of x articles. If the profit is 25%, then the value of x is:</h3>
</p>
<p class="p">selected answer:<font color="red"><?php echo $t?></font></p>
<p class="p">Right answer:<font color="green">16</font></p>
<p class="p">points:<?php echo $tcount?></p><hr>
<p class="i">4.A vendor bought toffees at 6 for a rupee. How many for a rupee must he sell to gain 20%?</h3></p>
<p class="p">selected answer:<font color="red"><?php echo $fou?></font></p>
<p class="p">Right answer:<font color="green">5</font></p>
<p class="p">points:<?php echo $foucount?></p><hr>
<p class="i"><h3>5.Sam purchased 20 dozens of toys at the rate of Rs. 375 per dozen. He sold each one of them at the rate of Rs. 33. What was his percentage profit?</h3>
</p>
<p class="p">selected answer:<font color="red"><?php echo $fif?></font></p>
<p class="p">Right answer:<font color="green">5.6</font></p>
<p class="p">points:<?php echo $fifcount?></p><hr>
<p class="i"><h3>6.The length of the bridge, which a train 130 metres long and travelling at 45 km/hr can cross in 30 seconds, is:</h3>
</p>
<p class="p">selected answer:<font color="red"><?php echo $six?></font></p>
<p class="p">Right answer:<font color="green">245 m</font></p>
<p class="p">points:<?php echo $sixcount?></p><hr>
<p class="i"><h3>7.A train 240 m long passes a pole in 24 seconds. How long will it take to pass a platform 650 m long?</h3>

</p>
<p class="p">selected answer:<font color="red"><?php echo $sev?></font></p>
<p class="p">Right answer:<font color="green">89 sec</font></p>
<p class="p">points:<?php echo $sevcount?></p><hr>
<p class="i"><h3>8. 	
Two trains are moving in opposite directions @ 60 km/hr and 90 km/hr. Their lengths are 1.10 km and 0.9 km respectively. The time taken by the slower train to cross the faster train in seconds is:</h3>

</p>
<p class="p">selected answer:<font color="red"><?php echo $eig?></font></p>
<p class="p">Right answer:<font color="green">48</font></p>
<p class="p">points:<?php echo $eigcount?></p><hr>
<p class="i"><h3>9.3 pumps, working 8 hours a day, can empty a tank in 2 days. How many hours a day must 4 pumps work to empty the tank in 1 day?</h3>
</p>
<p class="p">selected answer:<font color="red"><?php echo $nin?></font></p>
<p class="p">Right answer:<font color="green">12</font></p>
<p class="p">points:<?php echo $nincount?></p><hr>
<p class="i"><h3>10.39 persons can repair a road in 12 days, working 5 hours a day. In how many days will 30 persons, working 6 hours a day, complete the work?</h3></p>
<p class="p">selected answer:<font color="red"><?php echo $ten?></font></p>
<p class="p">Right answer:<font color="green">13</font></p>
<p class="p">points:<?php echo $tencount?></p><hr>
<h3>total marks:<font color="orange"><?php echo $total?></font>
&nbsp;&nbsp;Result:<?php echo $result?></h3>
</body>
</html>