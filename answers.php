<?php
session_start();
echo "hi";
$_SESSION['q1']=$_POST['q1'];
$_SESSION['q2']=$_POST['q2'];
$_SESSION['q3']=$_POST['q3'];
$_SESSION['q4']=$_POST['q4'];
$_SESSION['q5']=$_POST['q5'];
header("Location: easyhtml1.php");
?>