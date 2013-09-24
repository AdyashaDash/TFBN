<!DOCTYPE html>
<head>
<?php
$dbi = mysqli_connect('127.0.0.1', 'root', 'pass', 'TFBN');
$query = "SELECT * FROM editcodes";
$result = mysqli_query($dbi,$query)
or die('<span id="message">Error querying database.</span>');
$result2 = mysqli_query($dbi,"SELECT * FROM Blog_Data");
?>
<script>
divs=[];
codes=[];
blog_data=[];
</script>
<?php
$bool = true;
while($row=mysqli_fetch_row($result)) {
	?>
<script>
 divs.push(<?php echo json_encode($row[1]); ?>);
 codes.push(<?php echo json_encode($row[2]); ?>);
 </script>
<?php	
}
while($row  = mysqli_fetch_row($result2)){

	$row[1]=htmlspecialchars_decode($row[1]);
?>
<script>
blog_data.push(<?php echo json_encode($row[1]); ?>);
</script>
<?php
}
?>
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
<body onresize='placing()'>
<center>
	<div id='load'> 
		<img id='sketchlogo' src="Images/sketchlogo.jpg">
		<img id='colorlogo' src="Images/colorlogo.jpg">
	</div>
</center>
<div id='wrapper'>
<div id="header"><img src="Images/logo.jpg" width="466px" height="100px" alt="Logo" ><span><a onclick='maximize_details_tfbn("about")'>ABOUT</a> | <a onclick='maximize_details_tfbn("contact")'>CONTACT</a>&nbsp&nbsp&nbsp</span></div>
<div id="menu"><span id="FURORE">FURORE</span><span id="BLOG">BLOG</span><span id="CSR">CSR</span><span id="ABOUT">EVENTS</span><span id="TEAM">TEAM</span>
</div>
<br>  
<center>
<div id="container">
<?php
//super.thefishbowlnetwork thelaunchpad@312
require_once("../Blog/Blog.php");
require_once("../Furore/Furore.php");
require_once("../CSR/CSR.php");
require_once("../Contact/Contact.php");
require_once("../Team/Team.php");
?>
</div>
<div id="cover"></div>
<div id='details_tfbn'></div>
<div id="memberInfo">
<table style='float:right'>
<tr><td><span id="memName"></span></td></tr>
<tr><td><span id="memWork"></span></td></tr>
<tr><td><a href="" id="memLink" target="_blank">Visit Facebook Profile</a></td></tr>
</table>
<img id="memPhoto" src="" width="400px">&nbsp
</div>
</center>
<div id="footer"><center>COPYRIGHT - THE FISHBOWL NETWORK - ALL RIGHTS RESERVED</center><div id="social"><img src="Images/facebook.jpg" alt="facebook"><img src="Images/twitter.jpg" alt="twitter"><img src="Images/google.jpg" alt="google"><img src="Images/pinterest.jpg" alt="pinterest">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div></div>
</div>
</body>
</html>