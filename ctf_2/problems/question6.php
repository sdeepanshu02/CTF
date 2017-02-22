	<?php
	error_reporting(0);
include '../includes/core.php';
//include '../includes/header.php';
?>
	<div class="sponser" style="position: absolute; left: 15px;">
	<img class="sponser" style="margin-top:20px; width:20%; height: 7%;" src="../includes/apptus_logo.png"></img>
	<h3 style="position:absolute; left:30px;">Coding Event Sponser</h3>
	</div>
	<div id="container" align="center">
	<h2>Does that make any sense?</h2>
	<style>

</style>
<?php
if(!isset($_SESSION['userid']))
	echo 'Please login first' ;
else{
	if(!checkifsolved($con,$_SERVER['REQUEST_URI']))
	{
		
	
		if(empty($_POST['flag']) || sanitize($con,$_POST['flag'])!='highfive'){
			
			echo '<img src="q6.png"><br />
			Flag:<form method="POST" action=""><input type="text" name="flag" /><input type="submit" value="Submit"/></form>';
		}
		else{
			echo 'You made it right. Go solve the next problem.<br /><br />';
			echo '<a href="question7.php">Next &rarr;</a><span>';
			writetosolved($con,$_SERVER['REQUEST_URI']);
			addpoints($con,$_SERVER['REQUEST_URI']);
			puttimesincestart($con);
		}
		
}
	else{
		echo 'This problem is now disabled for you! Go solve next problem.<br /><br />';
			echo '<a href="question2.php"> Next &rarr;</a><span>';
		//echo '<span onclick="javascript:window.close()"><a href="#">Close this page</a><span>';
	}
}
include '../includes/footer.php';
?>