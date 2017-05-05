<?php
	session_start();
	if(isset($_SESSION['login_user']))
	{
		$_SESSION['sign']="LOGOUT";
		$_SESSION['si']="logout.php";
		$_SESSION['log']="prof.php";
	}
	else
	{
		$_SESSION['sign']="SIGUNUP";
		$_SESSION['si']="signup.php";
		$_SESSION['log']="login.php";
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>ExamPoints</title>
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
				margin:20px 0px 0px 15%;
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
			#b9
			{
				border:none;
				display:inline-block;
				background:none;
				//margin:30px 0px 20px 100px;
				font-size:200%;
			}
			#b10
			{
				border:none;
				display:inline-block;
				background:none;
				margin-left:50%;
				font-size:200%;
			}
			#b11
			{
				border:none;
				background:none;
				display:inline-block;
				margin:20px 0px 0px 150px;
				text-decoration:none;
				padding: 15px 32px;
				
			}
			#b12
			{
				border:none;
				background:none;
				display:inline-block;
				margin:20px 0px 0px 20px;
				text-decoration:none;
				padding: 15px 32px;
			}
			#b13
			{
				border:none;
				background:none;
				display:inline-block;
				margin:20px 0px 0px 450px;
				text-decoration:none;
				padding: 15px 32px;
			}
			#b11:hover,#b12:hover,#b13:hover
			{
				color:green;
				background-color:#6DBDD6;	
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
			#p3
			{
				font-size:200%;
				color:green;
			}
			#b1:hover,#b2:hover,#b3:hover,#b4:hover,#b5:hover
			{
				color:red;
				background-color:#6DBDD6;	
			}
			#d4
			{
				background-color:#ECECEA;
				display:inline-block;
				height:80px;
				width:100%;
			}
			#d3
			{
				display:inline-block;
			}
			#bl1
			{
				display:none;
				width:100px;
				height:100px;
				background-color:#C0C0C0;
			}
			#bl2
			{
				display:none;
				width:100px;
				height:100px;
				margin-left:100%;
				margin-top:-18px;
				background-color:#C0C0C0;
			}
			#bl3
			{
				display:none;
				width:100px;
				height:100px;
				margin-left:200%;
				margin-top:-18px;
				background-color:#C0C0C0;
			}
			#bl4
			{
				display:none;
				width:100px;
				height:100px;
				margin-left:300%;
				margin-top:-18px;
				background-color:#C0C0C0;
			}
			#bl5
			{
				display:none;
				width:100px;
				height:100px;
				margin-left:400%;
				margin-top:-18px;
				background-color:#C0C0C0;
			}
			#d7
			{
				display:inline-block;
				height:80px;
				width:100%;
			}
			#d5
			{
				background-color:#ECECEA;
				height:500px;
				width:100%;
			}
			#d6
			{
				display:none;
				background-color:#ECECEA;
				height:500px;
				width:100%;
			}
			#d8
			{
				height:100px;
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#b9").click(function(){
					$("#d5").fadeToggle("fast");
				});
			});
			$(document).ready(function(){
				$("#b10").click(function(){
					$("#d6").fadeToggle("fast");
				});
			});
			$(document).ready(function(){
				$("#b1").mouseover(function(){
					$("#bl1").slideDown("slow");
				});
			});
			$(document).ready(function(){
				$("#b1").mouseleave(function(){
					$("#bl1").slideUp("fast");
				});
			});
			$(document).ready(function(){
				$("#b2").mouseover(function(){
					$("#bl2").slideDown("slow");
				});
			});
			$(document).ready(function(){
				$("#b2").mouseleave(function(){
					$("#bl2").slideUp("fast");
				});
			});
			$(document).ready(function(){
				$("#b3").mouseover(function(){
					$("#bl3").slideDown("slow");
				});
			});
			$(document).ready(function(){
				$("#b3").mouseleave(function(){
					$("#bl3").slideUp("fast");
				});
			});
			$(document).ready(function(){
				$("#b4").mouseover(function(){
					$("#bl4").slideDown("slow");
				});
			});
			$(document).ready(function(){
				$("#b4").mouseleave(function(){
					$("#bl4").slideUp("fast");
				});
			});
			$(document).ready(function(){
				$("#b5").mouseover(function(){
					$("#bl5").slideDown("slow");
				});
			});
			$(document).ready(function(){
				$("#b5").mouseleave(function(){
					$("#bl5").slideUp("fast");
				});
			});$(document).ready(function(){
				$("#b8").click(function(){
					$("#d9").fadeToggle("fast");
				});
			});
		</script>
	</head>
	<body background="back.jpg">
		<script>
			function confirm()
			{
				alert("You will be given 1 minute for first five question and 1 minute for second five questions. Make you sure you answer all the questions. All the best!!!!");
			}
		</script>
		<div class="container-fluid">
		<div id="d1">
			<a id="i1" href=a1.php><img src="logo_2015432_web.jpg"/></a>
			<p id="p1">Best Place to Write Your Exams</p>
		</div>
		<div id="d2">
			<a href=a2.php><button id="b1">HTML</button></a>
			<a href=a3.php><button id="b2">CSS</button></a>
			<a href=a4.php><button id="b3">PHP</button></a>
			<a href=a5.php><button id="b4">C</button></a>
			<a href=a6.php><button id="b5">DBMS</button></a>
			<a href=<?php echo $_SESSION['log'];?>><button id="b6"><?php if(isset($_SESSION['login_user'])){ echo $_SESSION['login_user'];} else {echo 'LOGIN';}?></button></a>
			<p id="p2"> | </p>
			<a href=<?php echo $_SESSION['si'];?>><button id="b7"><?php echo $_SESSION['sign'];?></button></a>
			<button id="b8"><img id="i2" src="search-256.png"/></button>
		</div>
		<div id="d9">
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
		<div id="d3">
			<div id="bl1">
			<ul>
				<li>History</li>
				<li>Test</li>
				<li>Easy</li>
				<li>Medium</li>
				<li>Hard</li>
			</ul>
			</div>
			<div id="bl2">
			<ul>
				<li>History</li>
				<li>Test</li>
				<li>Easy</li>
				<li>Medium</li>
				<li>Hard</li>
			</ul>
			</div>
			<div id="bl3">
			<ul>
				<li>History</li>
				<li>Test</li>
				<li>Easy</li>
				<li>Medium</li>
				<li>Hard</li>
			</ul>
			</div>
			<div id="bl4">
			<ul>
				<li>History</li>
				<li>Test</li>
				<li>Easy</li>
				<li>Medium</li>
				<li>Hard</li>
			</ul>
			</div>
			<div id="bl5">
			<ul>
				<li>History</li>
				<li>Test</li>
				<li>Easy</li>
				<li>Medium</li>
				<li>Hard</li>
			</ul>
			</div>
		</div>
		<div id="d4">
			<button id="b9">Brief History of HTML</button>
			<button id="b10">Learn HTML</button>
		</div>
		<div id="d5">
			<p style="font-size:30px">HyperText Markup Language, commonly referred to as HTML, is the standard markup language used to create web pages. Along with CSS, and JavaScript, HTML is a cornerstone technology used to create web pages,[1] as well as to create user interfaces for mobile and web applications. Web browsers can read HTML files and render them into visible or audible web pages. HTML describes the structure of a website semantically along with cues for presentation, making it a markup language, rather than a programming language.</p>
		</div>
		<div id="d6">
			<p>We Suggest You the best Sites in the world to get master in HTML</P>
			<p>Try the following Sites:</p>
			<a href=http://www.w3schools.com target="blank">W3Schools</a><br>
			<a href="http://www.tutorialspoint.com" target="blank">TutorialsPoint</a>
		</div>
		<div id="d8">
			<p id="p3">Test your skills. Choose any one of the following set of Questions</p>
		</div>
		<div id="d7">
			<a href=easyhtml.php onclick="confirm()"><button id="b11">Easy</button></a>
		<a href=medhtml.php><button id="b12">Medium</button></a>
			<a href=hardhtml.php><button id="b12">Hard</button></a>
		</div>
		</div>
	</body>
</html>