<?php session_start();
include 'functions.php';
 ?>
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
</head>
<body>
	<div id="wrapper" >
		<header id="header">
			<nav id="top-nav">
				<ul>
					<li><a href="index.php" title="home page"><span></span></a></li>
					<li><a href="about.php" title="about us">ABOUT US</a></li>
					<li><a href="cars.php" title="see all cars">ALL CARS</a></li>
					<li><a href="buy.php" title="buy a car">BOUGHT CARS</a></li>
					<li><a href="add-new.php" title="buy a car">ADD NEW CAR</a></li>
					<li><a href="allnews.php" title="see all cars">ALL NEWS</a></li>
					<li><a href="createNews.php" title="create news">ADD NEWS</a></li>
					<li>
						<?php 
							if(isset($_SESSION['fname'])) {
								echo '<a href="logout.php" title="login or register" style="background: #343434;">LOGOUT</a>'."<span style='color:yellow'>Hello,". $_SESSION['fname']."</span>";
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
		<div id="main">
		<script type="text/javascript">
			/*var conf = confirm("Are you sure to proceed buying?");
			console.log(conf);
			if(conf == true) {

			}*/
		</script>
		   <?php 
				if(isset($_SESSION['fname'])) {
				$carId = $_GET['id'];
				$allCars = allCars($carId);
				$pics=$allCars[0]['car_pic'];
				$picssArr=explode(",",$pics);				
				$user=showUser();
				
			 
		   echo '<div class="buy-car-wrap">
			      <form action="#" method="POST">
			        <div class="car-profile">
                     <h3> Car information </h3>
			   	     <div class="add-pic">
			   	 	   <img src="'.$picssArr[0].'">
			   	     </div>
			   	     <div class="add-info">
			   	 	   <ul>
			   	 	     <li><span>Manifacturer:</span> '.$allCars[0]['car_manif'].'  </li>
			   	 	     <li><span>Model:</span> '.$allCars[0]['car_model'].'  </li>
			   	 	     <li><span>Class:</span> '.$allCars[0]['car_class'].' </li>
			   	 	     <li><span>Price:</span> '.$allCars[0]['car_price'].' </li>
			   	 	   </ul>

			   	     </div>
			   	     
                     <div class="buyer-profile">
                       
                	   <ul>
                	     <li><p>Buyer Profile </p></li>
                	     <li> <span>First Name:</span> '.$user[0]['user_fname'].'  </li>
                	     <li> <span> Last Name:</span> '.$user[0]['user_lname'].' </li>
                	     <li> <span>Address:</span> '.$user[0]['user_address'].'  </li>
                	     <li> <span>Phone:</span> '.$user[0]['user_phone'].' </li>
                	     <li> <span>Email:</span> '.$user[0]['user_email'].' </li>
                	  </ul>
                    </div>
			     </div>

                <a href="confirm-order.php?userId='.$user[0]['user_id'].'&carId='.$carId.'"><input type="button" value="Confirm Order" /></a> 
			</form>
           </div>';
				}
				else {
					echo '<h1>Registration required!</h1>';
				}
           ?> 
		</div>
		<?php include 'footer.php'; ?>

	</div>
 <script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>