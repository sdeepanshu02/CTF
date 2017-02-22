<?php


$id = $_REQUEST["q"];
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
    echo 'The flag for question 7 is : untruestory';
}
else
	echo 'Wut bro?';


?>