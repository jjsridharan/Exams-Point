<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "exams";
$prefix = "";
$bd = @mysql_connect($mysql_hostname, $mysql_user,$mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("<h1>Could not select database<h1>");
if(!$bd)
echo "<h1>Connection to Database failed<h1>";
	$qry="SELECT * FROM questions WHERE diff=0 ORDER BY RAND() LIMIT 0,1";
	$r=mysql_query($qry);
	$row = mysql_fetch_assoc($r);
	if(isset($_POST['r1']))
		$va="worked";
	else
		$va=$row['question'];
	 echo json_encode( array("ques" => $va ,"a"=>$row['opta'],"b"=>$row['optb'],"c"=>$row['optc'],"d"=>$row['optd'],"ans"=>$row['ans']));
?>
