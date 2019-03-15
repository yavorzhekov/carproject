<?php session_start();
include 'functions.php'; ?>
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
	<div id="wrapper">
		<header id="header">
			<nav id="top-nav">
				<ul>
					<li><a href="index.php" title="home page"><span></span></a></li>
					<li><a href="about.php" title="about us">ABOUT US</a></li>
					<li><a href="cars.php" title="see all cars">ALL CARS</a></li>
					<li><a href="buy.php" title="buy a car" style="background: #343434;">BOUGHT CARS</a></li>
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
					<li><a href="contacts.php" title="contacts">CONTACTS</a></li>
				</ul>
			</nav>
		</header>
		<div id="main">
				
			
			<div class="bought-car-vision">
			<?php 	
				$allOrders = allOrders();
				
				/*echo '<pre>';
				print_r($allOrders);
				echo '</pre>';*/
				
				for($i = 0; $i < count($allOrders); $i++) {
					$pics=$allOrders[$i]['car_pic'];
				    $picssArr=explode(",",$pics);

				  echo '<fieldset>
				  	 <legend> '.$allOrders[$i]['order_id'].' <!-- bought car number --> </legend>

				    <div class="bought-car-image">

				    	<img src='.$picssArr[0].'>
				    </div>
	                <div class="details">
					    <ul class="car-profile">
					    	<li>Manifacturer: <span>'.$allOrders[$i]['car_manif'].'</span></li>
					    	<li>Model: <span>'.$allOrders[$i]['car_model'].'</span>  </li>
					    	<li>Class: <span>'.$allOrders[$i]['car_class'].'</span>  </li>
					    	<li>Fuel: <span>'.$allOrders[$i]['car_fuel'].'</span></li>
					    	<li>Price: <span>'.$allOrders[$i]['car_price'].'</span></li>

					    </ul>

					    <ul class="other-information">
					    	<li>Bought by: <span>'.$allOrders[$i]['user_fname']." ".$allOrders[$i]['user_lname'].'</span></li>
					    	<li>Phone: <span>'.$allOrders[$i]['user_phone'].'</span></li>
					    	<li>Email: <span>'.$allOrders[$i]['user_email'].'</span></li>
					    	<li>Address: <span>'.$allOrders[$i]['user_address'].'</span></li>
					    	<li>Date: <span>'.$allOrders[$i]['order_date'].'</span></li>
					    </ul>
	                </div>

				  </fieldset>';
				}
			  ?>
		    </div>
		<!-- <?php 
			// $orders = allOrders();
			// $len = 4;
			// echo '<table><tr><th>Order ID: </th><th>Car ID: </th><th>User ID: </th><th>Date of order:</th></tr>';
			// for($i = 0; $i < count($orders); $i++) {
			// 	echo '<tr><td>'.$orders[$i]['order_id'].'</td>
			// 	<td>'.$orders[$i]['order_nc_id'].'</td>
			// 	<td>'.$orders[$i]['order_u_id'].'</td>
			// 	<td>'.$orders[$i]['order_date'].'</td></tr>';
			// }
			// echo '</table>';

		 ?> -->

		</div>
		<?php include 'footer.php'; ?>
	</div>
	 <script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>