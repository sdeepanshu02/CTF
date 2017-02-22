<?php
include 'includes/core.php';
include 'includes/header.php';
error_reporting(E_ALL);

if(!isset($_SESSION['userid'])){

	echo '<br><br><br><br><br><br><br><br><br><br><br>';
	echo '<div id="guest" style="margin-left:450px;"><h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h1><br/><h2>You are viewing this site as a guest!</h2><br/><p style="margin-left:150px;">Please <span  id="loginspan"  onclick="logmein()"><a href="#">login</a></span> to continue.</p></div>';

}
else
	include 'includes/body.php';

/*echo '<div id="guest"><h2>The event is now offline.</h2><br />The winner shall be announced in some time.<br />And the solution set too will be mailed to you by then.<br />Or if you need the solution set without even registering for the event, just send a request to admin@nitsurat.acm.org .</div>'; */
include 'includes/footer.php';
?>
