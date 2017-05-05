<?php
	//Start session
	session_start();
 
	//Include database connection details
	require_once('databaseconnection.php');
 
	if (!isset($_SESSION['username'])) 
	{
		$usernam=$_SESSION['username'];

	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pass=$_POST['pass'];
 
	
 
	//Create query
	$qry="SELECT * FROM amount WHERE accountnumber='$username'";
	$result=mysql_query($qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 0) {
			//Login Successful
			mysql_query("INSERT into amount values('$email','$pass','$email')");
			header("location: balance.php");
			exit();
		}else {
			//Login failed
			//$errmsg_arr[] = '<font size=5 color ="black">Invalid Username or Password </font>';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: addaccount1.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}		
	}
	else 
	{
		header("location: index.php");
	}
?>