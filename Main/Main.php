<!DOCTYPE html>
<head>
<script src="Javascript/jquery.js"></script>
<script src="Javascript/progress.js"></script>
<script src="Javascript/Main.js"></script>
<?php require_once("Onload.php"); ?>
<link href="CSS/Main.css" rel="stylesheet" type="text/css" />
<script src="../Blog/Javascript/Blog.js"></script>
<link href="../Blog/CSS/Blog.css" rel="stylesheet" type="text/css" />
<script src="../Team/Javascript/Team.js"></script>
<link href="../Team/CSS/Team.css" rel="stylesheet" type="text/css" />
<script src="../Furore/Javascript/Furore.js"></script>
<link href="../Furore/CSS/Furore.css" rel="stylesheet" type="text/css" />
<script src="../CSR/Javascript/CSR.js"></script>
<link href="../CSR/CSS/CSR.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>
	<div id='load'> 
		<img id='sketchlogo' src="Images/sketchlogo.jpg">
		<img id='colorlogo' src="Images/colorlogo.jpg">
	</div>
</center>
<div id='wrapper'>
<div id="header"><img src="Images/logo.jpg" width="466px" height="100px" alt="Logo" ><span><a>ABOUT</a> | <a>CONTACT</a>&nbsp&nbsp&nbsp</span></div>
<div id="menu"><span id="FURORE">FURORE</span><span id="BLOG">BLOG</span><span id="CSR">CSR</span><span id="ABOUT">EVENTS</span><span id="TEAM">TEAM</span>
</div>
<br>  
<center>
<div id="container">
<?php
require_once("../Blog/Blog.php");
require_once("../Furore/Furore.php");
require_once("../CSR/CSR.php");
require_once("../Contact/Contact.php");
require_once("../Team/Team.php");
?>
</div>
<div id="cover"></div>
<div id="memberInfo">
<img src="../Team/Images/close.png" id="close" width="15px" style="float:left">
<img id="memPhoto" src="" width="400px">
<table style='float:right'>
<tr><td><span id="memName"></span></td></tr>
<tr><td><span id="memWork"></span></td></tr>
<tr><td><a href="" id="memLink" target="_blank">Visit Facebook Profile</a></td></tr>
</table>
</div>
</center>
<div id="footer"><center>COPYRIGHT - THE FISHBOWL NETWORK - ALL RIGHTS RESERVED</center><div id="social"><img src="Images/facebook.jpg" alt="facebook"><img src="Images/twitter.jpg" alt="twitter"><img src="Images/google.jpg" alt="google"><img src="Images/pinterest.jpg" alt="pinterest">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div></div>
</div>
</body>
</html>