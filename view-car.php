
<?php session_start();
include 'db.php'; 
include 'functions.php';  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cars</title>
	<!--[if lt IE 9]>
  	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  	<![endif]-->
  	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<nav id="top-nav">
				<ul>
					<li><a href="index.php" title="home page"><span></span></a></li>
					<li><a href="about.php" title="about us">ABOUT US</a></li>
					<li><a href="cars.php" title="see all cars" >ALL CARS</a></li>
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
				</ul>
			</nav>
		</header>
		<div id="main">
		 <?php
		 $res2=allCars();
		 $pageID=$_GET['id'];
		 $pictures=$res2[$pageID-1]['car_pic'];
         $picArr=explode(",",$pictures);
		  
			echo '<div class="template">
				<h2> '.$res2[$pageID-1]['car_manif'].' '.$res2[$pageID-1]['car_model'].' </h2>
					<div class="left-side">
					  <!-- Gallery -->
						<div class="main-pic">
					    	<img src="'.$picArr[0].'"  class="mainpic" height="200" >
						</div>';
						
						echo '<div class="smaller-pics">';
                        for($i=0; $i<count($picArr); $i++){
							echo '<img src="'.$picArr[$i].'" alt="'.$res2[$pageID-1]['car_manif'].'" class="small-pics">';
						}

					    echo'
						</div>
					  </div>';
                    
					echo '<div class="right-side">
						<div class="car-features">
							<ul class="f-menu">
								<li><span >Class:</span> '.$res2[$pageID-1]['car_class'].' </li>
								<li><span >GearBox:</span> '.$res2[$pageID-1]['car_gearbox'].'</li>
								<li><span >Max Passengers:</span> '.$res2[$pageID-1]['car_pass_cap'].'</li>
								<li><span >Max Luggage:</span> '.$res2[$pageID-1]['car_max_luggage'].'</li>
								<li><span >Price From: </span> '.$res2[$pageID-1]['car_price'].' USD </li>
								<li><span >Mileage:</span> '.$res2[$pageID-1]['car_mileage'].'</li>
							</ul>
							<ul class="s-menu">
								<li><span >Fuel:</span> '.$res2[$pageID-1]['car_fuel'].'</li>
								<li><span >Fuel Usage:</span> '.$res2[$pageID-1]['fuel_consumpt'].'</li>
								<li><span >Engine Capacity:</span> '.$res2[$pageID-1]['car_engine_vol'].'</li>
								<li><span >Doors:</span> '.$res2[$pageID-1]['car_doors'].'</li>
								<li><span >Deposit: </span> '.$res2[$pageID-1]['car_price'].' USD</li>
							</ul>
							
						</div>';
						

						echo '<div class="additional-info">
							<h3>ADDITIONAL INFORMATION</h3>
							<ul class="f1-menu">';

							$features=$res2[$pageID-1]['car_features'];
		                    $featArr=explode(",",$features);
		                    $len=4;
		                    for ($i=0; $i<$len; $i++){
		                    	echo '<li>'.$featArr[$i].'</li>';
		                    }

						echo '</ul>
							<ul class="s1-menu">';
							for ($i=$len; $i<count($featArr); $i++){
                                   if(array_key_exists($i, $featArr)){
                                   	echo '<li>'.$featArr[$i].'</li>';
                                   }
                                   else{
                                   	break;
                                   }
							}
						echo'
							</ul>
						</div>
					</div>
                    <div class="view-car-buttons">
					  	<a href="buy-car.php?id='.$pageID.'">BUY</a> 
						<a href="#" onclick="history.go(-1)">BACK</a> 
		                <!-- <script>
						  function goBack() {
						    window.history.back();
						   }
                        </script> -->
				    </div>
				</div>';	    
         ?>
		</div>
		<?php 
      include 'footer.php';
         ?>
    </div>
		<script src="js/pic-slide.js"></script>
	</body>
	</html>