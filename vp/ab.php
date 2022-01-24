<html>
<style>
.mySlides
 {
 display:none;
 }
 h2{
 background-color:black;
 }
</style>
</head>
<body>
<div align="left">
<h1><font size ="15" color="orange">ONLINE</font><font size ="15" color="purple"> APTITUDE</font><font size="15" color="orange"> TEST</h1></font>
</div>
<div align="right">
<h2><a href="ab.php"><font color="white">Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="loginnhome.php"><font color="white">About</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="application.php"><font color="white">Register</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="aptitude.html"><font color="white">Aptitude</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="exam.html"><font color="white">Exam</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="logsin.html"><font color="white">Logout</font></h2></a>&nbsp;
</div>
<div id="slideshow">
  <img class="mySlides" src="ss1.png" width="1360" height="500">
  <img class="mySlides" src="ss2.png" width="1360" height="500">
  <img class="mySlides" src="ss3.png" width="1360" height="500">
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
</body>

</html>
