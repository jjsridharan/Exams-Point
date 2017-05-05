<?php
	session_start();

	include("candidate.php");	
?>
<html>
	<head>
		<style>
			#name
			{
				margin-left:40%;
				margin-top:20%;
				font-size:200%;	
				display:inline-block;
			}
			#name1
			{
				font-size:200%;	
				display:inline-block;
			}
			#mail
			{
				margin-left:40%;
				margin-top:4%;
				font-size:200%;	
				display:inline-block;
			}
			#mail1
			{
				font-size:200%;	
				display:inline-block;
			}
		</style>
		<title>ExamPoints</title>
	</head>
	<body>
		<div id="d1">
		<p id="name">NAME :</p>
		<p id="name1"><?php echo $res[0];?></p>
		</div>
		<div id="d2">
		<p id="mail">MAIL:</p>
		<p id="mail1"><?php echo $res[1];?></p>
		</div>
	</body>
</html>