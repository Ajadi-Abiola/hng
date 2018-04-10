<DOCTYPE!html>
<html>
<head>
<title></title>
<style type="text/css">
body {background-color: #BDBDBD}
#health {
	padding-top: 20px;
padding-left: 60px;
position: relative;
width: 250px;
height: 60px;
left: 400px;
top: 50px;

background: #C284D9}
p {font-family: serif;
font-size: 12px;
padding-left: 40px;}

#tips {font-size: 18px;  
 font-family: arial;
top: 150px;
left: 400px;
position: relative;
width: 350px}
 
 #time {font-size: 18px;
 	top: 250px;
 	left: 400px;
 	position: relative;
 	width: 250px;
 	font-family: arial}
</style>
</head>
<body>
<div id= "health"> HEALTH AND FITNESS <p>WITH ANNA.</p></div>
<div id="tips" >TIPS ON HOW TO BE FIT AND LIVE A HEALTHY LIFESTYLE! </div>
<div id= "time"><?php
echo date( "l jS \of F Y h:i:s A") ;
?> </div>

</body>
</html>