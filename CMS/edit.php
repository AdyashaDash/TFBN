<?php
$username = 'fishbowl';
$password = 'edit_fishbowl';
if(!isset($_SERVER['PHP_AUTH_USER'])||!isset($_SERVER['PHP_AUTH_PW'])||($_SERVER['PHP_AUTH_USER'])!=$username||($_SERVER['PHP_AUTH_PW'])!=$password){
	header('http/1.1 401 Unauthorized');
	header('WWW-Authenticate: Basic realm="THE FISHBOWL NETWORK"');
	exit('<h2>THE FISHBOWL NETWORK</h2>Sorry,you must enter a valid username and password to access this page!');
}
?>
<html>
<head>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<style type="text/css">
</style>
</head>
<body>
<?php
$dbi = mysqli_connect('127.0.0.1', 'root', 'pass', 'TFBN');
$query = "SELECT * FROM editcodes WHERE divID='newsfeed'";
$result = mysqli_query($dbi,$query)
or die('<span id="message">Error querying database.</span>');
$row=mysqli_fetch_row($result);
?>
<form action="posteddata.php" method="post">
<textarea id="editor1" name="editor1" rows=40 cols=90>
<?php
echo $row[2];
?>

</textarea>
<script type="text/javascript">
				CKEDITOR.replace( 'editor1' );
			</script>
			<input type="hidden" value="newsfeed" name="div" />
			<input type="submit" />
</form>
</body>
</html>
