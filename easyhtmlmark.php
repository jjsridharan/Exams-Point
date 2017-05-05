<?php 
session_start();
if(!isset($_SESSION['login_user']))
{
	echo "<script type='text/javascript'>alert('You must LOGIN inorder to participate in tests');</script>";
	header("Location:login.php");
}
include("databaseconnection.php");
$mark=0;
if(isset($_SESSION['q1']) and $_SESSION['q1']=="1995")
{
	$mark=$mark+1;
}
if(isset($_SESSION['q2']) and $_SESSION['q2']=="1995")
{
	$mark=$mark+1;
}
if(isset($_SESSION['q3']) and $_SESSION['q3']=="1995")
{
	$mark=$mark+1;
}
if(isset($_SESSION['q4']) and $_SESSION['q4']=="1995")
{
	$mark=$mark+1;
}if(isset($_SESSION['q5']) and $_SESSION['q5']=="1995")
{
	$mark=$mark+1;
}if(isset($_SESSION['q6']) and $_SESSION['q6']=="1995")
{
	$mark=$mark+1;
}if(isset($_SESSION['q7']) and $_SESSION['q7']=="1995")
{
	$mark=$mark+1;
}if(isset($_SESSION['q8']) and $_SESSION['q8']=="1995")
{
	$mark=$mark+1;
}if(isset($_SESSION['q9']) and $_SESSION['q9']=="1995")
{
	$mark=$mark+1;
}if(isset($_SESSION['q10']) and $_SESSION['q10']=="1995")
{
	$mark=$mark+1;
}
$sel="mark";
$res=mysql_query("select identi from login where mail='{$_SESSION['login_user']}'");
$s=mysql_fetch_assoc($res);
$a=($s["identi"]+1)%3;
$sel=$sel.$a;
trim($sel);
echo "<strong>Your Total Marks=$mark</strong>";
echo "<br><br>";
echo "<strong>Login User=</strong>";
$qry="UPDATE LOGIN  SET ";
$qry=$qry.$sel;
$qry=$qry."='$mark',identi='$a' WHERE mail='{$_SESSION['login_user']}'";
echo $_SESSION['login_user'];
$s=mysql_query($qry);
unset($_SESSION['q1']);
?>