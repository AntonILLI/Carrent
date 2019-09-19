
<?php
include("connections.php");

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
			<style>
			.error{color:red;}
			</style>
	

			
		</head>
		<body>

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
				          <li><a href="login.php">Login</a></li>
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
					
		<!-------------------------------------------------------------------------------------------------------------->			
						
					<div class="col-lg-5  col-md-6 header-right">
						<form class="form" role="form" autocomplete="off" action="index.php" method="POST">
							<h4 class="text-white pb-30">Send your request!</h4>
							
									<div class="form-group row">
								  			<div class="col-md-6 wrap-left">
										       	<div class="default-select" id="default-select"">
													<select name="brand">
										<option name="brand" value="" disabled selected hidden>Select brand</option>	
					<option name="brand" <?php if($brand == "Audi") {echo "selected";} ?> value="Audi">Audi</option>

					<option name="brand" <?php if($brand == "BMW") {echo "selected";} ?> value="BMW">BMW</option>

<option name="brand" <?php if($brand == "Chevlorette") {echo "selected";} ?>value="Chevlorette">Chevlorette</option>

					<option name="brand" <?php if($brand == "Ford") {echo "selected";} ?>value="Ford">Ford</option>

					<option name="brand" <?php if($brand == "Honda") {echo "selected";} ?>value="Honda">Honda</option>
			<option name="brand" <?php if($brand == "Infiniti") {echo "selected";} ?>value="Infiniti">Infiniti</option>
			<option name="brand" <?php if($brand == "Hyundai") {echo "selected";} ?>value="Hyundai">Hyundai</option>
													<option name="brand" <?php if($brand == "Lexus") {echo "selected"; }?>value="Lexus">Lexus</option>
													<option name="brand" <?php if($brand == "Mazda") {echo "selected";} ?>value="Mazda">Mazda</option>
													<option name="brand" <?php if($brand == "Mercedez") {echo "selected";} ?>value="Mercedez">Mercedez</option>
													<option name="brand" <?php if($brand == "Nissan") {echo "selected";} ?>value="Nissan">Nissan</option>
													<option name="brand" <?php if($brand == "Toyota") {echo "selected";} ?>value="Toyota">Toyota</option>
													<option name="brand" <?php if($brand == "Volkswagen") {echo "selected";} ?>value="Volkswagen">Volkswagen</option>
												</select><span class="error"><?php echo $brandErr; ?></span>
												</div>
											</div>
										<div class="col-md-6 wrap-right">
										       	<div class="default-select" id="default-select"">
													<select name="yearModel">
													<option name="yearModel" value="" disabled selected hidden>Year Model</option>
													<option name="yearModel" value="2004">2004</option>
													<option name="yearModel" value="2005">2005</option>
													<option name="yearModel" value="2006">2006</option>
													<option name="yearModel" value="2007">2007</option>
													<option name="yearModel" value="2008">2008</option>
													<option name="yearModel" value="2009">2009</option>
													<option name="yearModel" value="2010">2010</option>
													<option name="yearModel" value="2011">2011</option>
													<option name="yearModel" value="2012">2012</option>
													<option name="yearModel" value="2013">2013</option>
													<option name="yearModel" value="2014">2014</option>
													<option name="yearModel" value="2015">2015</option>
													<option name="yearModel" value="2016">2016</option>
													<option name="yearModel" value="2017">2017</option>
													<option name="yearModel" value="2018">2018</option>
												</select><span class="error"><?php echo $yearModelErr; ?></span>
											</div>
										</div>
							    	</div>
							
							<div class="from-group">
							<input class="form-control txt-field" type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="First Name" required> <span class="error"><?php echo $firstnameErr; ?></span>
							<input class="form-control txt-field" type="text" name="lastname" value="<?php echo $lastname; ?>" placeholder="Last Name" required><span class="error"><?php echo $lastnameErr; ?></span>
							<input class="form-control txt-field" type="email" name="email" value="<?php echo $email; ?>" placeholder="Email address" required><span class="error"><?php echo $emailErr; ?></span>
							<input class="form-control txt-field" type="text" name="phonenumber" value="<?php echo $phonenumber; ?>" placeholder="Phone number" required><span class="error"><?php echo $phonenumberErr; ?></span>
							</div>
								
								
							<div class="form-group row">
								<div class="col-md-6 wrap-left">
									<div class="default-select" id="default-select"">
										<select name="car_qty">
											<option name="car_qty" value="" disabled selected hidden>Get</option>
												<option name="car_qty" value="One">One</option>
													<option name="car_qty" value="Two">Two</option>
													<option name="car_qty" alue="Three">Three</option>
													<option name="car_qty" value="Four">Four</option>
										</select><span class="error"><?php echo $car_qtyErr; ?></span>
									</div>
								</div>
												
							<div class="col-md-6 wrap-right">

													<div class="input-group dates-wrap">                                          
														<input id="datepicker" class="dates form-control" id="exampleAmount" placeholder="Date" type="text">                        
														<div class="input-group-prepend">
															<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
														</div>											
													</div>
										        </div>
										    </div>
								
										    <div class="form-group row">
										        <div class="col-md-6 wrap-left">
											       	<div class="default-select" id="default-select"">
														<select>
															<option value="" disabled selected hidden>Return</option>
															<option value="1">Return One</option>
															<option value="1">Return Two</option>
															<option value="1">Return Three</option>
															<option value="1">Return Four</option>
														</select>
													</div>
										        </div>
										        <div class="col-md-6 wrap-right">
													<div class="input-group dates-wrap">                                              
														<input id="datepicker2" class="dates form-control" id="exampleAmount" placeholder="Date" type="text">                        
														<div class="input-group-prepend">
															<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
														</div>											
													</div>
										        </div>
										    </div>							    
							
										    <div class="form-group row">
										        <div class="col-md-12">
										            <button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase" name="btnRegister" value="Register">Submit Request</button>
										        </div>
										    </div>
								</form>
							</div>		

				
							<div class="banner-content col-lg-7 col-md-6 ">
							<h6 class="text-white ">Trustworthy, Reliability and Affordability</h6>
							<h1 class="text-white text-uppercase">
								Your in good hands with AES				
							</h1>
							<p class="pt-20 pb-20 text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>				
							
					<!-------		<a href="#" class="primary-btn text-uppercase">Rent Car Now</a>    ----->
														
							</div>
											
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

			<!-- Start model Area -->
			<section class="model-area section-gap" id="cars">
				<div class="container">
					<div class="row d-flex justify-content-center pb-40">
						<div class="col-md-8 pb-40 header-text">
							<h1 class="text-center pb-10">Choose your Desired Car Model</h1>
							<p class="text-center">
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>				
					<div class="active-model-carusel">
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">Audi 3000 msi</h4>
									<h2>$149<span>/day</span></h2>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<p>
									Capacity         : 04 Person <br>
									Doors            : 04 <br>
									Air Condition    : Dual Zone <br>
									Transmission     : Automatic
								</p>
								<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="img/car.jpg" alt="">
							</div>
						</div>
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">Audi 3000 msi</h4>
									<h2>$149<span>/day</span></h2>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<p>
									Capacity         : 04 Person <br>
									Doors            : 04 <br>
									Air Condition    : Dual Zone <br>
									Transmission     : Automatic
								</p>
								<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="img/car.jpg" alt="">
							</div>
						</div>
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">Audi 3000 msi</h4>
									<h2>$149<span>/day</span></h2>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<p>
									Capacity         : 04 Person <br>
									Doors            : 04 <br>
									Air Condition    : Dual Zone <br>
									Transmission     : Automatic
								</p>
								<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="img/car.jpg" alt="">
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End model Area -->
		

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
				</div>
			</footer>	
			<!-- End footer Area -->		


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
		</body>
	</html>



