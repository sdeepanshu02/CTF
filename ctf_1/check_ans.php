<?php
require "init.php";

$Q        = $_POST["que"];
$user_ans = $_POST["answer_user"];
$name     = $_COOKIE["user_name"];

date_default_timezone_set( "Asia/Kolkata" );
$time      = date( "Y-m-d h:i:sa" );

$sql_query = "SELECT * FROM `user` WHERE name = '$name';";
$result    = mysqli_query( $con, $sql_query );
$row       = mysqli_fetch_assoc( $result );
$attempts  = $row["attempts"] + 1;

$sql_query = "UPDATE user SET attempts = $attempts WHERE name = '$name';";
$result    = mysqli_query( $con, $sql_query );

$user_ans  = preg_replace( '/\s+/', '', $user_ans );
$sql_query = "SELECT * FROM `que` WHERE q_no LIKE '$Q';";
$result    = mysqli_query( $con, $sql_query );

if ( mysqli_num_rows( $result ) > 0 ) {
    $row         = mysqli_fetch_assoc( $result );
    $correct_ans = $row["ans"];
    if ( strcasecmp( $correct_ans, $user_ans ) == 0) {
        $Q = $Q + 1;
        setcookie( "curr_que", $Q, time() + ( 86400 * 30 ), "/" );
        $update_sql_query = "UPDATE user SET curr_que = '$Q' WHERE name = '$name';";
        $result           = mysqli_query( $con, $update_sql_query );
				$update_sql_query = "UPDATE user SET last_correct = '$time' WHERE name = '$name';";
        $result           = mysqli_query( $con, $update_sql_query );
        $sql_query        = "SELECT * FROM `que` WHERE q_no LIKE '$Q';";
        $result           = mysqli_query( $con, $sql_query );
        $row              = mysqli_fetch_assoc( $result );
        $image_url        = $row["q_url"];
        setcookie( "img_url", $image_url, time() + ( 86400 * 30 ), "/" );
        echo "<script type='text/javascript'>alert('Correct answer')</script>";
				if ($Q==21) {
					header( "Location: end.html" );
	        exit;
				} else {
					header( "Location: Q" . $Q . ".html" );
	        exit;
				}
    } else {
        echo "<script type='text/javascript'>alert('Oops wrong answer!! TRY AGAIN')</script>";
        header( "Location: Q" . $Q . ".html" );
        exit;
    }
} else {
    echo "Can't check answers right now !!!";
}
?>
