<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cars</title>
	<!--[if lt IE 9]>
  	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  	<![endif]-->
  	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <style type="text/css">
    	div#main{
    		margin-bottom:0;
    	}
    </style>
  	
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<nav id="top-nav">
				<ul>
					<li><a href="index.php" title="home page"><span></span></a></li>
					<li><a href="about.php" title="about us" >ABOUT US</a></li>
					<li><a href="cars.php" title="see all cars">ALL CARS</a></li>
					<li><a href="buy.php" title="buy a car">BOUGHT CARS</a></li>
					<li><a href="add-new.php" title="buy a car">ADD NEW CAR</a></li>
					<li><a href="allnews.php" title="see all cars">ALL NEWS</a></li>
					<li><a href="createNews.php" title="create news">ADD NEWS</a></li>
					<li>
						<?php 
							if(isset($_SESSION['fname'])) {
								echo '<a href="logout.php" title="login or register">LOGOUT</a>'."<span style='color:yellow'>Hello,". $_SESSION['fname']."</span>";
							}
							else {
								echo '<a href="log-reg.php" title="login or register">LOGIN/REGISTER</a>';
							}
						 ?>
					</li>
					<li><a href="contacts.php" title="contacts" style="background: #343434;">CONTACTS</a></li>
				</ul>
			</nav>
		</header>
		<div id="main">
		 <div class="contact-page-content" >
			<div class="main-title">
			  <h2>Contact</h2>
			</div>
		 	
		 	<div class="left-sidebar">
		 		<!-- sidebar starts -->
		 		<aside>
		 			<div class="information">
		 			  <h4> Information</h4>
		 			  <p>
		 			  	Phasellus sit amet ultrices leo, nec vehicula urna.
		 			  	Sed orci massa, lobortis quis nisi a, efficitur pharetra nunc.
		 			  </p>
		 			</div>
		 			<div class="inquiries">

		 				<h4>General inquiries</h4>

		 				<ul class="f-inquiries-menu">
		 				  <li>Bregalnica str. 93</li>
		 				  <li>Banishora, Sofia, Bulgaria</li>
		 				</ul>

		 				<ul class="s-inquiries-menu">
		 				  <li>+359 08883 136 120</li>
		 				  <li> <a href="#">support@car.com</a></li>
		 				  <li> <a href="#"> www.cars.com </a></li>
		 				</ul>

		 			</div>
		 			<div class="working-time">

		 				<h4> Working time</h4>

		 				<ul class="f-working-time-menu">
		 				  <li>Monday - Friday <span>  </span></li>
		 				  <li>Saturday <span></span></li>
		 				  <li>Sunday <span></span></li>
		 				</ul>
		 				<ul class="s-working-time-menu">
		 					<li>07:00AM-07:00PM</li>
		 					<li>07:00AM-02:00PM</li>
		 					<li>Closed</li>
		 				</ul>

		 			</div>
		 		</aside>
		 		<!--Sidebar Ends -->
		 	</div>
               
		 	<div class="main-content-center">
		 	  

		 	  <!-- Google map  -->
		 	  <div class="google-map">
			 	 <h2 class="map-title"> Our Location</h2>
			 	<script type="text/javascript" src="http://www.webestools.com/google_map_gen.js?lati=37.062500&long=-95.677000&zoom=4&width=675&height=200&mapType=normal&map_btn_normal=yes&map_btn_satelite=yes&map_btn_mixte=yes&map_small=yes&marqueur=yes&info_bulle="></script><!-- <br /><a href="http://www.webestools.com/google-maps-code-generator-insert-map-on-website-javascript-free-google-map-script.html" style="display:none;">Google Maps code Generator</a> -->
		 	  </div>
		 	

		 	<div class="contact-form">
		 		<h2> Contact Form</h2>
		 		<!-- Contact form  -->
		 		<form action="" name="contacts-form" method="post">

		 			<span>
					   <label for="my-name">Name:</label>
					   <input type="text" name="my-name" id="my-name"  required="required" />
					</span>

					<span>
					   <label for="my-email">Email:</label>
					   <input type="email" name="my-email" id="my-email" required="required"/>
					</span>

					<span>
					   <label for="message" > Message: </label>
					   <textarea name="message" cols="40" rows="3" id="message"  spellcheck="true"   ></textarea>
					</span>

					<input type="submit" class="submit"  value="Send Message" />
					
		 		</form>
		 	</div>
		  </div>
		 </div>
		</div>
		<?php include 'footer.php'; ?>
	</div>
	 <script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>