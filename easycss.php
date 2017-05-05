<html>
<head>
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
    height:15em;
    margin-top: -15em; 
    margin-left: -15em; 
    border: 5px double #FFE4E1;
}
	             #que
	    	{
			font-size:25px;	
			color:#2F4F4F;
		}
		#sub
		{
			border-radius : 15px;
			font-size:2em;
			margin-top:1em;
			margin-left:5em;
		}
		#r1
		{
			font-size:1.5em;
		}
		#ins
		{
			position :fixed;
			font-size : 30px;
			margin-top : 15em;
		}	
		#poi
		{
			position :fixed;
			font-size : 20px;
			margin-top : 24em;
		}

	</style>
</head>
<body>
	<img src="logo_2015432_web.jpg"/>
	<p id="motto"> Best Place to Write Exams</p>
	<div id="mydiv">
	<p id="que">Select the number of questions</p>
	<form method="post" action="easycsstest.php">	
		 <input type="radio" name="num" value="10"> <label id="r1">10</label><br>
 		 <input type="radio" name="num" value="20"><label id="r1"> 20</label><br>
  <input type="radio" name="num" value="30"> <label id="r1"> 30</label><br>
 <input id="sub"  type="submit" value="Start Test"/>
	</form>
	</div>
	<p id="ins">Instructions :
	</p><br>
	<ul id="poi"> 
		<li>Each Question has 10 seconds to answer. You have to answer within 10 seconds to get the points.<br><br></li>
		<li> At the end of test you will show how many points you have got.</li>
	</ul>
</body>
</html>