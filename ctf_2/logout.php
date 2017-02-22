<?php
include 'includes/core.php';

unset($_SESSION['username']);
session_destroy();

//echo 'You are now logged out';

//echo "<a href='index.php'> Home </a>";
header("location: index.php");
?>