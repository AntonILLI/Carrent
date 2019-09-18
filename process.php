<?php 
require_once('config.php');
 ?>
<?php 

	if(isset($_POST)){

		$firstname 		= $_POST['firstname'];
		$lastname  		= $_POST['lastname'];
		$email     		= $_POST['email'];
		$phonenumber 	= $_POST['phonenumber'];
		$homeaddress 	= $_POST['homeaddress'];
		$password		= $_POST['password'];
		//$password 		= sha1($_POST['password']);
		//$password = password_hash($_POST['password'], PASSWORD_DEFAULT);    


		$sql = "INSERT INTO users (firstname, lastname, email, phonenumber, homeaddress, password ) VALUES(?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);

		$result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $homeaddress, $password]);
		if($result){
			echo 'Your information have been saved successfully!';
		}else{
			echo 'An error has occurred while saving.';
		}
}else{
	echo 'no data';
}

 ?>