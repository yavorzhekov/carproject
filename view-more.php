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
					<li><a href="buy.php" title="buy a car">BOUGHT CARS</a></li>
					<li><a href="add-new.php" title="buy a car">ADD NEW CAR</a></li>
					<li><a href="allnews.php" title="see all cars">ALL NEWS</a></li>
					<li><a href="createNews.php" title="create news" ">ADD NEWS</a></li>
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
		  <?php
		   $result= allNews();
		   $pageID=$_GET['id'];

				echo'<div class="article">
				  	   <article>
				  	     <h2> '.$result[$pageID-1]['news_heading'].'</h2>
				  		 <div class="image"> 
				  		   <img src="'.$result[$pageID-1]['news_pic'].'">
				  		</div>
				  		<div class="view-more-content">
				  		   <p >
				  			'.$result[$pageID-1]['news_text'].'
				  		   </p>
				  		</div>
				  		<div class="date-and-author">
				  			<span>Date: '.$result[$pageID-1]['news_date'].'</span>
				  			<span>Author: '.$result[$pageID-1]['news_author'].'</span>
				  		</div>
				  		
				  		
				  	</article>
				  </div>';
				  
		  ?>
				</div>
		<?php include_once 'footer.php'; ?>
	</div>
	 <script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>