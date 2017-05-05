<?php
	include('databaseconnection.php');
	$qry="INSERT INTO questions values('".$_POST['11']."','".$_POST['1']."','".$_POST['2']."','".$_POST['3']."','".$_POST['4']."','".$_POST['5']."','".$_POST['6']."')";
	$r=mysql_query($qry);	
	header('Refresh: 1; url=index.php');

?>