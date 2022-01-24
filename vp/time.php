<html>
<head runat="server">
<style>
h2{
	position:relative;
	top:250px;
	color:brown;
}
</style>
</head>
<body onload="f1()" >
<form action="time.php" method="post">
<script language ="javascript" >
        var tim;
        var min = 0;
	
        var sec = 3;
        var f = new Date();
        function f1() {
            f2();
            document.getElementById("starttime");
           
          
        }
        function f2() {
            if (parseInt(sec) > 0) {
                sec = parseInt(sec) - 1;
                document.getElementById("showtime");
				tim = setTimeout("f2()", 1000);
                
            }
	
            else {
                if (parseInt(sec) == 0) {
                  min = parseInt(min) - 1;  
                    if (parseInt(min) == -1) {
                        clearTimeout(tim);
                        location.href = "loginhome.php";
                    }
                    else {
                        sec = 3;
                        document.getElementById("showtime");
                      tim = setTimeout("f2()", 1000);
                    }
                }
               
            }
        }  
		
    </script>
  	</form>
	</body>
	</html>