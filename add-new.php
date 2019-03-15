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
  	<style>
  		div#main { 
	  		/* background: url('img/audi.jpg') center center no-repeat;
	  		 border-top:1px solid black;
	  		 */
  		}
  	</style>
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<nav id="top-nav">
				<ul>
					<li><a href="index.php" title="home page"><span></span></a></li>
					<li><a href="about.php" title="about us">ABOUT US</a></li>
					<li><a href="cars.php" title="see all cars">ALL CARS</a></li>
					<li><a href="buy.php" title="buy a car">BOUGHT CARS</a></li>
					<li><a href="add-new.php" title="buy a car" style="background: #343434;">ADD NEW CAR</a></li>
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
					<li><a href="contacts.php" title="contacts">CONTACTS</a></li>
				</ul>
			</nav>
		</header>
		<div id="main" style="margin-bottom:20px;">
		  <?php
		  if(isset($_SESSION['fname']))
		   {
		   echo'	<div class="insert-car-form">
		    <div class="title">
		    	<h2>Add new car</h2>
		    </div>
		   
			<form action="insert-car.php" method="POST" name="add-new-car">
			 <div class="fields">

				<div class="f-eight">
						<span>

						<strong> Manifacturer: </strong>
						 <input type="text" name="car_manif" required="required" /> 
					</span>
					<span>
						<strong>Model:</strong>
						<input type="text" name="car_model" required="true" /> 
					</span>
					
					<span>
						<strong>Picture:</strong>
						 <input type="text" name="car_pic" /> 
					</span>

					<span>
						<strong>Fuel:</strong>
					     <input type="text" name="car_fuel" required="true" /> 
					</span>
					<span>
						<strong>Engine volume:</strong>
					     <input type="text" name="engine_vol"  required="true"/> 
					</span>
					<span>
						<!-- Vehicle identification number - VIN -->
						<strong>VIN:</strong>
					     <input type="text" name="car_VIN"  required="true" /> 
					</span>
					<span>
						<strong>Gearbox:</strong>
					     <input type="text" name="car_gearbox" /> 
					</span>
					<span>
						<strong>Fuel consumption:</strong>
					     <input type="text" name="car_consumpt" /> 
					</span>
					<span>
			  </div>
              <div class="s-eight">
	              	<span>
						<strong>Passenger capacity:</strong>
					     <input type="text" name="pass_cap" /> 
					</span>
					<span>
						<strong>Price:</strong>
					     <input type="text" name="car_price" required /> 
					</span>
					<span>
						<strong>Class:</strong>
					     <input type="text" name="car_class" />
					</span>
					<span>
						<strong>Features:</strong>
					     <input type="text" name="car_feat" /> 
					</span>
					<span>
						<strong>Mileage:</strong>
					     <input type="text" name="car_mill" /> 
					</span>
					<span>
						<strong>Doors: </strong>
					    <input type="text" name="car_doors" /> 
					</span>
					<span>
						<strong>Max Luggage: </strong>
					    <input type="text" name="car_luggage" /> 
					</span>	
					<span>
						<strong>Car Tires: </strong>
					    <input type="text" name="car_tires" /> 
					</span>	
			</div>				
		 </div>
				    <div class="buttons">
				     
				   	  <input type="submit" value="Add car">
					  <input type="reset" value="Clear form">
					
				    </div>
				    	
			</form>
		  </div> ';}
		    else{
               echo '<h2 style="text-align:center;"> You have to login or register </h2>';
		    }
		  ?>
		</div>
		<?php include_once 'footer.php'; ?>
	</div>
	 <script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>