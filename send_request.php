<?php include("connections.php");

$brand = $yearModel = $firstname = $lastname = $email = $phonenumber = $car_qty = "";
$brandErr = $yearModelErr = $firstnameErr = $lastnameErr = $emailErr = $phonenumberErr = $car_qtyErr = "";

if(isset($_POST["btnRegister"])){

	if(empty($_POST["brand"])){
		$brandErr = "Please select brand.";
	}else{
		$brand = $_POST["brand"];
	}

	if(empty($_POST["yearModel"])){
		$yearModelErr = "Please select year.";
	}else{
		$yearModel = $_POST["yearModel"];
	}

	if(empty($_POST["firstname"])){
		$firstnameErr = "Please enter your first name.";
	}else{
		$firstname = $_POST["firstname"];
	}

	if(empty($_POST["lastname"])){
		$lastnameErr = "Please enter your last name.";
	}else{
		$lastname = $_POST["lastname"];
	}

	if(empty($_POST["email"])){
		$emailErr = "Please enter your email.";
	}else{
		$email = $_POST["email"];
	}

	if(empty($_POST["phonenumber"])){
		$phonenumberErr = "Please enter your phone number.";
	}else{
		$phonenumber = $_POST["phonenumber"];
	}

	if(empty($_POST["car_qty"])){
		$car_qtyErr = "Please select quantity.";
	}else{
		$car_qty = $_POST["car_qty"];
	}

//	if ($brand && $yearModel && $firstname && $lastname && $email && $phonenumber && $car_qty) {
	// echo "$brand <br> $yearModel <br> $firstname <br> $lastname <br> $email <br> $phonenumber <br> $car_qty";
//	}
		mysqli_query($connections, "INSERT INTO table_inquiry (brand_name, yearModel, firstname, lastname, email, phonenumber, car_quantity) VALUES('$brand','$yearModel','$firstname','$lastname','$email','$phonenumber','$car_qty')");
	}