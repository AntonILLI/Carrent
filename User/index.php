<?php
session_start();

if(isset($_SESSION["user_ID"])){
	include("../connections.php");
	$user_ID = $_SESSION["user_ID"];
	$get_record = mysqli_query($connections, "SELECT * FROM users WHERE user_ID=$user_ID");
	$row = mysqli_fetch_assoc($get_record);
	$db_first_name = $row["firstname"];
	
}else{
	echo "<script>window.location.href='../';</script>";
}

include("nav.php");

echo $db_first_name;

 ?>