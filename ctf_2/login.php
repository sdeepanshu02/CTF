<?php
include 'includes/core.php';

if(empty($_POST['username']) || empty($_POST['password']))
	echo 'Please enter your login credentials';
else if(!checkuserexists($con,sanitize($con,$_POST['username'])))
	echo 'You haven\'t registered for CTF! And you can\'t now.';
	else{
		if(!loggable($con,sanitize($con,$_POST['username']),sanitize($con,$_POST['password'])))
			echo 'This username/password combination is incorrect.';
		else{
			$username = sanitize($con,$_POST['username']);
			$resultrow = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE username='$username'"));
			$_SESSION['userid'] = $resultrow['id'];
			header("location: index.php");
			//echo 'You have successfully logged in.<br />Click <a href="index.php">here</a> to go to the event page.';
			}
	}
?>