<?php
require "init.php";

$NAME = $_POST["username"];
$E_MAIL_ID = $_POST["email"];
$PASSWORD = $_POST["password"];
$sql_query = "INSERT INTO `user` (`name`, `email`, `password`) VALUES('$NAME','$E_MAIL_ID','$PASSWORD');";
if(mysqli_query($con,$sql_query))
{
	header( "Location: signin.html" );
	exit;
}
else
{
	echo "Sorry you have not been REGISTERED";
}
?>
