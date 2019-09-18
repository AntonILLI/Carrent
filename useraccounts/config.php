<?php 

$db_user = "root";
$db_pass = "";
$db_name = "useraccounts";

$db = new PDO('mysql:host=localhost;db_name=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//dbname  changed to db_name 09/14/2019