<!DOCTYPE html>
<?php
/*
Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Sample &mdash; CKEditor</title>
	<link rel="stylesheet" href="sample.css">
</head>
<body>
	<h1 class="samples">
		
	</h1>
	<table border="1" cellspacing="0" id="outputSample">
		<colgroup><col width="120"></colgroup>
		<thead>
			<tr>
				<th>Field&nbsp;Name</th>
				<th>Value</th>
			</tr>
		</thead>
<?php

if (!empty($_POST))
{
	$string = $_POST["editor1"];
	$div = $_POST["div"];
	foreach ( $_POST as $key => $value )
	{
		if ( ( !is_string($value) && !is_numeric($value) ) || !is_string($key) )
			continue;

		if ( get_magic_quotes_gpc() )
			$value = htmlspecialchars( stripslashes((string)$value) );
		else
			{$value = htmlspecialchars( (string)$value );}
$dbi = mysqli_connect('127.0.0.1', 'root', 'pass', 'TFBN')
or die('<span id="message">Error querying dasfatabase.</span>');
$query = "UPDATE editcodes SET code='$string'" .
			"WHERE divID='$div'";
$result = mysqli_query($dbi, $query)
or die('<span id="message">Error querying database.</span>');
?>
		<tr>
			<th style="vertical-align: top"><?php echo htmlspecialchars( (string)$key ); ?></th>
			<td><pre class="samples"><?php echo $value; ?></pre></td>
		</tr>
	<?php
	}
	if($div=='newsfeed'){
				$url=[];
				$words = explode('href="',$string);
				for($i=1;$i<=5;++$i){
					$temp = explode('" target=',$words[$i]);
					array_push($url,$temp[0]);
				}
					for($i=0;$i<5;++$i){
							$temp = $url[$i];
							$result= shell_exec("python python.py $temp");
							$temp1 = explode('<p>',$result);
							$temp2 = explode('</p>',$temp1[1]);
							$url[$i]=$temp2[0];
							echo $url[$i];
							echo("UPDATE Blog_Data SET blog_data='$temp2[0]' WHERE blog_id=$i+1");
							$result = mysqli_query($dbi, "UPDATE Blog_Data SET blog_data='$temp2[0]' WHERE blog_id=$i + 1")
							or die('<span id="message">Error querying database.</span>');
						}
}
}
?>
	</table>
</body>
</html>
