<?php
	
	session_start(); 
	include('databaseconnection.php');
	$username = $_POST['username'];
	$emailid = $_POST['emailid'];
	$pass = $_POST['pass'];
	mysql_query("INSERT INTO login(name,mail,password) VALUES						('$username','$emailid','$pass')");	
	header('Location: signup.php');
?>