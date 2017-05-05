<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<style>
		#motto
		{
			font-size:2.5em;	
			color:#808080;
			margin-left:20em;
			margin-top:-5%;	
		}
		#mydiv
{
    position:fixed;
    top: 50%;
    left: 50%;
    width:30em;
    height:20em;
    margin-top: -15em; 
    margin-left: -15em; 
    border: 5px double #FFE4E1;
}
		 #sco
	    	{
			font-size:30px;	
			color:#2F4F4F;
		}

	     #que
	    	{
			font-size:25px;	
			color:#2F4F4F;
		}
		#r1,#r2,#r3,#r4
		{
			font-size:1.5em;
		}
		#sub
		{
			border-radius : 15px;
			font-size:2em;
			margin-top:0.5em;
			margin-left:5em;
		}

	    	</style>
</head>
<body>
	<img src="logo_2015432_web.jpg"/>
	<p id="motto"> Best Place to Write Exams</p>
	<?php
		if (isset($_POST['num'])) 
		{
}
else
{
			echo '<center><h1>Please select the number of questions</h1></center>';
			header('Refresh: 3; url=easycss.php');
		}
	?>
	<p id="sco"></p>
	<div id="mydiv">
	<form name="forms">
	<p id="que"></p>
		<input type="radio" id="r11" name="r1" value="10"> <label id="r1">10</label><br>
 		 <input type="radio" id="r12" name="r1" value="20"><label id="r2"> 20</label><br>
  <input type="radio" name="r1" id="r13" value="30"> <label id="r3"> 30</label><br>
<input type="radio" name="r1" id="r14" value="10"> <label id="r4">10</label><br><br><br>

		<input id="sub" type="button" value="Next Question" onClick="myfun()"/>
	</form>
	</div>
		<script type="text/javascript">
			var c=0;
			var score=0;
			var co='<?php echo $_POST['num'];?>';
			var ans;
			$(document).ready(function()
			{
				$.ajax({
    				type: "POST",
   				url: "nextq.php",
				dataType: 'json',
				data : jquery(".forms").serialize(),
			     success: function(data)
				{
		$("#que").html(data.ques);
		$("#r1").html(data.a);
		$("#r2").html(data.b);
		$("#r3").html(data.c);
		$("#r4").html(data.d);
		$("#r11").attr("value",data.a);
		$("#r12").attr("value",data.b);
		$("#r13").attr("value",data.c);
		$("#r14").attr("value",data.d);
		ans=data.ans;
   				 }
				});		

			});
			function myfun() 
			{
				if(document.forms.r1.value==ans)
				{
					score++;
				}
				$.ajax({
    				type: "POST",
   				url: "nextq.php",
				dataType: 'json',
			
			     success: function(data)
				{
		$("#que").html(data.ques);
		$("#r1").html(data.a);
		$("#r2").html(data.b);
		$("#r3").html(data.c);
		$("#r4").html(data.d);
		$("#r11").prop('checked', false);
		$("#r12").prop('checked', false);
		$("#r13").prop('checked', false);
		$("#r14").prop('checked', false);
		$("#r11").attr("value",data.a);
		$("#r12").attr("value",data.b);
		$("#r13").attr("value",data.c);
		$("#r14").attr("value",data.d);
		ans=data.ans;
   				 }
				});		
			c++;
			if(c==co)
				fun();
}
setInterval(myfun, 5000);
function fun()
{
	
	$('#mydiv').hide();
	$("#sco").html("\nNumber of attempted questions = "+co+"<br><br>Number of Correct answers = "+score);
	var delay = 5000; //Your delay in milliseconds
setTimeout(function(){ window.location = "index.php"; }, delay);
	
}
</script>
</body>
</html>
