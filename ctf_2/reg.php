<?php
include 'includes/core.php';

if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['password1']))
	echo 'Please enter your login credentials';
else if(checkuserexists($con,sanitize($con,$_POST['username'])))
	echo 'Email is already Registered.';
	else{
		
		if($_POST['password']==$_POST['password1']){
	
					$name = $_POST['name'];
					$username = $_POST['username'];
					$password = $_POST['password'];
				
				if($username!='' ||$password!='' ){
					
					//Insert Query of SQL
					$query = mysqli_query($con,"insert into users(name, username, password) values ('$name','$username','$password')") or die(mysqli_error($con));
					if(!$query){
					echo $name." ".$username." ".$password;
					echo mysqli_error();
					}else{
						echo "Registration Successfully";
					}
				}
			//echo 'You have successfully logged in.<br />Click <a href="index.php">here</a> to go to the event page.';
			}
		else{
			echo "Password did not match";
		}
			
	}
?>