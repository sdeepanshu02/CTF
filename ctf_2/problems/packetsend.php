<?php


$id = $_REQUEST["q"];
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
    echo 'THE FLAG IS : imtheonewhoknocks';
}
else
	echo 'Wut bro?';


?>