<?php session_start();
include 'db.php'; 
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
    <link href="css/js-image-slider-5.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
      div#main{
        padding-bottom:20px;
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
					<li><a href="cars.php" title="see all cars" style="background: #343434;">ALL CARS</a></li>
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
          <li><a href="contacts.php" title="contacts">CONTACTS</a></li>
				</ul>
			</nav>
		</header>
		<div id="main">
      <div id="sliderFrame">
        
        <div id="slider">
            <img src="img/main-car.jpg" />
            <img src="img/main-car-1.jpg" />
            <img src="img/main-car-2.jpg" />
            <img src="img/main-car-3.jpg" />
            <img src="img/main-car-4.jpg" />
            <img src="img/main-car-5.jpg" />
            <img src="img/main-car-6.jpg" />
        </div> 
        <div id="thumbs">
            <div class="thumb"><img src="img/main-car.jpg" /></div>
            <div class="thumb"><img src="img/main-car-1.jpg" /></div>
            <div class="thumb"><img src="img/main-car-2.jpg" /></div>
            <div class="thumb"><img src="img/main-car-3.jpg" /></div>
            <div class="thumb"><img src="img/main-car-4.jpg" /></div>
            <div class="thumb"><img src="img/main-car-5.jpg" /></div>
            <div class="thumb"><img src="img/main-car-6.jpg" /></div>
            
        </div>

        
    </div>
     
      <!--  <?php  
          // $sql = "SELECT * FROM newcar";
          // $query = mysqli_query($linkDB, $sql);
          // $row = null;
          // while($res = mysqli_fetch_assoc($query)) {
          //    $row [] = $res;
          // }
          // echo count($row);
          // echo '<pre>';
          // echo print_r($row); 
          // echo '</pre>';
        ?>   -->
        
				<div class="heading"> INTERMEDIATE</div>
        <!-- Check if car if car is bought -->
        <h1><?php if(isset($_GET['buy'])) {
            echo $_GET['buy'];
            } ?></h1>
        <?php 
          $res2 = allCars();
          $pictures=$res2[0]['car_pic'];
          $picArr=explode(",",$pictures);
                     
                 
				echo '<div class="cars-container"><div class="info-panel">
              <div class="car-image"> 
                 <img src="'.$picArr[0].'" alt="'.$res2[0]['car_manif'].'" style="height: 170px;">
              </div>
              <div class="car-info">';
          echo '<h3>'.$res2[0]['car_manif'].' '.$res2[0]['car_model'].'</h3><ul><li><span> Fuel:</span>'.$res2[0]['car_fuel'].'</li><li><span>Class:</span>'.$res2[0]['car_class'].'</li><li><span>Gearbox:</span>'.$res2[0]['car_gearbox'].'</li><li><span>Fuel Consumption:</span>'.$res2[0]['fuel_consumpt'].'</li><li><span> Passengers capacity:</span>'.$res2[0]['car_pass_cap'].'</li><li><span> Price from:</span>'.$res2[0]['car_price'].'USD/day </li></ul>';
         echo '                         	   	  
            </div>
          </div>

          <div class="features">
            <h3>FEATURES</h3>
            <ul class="f-menu">
            ';
            $feat = $res2[0]['car_features'];
            $featuresArr = explode(",", $feat);
            $len = 5;
            for($i = 0; $i < $len; $i++) {
              echo '<li>'.$featuresArr[$i].'</li>';
            }
            echo '</ul>
            <ul class="s-menu">';                          
            for($i = $len; $i < count($featuresArr); $i++) {
              if(array_key_exists($i, $featuresArr)) {
              echo '<li>'.$featuresArr[$i].'</li>';}
              else {
                break;
              }
            } 
            echo '</ul>                   	     
          </div>
          <div class="buttons">          
          <a href="view-car.php?id='.$res2[0]['car_id'].'"  title="View this car" class="buy" >VIEW CAR</a> 
            <a href="buy-car.php?id='.$res2[0]['car_id'].'" class="buy">BUY</a> 
          </div>
      </div>
      <div class="heading" style="margin-top:10px;"> COMPACT</div>';

      for($i=1; $i<count($res2); $i++){
        $pictures=$res2[$i]['car_pic'];
        $picArr=explode(",",$pictures);

        echo '<div class="cars-container"><div class="info-panel">
              <div class="car-image"> 
                 <img src="'.$picArr[0].'" alt="'.$res2[$i]['car_manif'].'">
              </div>
              <div class="car-info">';
          echo '<h3>'.$res2[$i]['car_manif'].' '.$res2[$i]['car_model'].'</h3><ul><li><span> Fuel:</span>'.$res2[$i]['car_fuel'].'</li><li><span>Class:</span>'.$res2[$i]['car_class'].'</li><li><span>Gearbox:</span>'.$res2[$i]['car_gearbox'].'</li><li><span>Fuel Consumption:</span>'.$res2[$i]['fuel_consumpt'].'</li><li><span> Passengers capacity:</span>'.$res2[$i]['car_pass_cap'].'</li><li><span> Price from:</span>'.$res2[$i]['car_price'].'USD/day </li></ul>';
         echo '                                 
            </div>
          </div>

          <div class="features">
            <h3>FEATURES</h3>
            <ul class="f-menu">
            ';
            $feat = $res2[$i]['car_features'];
            $featuresArr = explode(",", $feat);
            $len = 5;
            for($j = 0; $j < $len; $j++) {
              echo '<li>'.$featuresArr[$j].'</li>';
            }
            echo '</ul>
            <ul class="s-menu">';                          
            for($j = $len; $j < count($featuresArr); $j++) {
              if(array_key_exists($j, $featuresArr)) {
              echo '<li>'.$featuresArr[$j].'</li>';}
              else {
                break;
              }
            } 
            echo '</ul>                          
          </div>
          <div class="buttons">
            <a href="view-car.php?id='.$res2[$i]['car_id'].'"  title="View this car" class="buy" >VIEW CAR</a> 
            <a href="buy-car.php?id='.$res2[$i]['car_id'].'" class="buy">BUY</a> 
          </div>
      </div>';
       }
      
    

     
?>
         
		</div>
		<?php 
      include 'footer.php';
    ?>
	</div>
   <script src="js/lightbox-plus-jquery.min.js"></script>
  <!--  <script src="main-gallery.js"></script> -->
   <script src="js/js-image-slider-5.js"></script>
</body>
</html>