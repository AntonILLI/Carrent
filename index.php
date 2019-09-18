<?php

require "header.php";

require "connections.php";
$sql = "SELECT * FROM rentcar";
$result = mysqli_query($connections, $sql);
include_once "send_request.php";



if (isset($_SESSION['user_ID'])) {
            
			$sql_user = "SELECT * FROM users WHERE id = ".$_SESSION['user_ID']."";
			$result_user = mysqli_query($connections, $sql_user);
			$row_user = mysqli_fetch_assoc($result_user);			
		}

?>
<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>	
	<div class="container">
	<div class="row fullscreen d-flex align-items-center justify-content-center">
					
		<!-------------------------------------------------------------------------------------------------------------->			
						
<div class="col-lg-5  col-md-6 header-right">
	<form class="form" role="form" autocomplete="off" action="send_request.php" method="POST">

	<h4 class="text-white pb-30">Ready to send your request<?php echo $_SESSION['user_NAME']?></h4>
							
	<div class="form-group row">
		<div class="col-md-12 wrap-left">
			<div class="default-select" id="default-select">
				<select name="brand">
				<option name="brand" value="" disabled selected hidden>Select brand</option>
				<?php while ($row = mysqli_fetch_assoc($result)): ?>	
				<option name="brand" value="Audi"><?php echo $row['name']?></option>
				<?php endwhile ?>
				</select><span class="error"><?php echo $brandErr; ?></span>
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
				<div class="default-select" id="default-select">
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
									<div>
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
					
					<!------
					
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-license"></span>Professional Service</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-phone"></span>Great Support</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						
						<!-
						
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>									
							</div>
						</div>	

							-->
						
					</div>
				</div>	
			</section>

			<!-- End feature Area -->		

			<!-- Start home-about Area -->
			<section class="home-about-area" id="about">
				<div class="container-fluid">				
					<div class="row justify-content-center align-items-center">
					
					<!--------------------
					
						<div class="col-lg-6 no-padding home-about-left">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						
						----------------------------->
						
					
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->	

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
						
						<!----------------------------------
						
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
							
							--------------------------------------------------->
						
								<div class="single-footer-widget">
								<h6>Maps</h6>
								<img class="footer-map" src="img/footer-map.png" alt="" draggable="false">								
								</div>
							</div>
							
							</div>	
						
						
						 
						
						
						
						<p class="mt-50 mx-auto footer-text col-lg-12">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

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



