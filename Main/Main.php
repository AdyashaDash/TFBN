<!DOCTYPE html>
<head>
<script src="Javascript/Main.js"></script>
<?php require_once("Onload.php"); ?>
<script src="Javascript/jquery.js"></script>
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
<div id="header"><img src="Images/logo.jpg" width="466px" height="100px" alt="Logo" ><span>ABOUT|CONTACT&nbsp&nbsp&nbsp</span></div>
<div id="menu"><span id="Furore">Furore</span><span id="Blog">Blog</span><span id="CSR">CSR</span><span id="About">Events</span><span id="Team">Team</span>
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
<img src="close.jpg" id="close" width="25px" style="float:left">
<table>
<tr><td rowspan="5"><img id="memPhoto" src="" width="200px"></td><td><span id="memName"></span></td></tr>
<tr><td><span id="memWork"></span></td></tr>
<tr><td><a href="" id="memLink" target="_blank">Visit Facebook Profile</a></td></tr>
</table>
</div>
</center>
<div id="footer">COPYRIGHT - THE FISHBOWL NETWORK - ALL RIGHTS RESERVED<div id="social"><img src="Images/facebook.jpg" alt="facebook"><img src="Images/twitter.jpg" alt="twitter"><img src="Images/google.jpg" alt="google"><img src="Images/pinterest.jpg" alt="pinterest">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div></div>
</body>
</html>