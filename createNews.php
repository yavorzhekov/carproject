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
					<li><a href="createNews.php" title="create news" style="background: #343434;">ADD NEWS</a></li>
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
           
		  if(isset($_SESSION['fname'])){
		  	echo '<div class="create">
		   <div class="add-news-form">
		    <div class="title">
		    	<h2>Create news</h2>
		    </div>
		    
			<form action="insert-news.php" method="POST" name="add-news">
				<div class="fields">

					<span>
					   <label for="title">Title:</label>
					   <input type="text" name="title" id="title"  required="required" />
					</span>
					<span>
					   <label for="date">Date:</label>
					   <input type="text" name="date" id="date"  required="required" />
					</span>
					<span>
					   <label for="author">Author:</label>
					   <input type="text" name="author" id="author"  required="required" />
					</span>

					<span>
					   <label for="picture">Picture:</label>
					   <input type="text" name="picture" id="picture"/>
					</span>

					<span>
					   <label for="content" > Content: </label>
					   <textarea name="content" cols="40" rows="3" id="content"  spellcheck="true"   ></textarea>
					</span>
				</div>
			    <div class="buttons">
			   	  <input type="submit" value="Add news">
				  <input type="reset" value="Clear form" style="margin-left:20px;">
			    </div>
				
			</form>
		  </div>';
		  $result=allNews(3);
		  
		  echo '<div class="last-news">
		  	<article>
		          	<p class="title">The latest News</p>

		          ';
		          for($i=0; $i<count($result); $i++){

			        echo'<div class="news-container">
				          	 <div class="img">
				          	 	<a href="view-more.php?id='.$result[$i]['news_id'].'" target="_blank"><img src="'.$result[$i]['news_pic'].'"/ alt=""> </a>
				          	 </div>
				          	 <div class="inner-content">
				          	 	<p class="news-title">
				          	 		<a href="view-more.php?id='.$result[$i]['news_id'].'" target="_blank"> '.$result[$i]['news_heading'].'</a>
				          	 	</p>
				          	 	<p class="news-text"> '.substr($result[$i]['news_text'],0, 100).'</p>
				          	 	<span class="published-date">'.$result[$i]['news_date'].'</span>
	                           <a href="view-more.php?id='.$result[$i]['news_id'].'" class="view-more" target="_blank">View more</a>
	                         </div>
                         </div>
                        ' ;
                          
                        }

			          	echo' 
			          	
                   </div>
		             
		          </article>
		  
		 </div>';

		 }
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