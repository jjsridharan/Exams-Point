<?php
//echo $_SESSION['login_user'];
include("databaseconnection.php");
$query=mysql_query("SELECT name,mail,password FROM login WHERE mail='{$_SESSION['login_user']}' ");
if($query === FALSE) 
{ 
    die(mysql_error()); // TODO: better error handling
}
$res=mysql_fetch_array($query);
?>