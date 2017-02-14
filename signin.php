<?php
require "init.php";

$USER_ID = $_POST["username"];
$PASSWORD = $_POST["password"];
$sql_query="SELECT * FROM `user` WHERE name LIKE '$USER_ID' AND password LIKE '$PASSWORD';";
$result = mysqli_query($con,$sql_query);
if(mysqli_num_rows($result)>0)
{
	$row=mysqli_fetch_assoc($result);
	$name = $row["name"];
	$curr_que = $row["curr_que"];
	$sql_query="SELECT * FROM `que` WHERE q_no LIKE '$curr_que';";
	$result = mysqli_query($con,$sql_query);
	$row=mysqli_fetch_assoc($result);
	$image_url =  $row["q_url"];
	setcookie("user_name", $name, time() + (86400 * 30), "/");
	setcookie("curr_que", $curr_que, time() + (86400 * 30), "/");
	setcookie("img_url", $image_url, time() + (86400 * 30), "/");

	if ($curr_que==21) {
		header( "Location: end.html" );
		exit;
	} else {
		header( "Location: Q" . $curr_que . ".html" );
		exit;
	}
}
else
{
	echo "Invalid Credentials";
}
?>
