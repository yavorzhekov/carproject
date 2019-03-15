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
  			padding-bottom: 0;
  		}
  	</style>
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<nav id="top-nav">
				<ul>
					<li><a href="index.php" title="home page"><span></span></a></li>
					<li><a href="about.php" title="about us" style="background: #343434;">ABOUT US</a></li>
					<li><a href="cars.php" title="see all cars">ALL CARS</a></li>
					<li><a href="buy.php" title="buy a car">BOUGHT CARS</a></li>
					<li><a href="add-new.php" title="buy a car">ADD NEW CAR</a></li><li><a href="allnews.php" title="see all cars">ALL NEWS</a></li>
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
		<div id="main" >
		  <div class="about-us-heading">
		     <h1>About us </h1>
		  </div>
		  <div class="about-us">
		  	
		  	<article>
		  		<div class="about-us-content">
		  		 <div class="fig-side">
		  		  <figure>
		  		  	<a href="img/audi-a6.jpg" target="_blank"><img src="img/audi-a6-1.jpg" alt="audi-a6" width="450"/></a>
		  		  	<figcaption>New Audi A6 2018</figcaption>
		  		  </figure>
		  		 </div>
		  		  <div class="text">
		  			<h4>Who we are ?</h4>
		  			<p> Duis eros ante, aliquet id mi sit amet, tristique tincidunt nisi. Ut quam sem, bibendum ac laoreet et, commodo ut diam. Vivamus ac orci sed est lacinia sodales tempor sit amet dolor. Curabitur orci nulla, venenatis sed sollicitudin ut, gravida elementum nulla. Cras eros enim, finibus vitae dolor a, feugiat ullamcorper risus. Suspendisse maximus, urna et molestie aliquam, enim felis semper erat, sed rhoncus nisi odio non lectus. Nunc tempor vulputate mauris, eu blandit elit bibendum in. Fusce molestie tellus dolor, in sagittis mauris consectetur posuere. Fusce cursus sem quis sodales tempor. Pellentesque in urna quis neque luctus pellentesque at a dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. In at facilisis risus, sollicitudin cursus tellus. Integer ac finibus neque, in eleifend neque. </p>
		  		  </div>
		  		</div>

		  		<div class="about-us-content">
		  		  <div class="fig-side">
		  		       <figure>
		  		  	    <a href="img/bmw-i8.jpg" target="_blank"><img src="img/bmw-i8-1.jpg" alt="bmw-i8" width="450"/></a>
		  		  	    <figcaption>BMW i8 2018 premium</figcaption>
		  		      </figure>
		  		    </div>
                  <div class="text">
		  			<h4>Our Mission</h4>
		  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet suscipit erat. Fusce quis viverra eros. Proin et massa non eros semper mattis nec in neque. Suspendisse hendrerit vehicula dictum. Nam vitae massa lectus. Ut dapibus, mauris a varius convallis, diam risus facilisis orci, a congue lectus ligula at nunc. Cras lobortis velit non pulvinar varius.</p>

		  			<p>Nam feugiat aliquam ipsum et dignissim. Nam gravida mi lectus, non sodales neque iaculis in. Curabitur eu nisl risus. Integer bibendum eros ipsum, finibus hendrerit justo tincidunt in. Pellentesque auctor fringilla nisl, non molestie est finibus at. Phasellus lectus felis, auctor non lacinia vel, interdum sed justo. Phasellus efficitur porttitor varius.</p>
		  		  </div>
		  		</div>
		  	</article>
		  </div>

		</div>
		<?php include 'footer.php'; ?>
	</div>
 <script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>