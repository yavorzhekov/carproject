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
					<li><a href="about.php" title="about us">ABOUT US</a></li>
					<li><a href="cars.php" title="see all cars">ALL CARS</a></li>
					<li><a href="buy.php" title="buy a car">BOUGHT CARS</a></li>
					<li><a href="add-new.php" title="buy a car">ADD NEW CAR</a></li>
          <li><a href="allnews.php" title="see all cars" style="background: #343434;">ALL NEWS</a></li>
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
      <?php

      $news=allnews(4);
     echo' <h2 class="news-title"> News</h2>
				 <div class="main-news-page" >
              <article>';
        for ($i=0; $i<count($news); $i++)
        {
               echo ' <div class="news-container">
                   <div class="img">
                    <a href=""><img src="'.$news[$i]['news_pic'].'"/ alt=""> </a>
                   </div>
                   <div class="inner-content">
                    <p class="news-title">
                      <a href="www.facebook.com" target="_blank"> '.$news[$i]['news_heading'].'</a>
                    </p>
                    <p class="news-text">'.substr($news[$i]['news_text'],0,1000).'</p>
                    <span class="published-date">'.$news[$i]['news_date'].'</span>
                   <a href="view-more.php?id='.$news[$i]['news_id'].'" class="view-more">View more</a>

                   </div>
                    </div>';

            }        

                    
         
            echo '  </article>
            </div>';
      ?>
		</div>
		<?php 
      include 'footer.php';
    ?>
	</div>
   <script src="js/lightbox-plus-jquery.min.js"></script>
   <script src="main-gallery.js"></script>
</body>
</html>