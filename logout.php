<?php 
session_start();
include("connections.php");
$user_ID = $_SESSION["user_ID"];
$user_md5 = md5($user_ID);

function rand_a($length = 50) {
	$str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$shuffled = substr(str_shuffle( $str ), 0, $length );
	return $shuffled;
}
$shuffled_logout= rand_a (57);
unset($_SESSION['user_ID']);
session_unset();
session_destroy();
echo "Signing out... Please wait.";
echo "<script>window.location.href='index.php?logout=$shuffled_logout&v_1=$user_md5';</script>";
exit();
 ?>