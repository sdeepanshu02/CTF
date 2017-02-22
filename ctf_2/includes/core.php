<?php
session_start();
//$con=mysqli_connect("localhost","root","") or die('Cannot connect');
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,'ctfsparsh');

	date_default_timezone_set('Asia/Calcutta');

function checkuserexists($con,$username){
	$resultrow = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE username='$username'"));
	return ($resultrow['id'])?$resultrow['id']:false;
}

function sanitize($con,$shit){
	return mysqli_real_escape_string($con,$shit);
}

function loggable($con,$username,$password){
	$resultrow = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE username='$username'"));
	return (($password) == ($resultrow['password']))?true:false;
}



//  Function to check whether the current problem is already solved by the user or not.
//  Returns false if he or she has already done that else true.
function checkifsolved($con,$referrer){
	$file = substr($referrer,strrpos($referrer,'s/')+2);
	$prob = substr($file,0,strrpos($file,'.php')).',';
	$id = $_SESSION['userid'];

	$resultrow = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE id='$id'"));

	if(strrpos($resultrow['solved'],$prob)===false)
	{
		return false;
	}
	else
	{
		return true;
	}
}

//  Appends the name of the last problem solved by the user in the database
function writetosolved($con,$referrer){
	$file = substr($referrer,strrpos($referrer,'s/')+2);
	$prob = substr($file,0,strrpos($file,'.php')).',';
	$id = $_SESSION['userid'];

	$resultrow = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE id='$id'"));
	$prob = $prob . $resultrow['solved'];
	mysqli_query($con,"UPDATE users SET solved='$prob' WHERE id='$id'");
}

function addpoints($con,$referrer){
	$file = substr($referrer,strrpos($referrer,'s/')+2);
	$prob = substr($file,0,strrpos($file,'.php'));
	$num = intval(substr($prob,-1));
	$id = $_SESSION['userid'];
	if($num<=3){
		$resultrow = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE id='$id'"));
		$pts = 50 + $resultrow['points'];
		mysqli_query($con,"UPDATE users SET points='$pts' WHERE id='$id'");
	}
	else if($num<=7){
		$resultrow = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE id='$id'"));
		$pts = 100 + $resultrow['points'];
		mysqli_query($con,"UPDATE users SET points='$pts' WHERE id='$id'");
	}
	else if($num<=9){
		$resultrow = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE id='$id'"));
		$pts = 200 + $resultrow['points'];
		mysqli_query($con,"UPDATE users SET points='$pts' WHERE id='$id'");
	}
	else echo 'What the hell!';
}

function puttimesincestart($con){
	$id = $_SESSION['userid'];
	$time = date("Y-m-d H:i:s");
	//$time = floor(((time()-date('U',mktime(1,0,0,10,24,2013))+5.5*60*60)/720)-27);
	$resultrow = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE id='$id'"));
	//$time = $time + $resultrow['time'];
	mysqli_query($con,"UPDATE users SET time='$time' WHERE id='$id'");
}

function enablerightclick($con){
	$id = $_SESSION['userid'];
	$resultrow = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE id='$id'"));
	if($resultrow['rightclickdisabled']){
		mysqli_query($con,"UPDATE users SET rightclickdisabled=0 WHERE id='$id'");
		$pts = 0 + $resultrow['points'];
		mysqli_query($con,"UPDATE users SET points='$pts' WHERE id='$id'");
	}
}

?>
