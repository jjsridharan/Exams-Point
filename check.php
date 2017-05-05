<?php
session_start(); 
include('databaseconnection.php');
$error=''; 
//if (isset($_POST['submit'])) {
if (empty($_POST['emailid']) || empty($_POST['pass']))
{
	$error = "Username or Password is invalid";
}
//}
else
{
$username=$_POST['emailid'];
$password=$_POST['pass'];
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$query = mysql_query("select * from login where password='$password' AND mail='$username'");
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username;
header("location: a1.php"); 
} 
else 
{
	$error = "Username or Password is invalid";
} 
}
?>