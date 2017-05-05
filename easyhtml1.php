<?php
	session_start();
	header("Refresh: 30; URL=easyhtmlmark.php"); 
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
			#d3
			{
				
			}
		</style>
	</head>
	<body>
		<script>
			function store()
			{
				var q1=-1;
				var x=document.getElementsByName("q1");
				for(var i=0;i<x.length;i++)
				{
					if(x[i].checked)
						q1=x[i].value;
				}
				var q2=-1;
				x=document.getElementsByName("q2");
				for(var i=0;i<x.length;i++)
				{
					if(x[i].checked)
						q2=x[i].value;
				}
				var q3=-1;
				x=document.getElementsByName("q3");
				for(var i=0;i<x.length;i++)
				{
					if(x[i].checked)
						q3=x[i].value;
				}
				var q4=-1;
				x=document.getElementsByName("q4");
				for(var i=0;i<x.length;i++)
				{
					if(x[i].checked)
						q4=x[i].value;
				}
				var q5=-1;
				x=document.getElementsByName("q5");
				for(var i=0;i<x.length;i++)
				{
					if(x[i].checked)
						q5=x[i].value;
				}
				$.post('processhtml1.php',{q11:q1,q12:q2,q13:q3,q14:q4,q15:q5});
			}
			window.open ("easyhtml1.php","mywindow","status=1,toolbar=0"); 

		</script>
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
		<a href=<?php echo $_SESSION['log'];?>><button id="b6"><?php if(isset($_SESSION['login_user'])){ echo $_SESSION['login_user'];} else {echo 'LOGIN';}?></button></a>
			<p id="p2"> | </p>
			<a href=<?php echo $_SESSION['si'];?>><button id="b7"><?php echo $_SESSION['sign'];?></button></a>
			<button id="b8"><img id="i2" src="search-256.png"/></button>
		</div>
		<div id="d3">
			<p>1) when was CSS first launched?</p>
			<input type="radio" name="q1" value="1995">1995</input><br>
			<input type="radio" name="q1" value="2000">2000</input><br>
			<input type="radio" name="q1" value="3000">3000</input>
			<p>2) when was CSS first launched?</p>
			<input type="radio" name="q2" value="1995">1995</input><br>
			<input type="radio" name="q2" value="2000">2000</input><br>
			<input type="radio" name="q2" value="3000">3000</input>
			<p>3) when was CSS first launched?</p>
			<input type="radio" name="q3" value="1995">1995</input><br>
			<input type="radio" name="q3" value="2000">2000</input><br>
			<input type="radio" name="q3" value="3000">3000</input>
			<p>4) when was CSS first launched?</p>
			<input type="radio" name="q4" value="1995">1995</input><br>
			<input type="radio" name="q4" value="2000">2000</input><br>
			<input type="radio" name="q4" value="3000">3000</input>
			<p>5) when was CSS first launched?</p>
			<input type="radio" name="q5" value="1995">1995</input><br>
			<input type="radio" name="q5" value="2000">2000</input><br>
			<input type="radio" name="q5" value="3000">3000</input>
			<a href="easyhtmlmark.php"><button>SUBMIT</button></a>
		</div>
		</div>
	</body>
</html>