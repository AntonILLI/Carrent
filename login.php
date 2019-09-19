<?php 
session_start();
include("connections.php");

// ---- This section will prevent from going to previous page upon successfully logging in ------------//

if(isset($_SESSION["user_ID"])){
	$user_ID = $_SESSION["user_ID"];
	$get_record = mysqli_query($connections, "SELECT * FROM users WHERE user_ID=$user_ID");
	$row = mysqli_fetch_assoc($get_record);
	$account_type = $row["account_type"];

	if($account_type == 1) {
		echo "<script>window.location.href='Admin';</script>";
	}else{
		echo "<script>window.location.href='User';</script>";
		}
}

$email = $password = "";
$emailErr = $passwordErr = "";

if(isset($_POST["btnLogin"])){


//----------------------------------------------------------------



//-----------------------------------------------------------------

	if(empty($_POST["email"])) {
		$emailErr = "Email is required!";
	}else{
		$email = $_POST["email"];
			}
	if(empty($_POST["password"])){
		$passwordErr = "Password is required!";
	}else{
		$password = $_POST["password"];
			}
			if ($email && $password) {
				$check_email = mysqli_query($connections, "SELECT * FROM users WHERE email='$email'");
				$check_email_row = mysqli_num_rows($check_email);
				if($check_email_row > 0){
					$row = mysqli_fetch_assoc($check_email);
					$user_ID = $row["user_ID"];
					$db_password = $row["password"];
					$account_type = $row["account_type"];

					if($password == $db_password) {
						$_SESSION["user_ID"] = $user_ID;
						if($account_type == 1) {
							echo "<script>window.location.href='Admin';</script>";
						}else{
							echo "<script>window.location.href='User';</script>";
						}
					}else{
						$passwordErr = "Incorrect Password!";
					}
						}else {
					$emailErr = "Email not registered!";
					}
				}

		}

 



?>

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Car Rentals</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			
			
		</head>
		<body>
<?php 

 ?>
			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
					  
				  	  <a href="index.php"><img src="img/logo02.png" alt="" title="" /></a>
						
				      </div>
					  
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Home</a></li>
				          <li><a href="about.php">About</a></li>
				          <li><a href="cars.php">Cars</a></li>
				          <li><a href="service.php">Service</a></li>
				          <li><a href="contact.php">Contact</a></li>	
				          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->



			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
			
			
			
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
					
		<!----------------------------------------Login and Registration Page --------------------------------------------------->			
						
						<div class="col-lg-5  col-md-6 header-right">
							<h4 class="text-white pb-30">Please Sign In</h4>

							<form action="login.php" method="POST" onsubmit="return submitUserForm();"	class="form" role="form" autocomplete="off">
							    
								
								<div class="from-group">
							    	<input class="form-control txt-field" type="email" name="email" value="<?php echo $email; ?>" placeholder="Email address" required>
							    	<span class="error"><?php echo $emailErr; ?>  </span>

									<input class="form-control txt-field" type="password" name="password" password="password" value="" placeholder="password" required>
									<span class="error"><?php echo $passwordErr; ?></span>
							    </div>

								<div class="form-group row">
							        <div class="col-md-12">
							            	<button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase" name="btnLogin" value="Login">Sign In
							            	</button>

							        </div>
							    </div>

							    	<div class="form-group row">
							    		<div class="col-md-12">
							    		<div class="g-recaptcha" data-sitekey="6Ld_OLkUAAAAAJ6MjJF8CJTnEBc-dyvu9a8vRaD-" data-callback="verifyCaptcha">
							            	</div>
							            	<div id="g-recaptcha-error"></div>
							            </div>
							            </div>

								    <div class="form-group row">
							        	<div class="col-md-12">

								        	<a href="registration.php">
								            <button type="button" class="btn btn-default btn-lg btn-block text-center text-uppercase">Register</button>
							        		</a>

							        		
							    	</div>
								</div>
								
					</form>

</div>		


		<!------------------------------------ End of login & Registration section -------------------------------------------------->		
						
					</div>
				</div>	

			</section>
			<!-- End banner Area -->	

			<!-- Start feature Area -->
			
			<section class="feature-area section-gap" id="service">
				<div class="container">
				
				
					<div class="row d-flex justify-content-center">
					
					
						<div class="col-lg-6 no-padding home-about-right">
							<h1>The Best Car <br>
							Rental Company in the Country</h1>
							<p>
								<span>We are here to listen from you deliver exellence</span>
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
							</p>
							<a class="text-uppercase primary-btn" href="#">get details</a>
						</div>
					
					
					
					
					</div>
					
			
						
					</div>
				</div>	
			</section>
			<!-- End feature Area -->		

			<!-- Start home-about Area -->
			<section class="home-about-area" id="about">
				<div class="container-fluid">				
					<div class="row justify-content-center align-items-center">
										
					
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->	
			

			<!-- Start callaction Area -->
			<section class="callaction-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<h1 class="text-white">Experience Great Support</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
							</p>
							<a class="callaction-btn text-uppercase" href="#">Reach Our Support Team</a>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End callaction Area -->

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
							<div class="row">
								<div class="col-lg-2 col-md-6 col-sm-6">
									<div class="single-footer-widget">
										<h6>Quick links</h6>
										<ul>
											<li><a href="#">Jobs</a></li>
											<li><a href="#">Brand Assets</a></li>
											<li><a href="#">Investor Relations</a></li>
											<li><a href="#">Terms of Service</a></li>
										</ul>								
									</div>
								</div>
								<div class="col-lg-2 col-md-6 col-sm-6">
									<div class="single-footer-widget">
										<h6>Features</h6>
										<ul>
											<li><a href="#">Jobs</a></li>
											<li><a href="#">Brand Assets</a></li>
											<li><a href="#">Investor Relations</a></li>
											<li><a href="#">Terms of Service</a></li>
										</ul>								
									</div>
								</div>
								<div class="col-lg-2 col-md-6 col-sm-6">
									<div class="single-footer-widget">
										<h6>Resources</h6>
										<ul>
											<li><a href="#">Jobs</a></li>
											<li><a href="#">Brand Assets</a></li>
											<li><a href="#">Investor Relations</a></li>
											<li><a href="#">Terms of Service</a></li>
										</ul>								
									</div>
								</div>												
								<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
									<div class="single-footer-widget">
										<h6>Follow Us</h6>
										<p>Let us be social</p>
										<div class="footer-social d-flex align-items-center">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-dribbble"></i></a>
											<a href="#"><i class="fa fa-behance"></i></a>
										</div>
									</div>
								</div>							
								<div class="col-lg-4  col-md-6 col-sm-6">				
										<div class="single-footer-widget">
										<h6>Maps</h6>
										<a href="contact.php"> <img class="footer-map" src="img/footer-map.png" alt="" draggable="false">
										</a>								
										</div>
								</div>
							</div>	
						
	
						
						<p class="mt-50 mx-auto footer-text col-lg-12">
							
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is registered under <a href="wwww.aes.co.nz" target="_blank">AES Car Rental Company.</a>
						</p>											
					</div>
			</footer>	
			<!-- End footer Area -->		

<!--------------CAPTCHA SECTION ------------------------>

<script>
function submitUserForm() {
    var response = grecaptcha.getResponse();
    console.log(response.length);
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">Verification Failed! Please check the box.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha() {
	console.log('verified');
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
</script>


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>
			<script src='https://www.google.com/recaptcha/api.js'></script>

			
		</body>
	</html>



