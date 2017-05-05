<?php
// Includes Login Script
if(isset($_SESSION['login_user']))
{ 
	header("Location: login.php");	
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>ExamPoints</title>
	  <link rel="shortcut icon" href="back.jpg">
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
			#p1
			{
				display:inline-block;
				float:right;
				margin: -30px 0px 20px 800px;
				font-size:200%;
				color:red;
					
			}
			#i1
			{
				background-color:#C1E1A6;
			}
			#d2
			{
				background-color:#C1E1A6;
				display:inline-block;
				height:80px;
				width:100%;
			}
			#b1
			{
				border:none;
				background:none;
				display:inline-block;
				margin:20px 0px 0px 0px;
				text-decoration:none;
				padding: 15px 32px;
				
			}
			#b2
			{
				border:none;
				background:none;
				display:inline-block;
				text-decoration:none;
				padding: 15px 32px;
			}
			#b3
			{
				border:none;
				background:none;
				display:inline-block;
				text-decoration:none;
				padding: 15px 32px;
			}
			#b4
			{
				border:none;
				background:none;
				display:inline-block;
				text-decoration:none;
				padding: 15px 32px;
			}
			#b5
			{
				border:none;
				background:none;
				display:inline-block;
				text-decoration:none;
				padding: 15px 32px;
			}
			#b6
			{
				border:none;
				background:none;
				display:inline-block;
				margin:20px 0px 0px 40%;
				text-decoration:none;
				padding: 5px 15px;
			}
			#b7
			{
				border:none;
				background:none;
				display:inline-block;
				text-decoration:none;
				padding: 5px 15px;
			}
			#i2
			{
				width:30px;
				height:20px;
				margin: 30px 0px 20px 0px;
			}
			#b8
			{
				border:none;
				background:none;
				float:right;
				display:inline-block;
				text-decoration:none;
			}
			#b6:hover,#b7:hover
			{
				color:#D9853B;
				background-color:#A8CD1B;
			}
			#p2
			{
				display:inline-block;
			}
			#b1:hover,#b2:hover,#b3:hover,#b4:hover,#b5:hover
			{
				color:red;
				background-color:#6DBDD6;	
			}
		</style>
	</head>
	<body>
		<div class="container-fluid">
		<div id="d1">
			<a id="i1" href=a1.php><img src="logo_2015432_web.jpg"/></a>
			<p id="p1">Best Place to Write Your Exams</p>
		</div>
		<div id="d2">
			<a href=a2.php><button id="b1">HTML</button></a>
			<a href=a3.php><button id="b2">CSS</button></a>
			<a href=a4.php><button id="b3" submit="a4.php">PHP</button></a>
			<a href=a5.php><button id="b4" submit="a5.php">C</button></a>
			<a href=a6.php><button id="b5" submit="a6.php">DBMS</button></a>
			<a href=signup.php><button id="b6">LOGIN</button></a>
			<p id="p2"> | </p>
			<a href=signup.php><button id="b7">SIGNUP</button></a>
			<button id="b8"><img id="i2" src="search-256.png"/></button>
		</div>
		<div id="d3">
			<script>
  (function() {
    var cx = '013915039447501215297:1zgoflui4tm';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
		</div>
		<div id="d4">
			<p style="font-size:30px">* We help you Practice and become the best!!</p>
			<p style="font-size:30px">* Practice HTML,CSS,PHP and C!!</p>
		</div>
		</div>
	</body>
</html>