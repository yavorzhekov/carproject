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
    <link rel="stylesheet" type="text/css" href="css/js-image-slider.css">

    <style>
        div#wrapper{
        	background:#000;
        }
        div.marquee{
        	background:#fff;
        	width:1164px;
        	margin:20px 0 10px 0;


        }
    	div.marquee marquee {
    		color:#000;
    		margin-right:70px;
    		padding:5px;
    		font-size:20px;
    		font-style:italic;
    		color:#484848;
    	}
    </style>
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<nav id="top-nav">
				<ul>
					<li><a href="index.php" title="home page" style="background: #343434;"><span></span></a></li>
					<li><a href="about.php" title="about us">ABOUT US</a></li>
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
					<li><a href="contacts.php" title="contacts">CONTACTS</a></li>
				</ul>
			</nav>
		</header>

		<div id="main" style="margin-left:50px">
			
	         <div class="content">
	          <div class="marquee">
				<marquee onmouseover="stop()" onmouseout="start()">"The cars we drive say a lot about us" - Alexandra Paul</marquee>
	          </div>

              <div class="gallery-and-text">
            	<div id="sliderFrame">
		         <div id="slider">
		            <img src="img/f1.jpg" />
		            <img src="img/f2.png" />
		            <img src="img/f3.png" />
		            <img src="img/f4.png" />
		            <img src="img/f5.jpg" />
		         </div>
	            </div>
                <!-- Content menu starts -->
	            <div class="centered-content-menu">
	            	<ul class="centered-menu">
	            		<li><a href="#" style="border:none;" class="links" linkId="0">Our Mission</a></li>
	            		<li><a href="#" class="links" linkId="1">News</a></li>
	            		<li><a href="#" class="links" linkId="2">Events</a></li>
	            		<li><a href="#" class="links" linkId="3">Contacts</a></li>
	            		<li><a href="#" class="links" linkId="4">FAQ</a></li>
	            	</ul>
	            </div>
	            <!-- End of  Content menu -->

	            <div class="text-box">
		          <article>
		          	 <p class="title" style="text-align:center;"> Our mission</p>

		             <p class="par-content"> Etiam eleifend, leo ut laoreet condimentum, dui metus vestibulum odio, eget malesuada orci est a orci. Praesent nisi dolor, porta eget neque suscipit, dapibus tempus elit. Duis ut ullamcorper nulla. Donec ultrices volutpat ante, ac mattis nulla. Nullam porttitor, neque id pellentesque accumsan, nibh diam eleifend mauris, vitae tincidunt neque arcu eu tellus. Nulla non tempus tellus. Nam id nisl convallis, congue lacus vitae, gravida leo. Aliquam vulputate nisi massa. Phasellus suscipit diam quis nisl auctor consectetur. Curabitur vel hendrerit nulla. Suspendisse rutrum mattis ultrices. Proin lorem lectus, imperdiet a ex vel, consectetur commodo odio.
		             </p>

		             <p class="par-content">
		           	Vivamus egestas lectus nibh, sed ultrices eros sagittis quis. Suspendisse vitae diam porta, consequat ipsum vitae, imperdiet nisi. Suspendisse dapibus, velit quis aliquam maximus, erat neque eleifend ante, at imperdiet ante velit id lorem. Ut et ex orci. Aenean eu risus id ex pretium lobortis sed vel ex. In hac habitasse platea dictumst. Mauris eu mollis quam. Mauris fringilla nisl nec enim ultricies, ac consectetur nunc porta. Integer nunc felis, pretium eget ligula vel, varius pretium magna. Praesent bibendum arcu et iaculis volutpat. 
		           </p>
		          </article>
		        </div>
                 <?php
                 $news=allnews(3);
		        echo'<div class="text-box latest-news"">
		          <article>
		          	<p class="title">The latest News</p>';
		          	for($i=0; $i<count($news); $i++){
		          	echo'<div class="news-container">
			          	 <div class="img">
			          	 	<a href=""><img src="'.$news[$i]['news_pic'].'"/ alt="honda"> </a>
			          	 </div>
			          	 <div class="inner-content">
			          	 	<p class="news-title">
			          	 		<a href=""> '.$news[$i]['news_heading'].'</a>
			          	 	</p>
			          	 	<p class="news-text"> '.substr($news[$i]['news_text'],0, 120).'</p>
			          	 	<span class="published-date">'.$news[$i]['news_date'].'</span>
			          	 	<a href="view-more.php?id='.$news[$i]['news_id'].'" class="view-more" target="_blank" style="text-decoration:none; display:inline-block; margin-left:20px;">View more</a>

			          	 </div>
			          	
                    </div>';
                    }
		             
		         echo' </article>
		        </div>';
                ?>
		        <div class="text-box events">
		          <article>
		          	 

		          </article>
		        </div>
		        <div class="text-box contacts">
		          <article>
		          	 <h3> Contact us</h3>
		          	 <p class="our-office">Our Office - <span>Sofia, Bularia - Bregalnica str. 93</span></p>
		          	 <div class="google-map">
					 	 <script type="text/javascript" src="http://www.webestools.com/google_map_gen.js?lati=37.062500&long=-95.677000&zoom=4&width=675&height=200&mapType=normal&map_btn_normal=yes&map_btn_satelite=yes&map_btn_mixte=yes&map_small=yes&marqueur=yes&info_bulle="></script><!-- <br /><a href="http://www.webestools.com/google-maps-code-generator-insert-map-on-website-javascript-free-google-map-script.html" style="display:none;">Google Maps code Generator</a> -->
		 	 		 </div>
		 	 		 <span>For more information - <a href="contacts.php">click here </a>!</span>

		  
		          </article>
		        </div>
		        <div class="text-box FAQ" >
		          <article>
                    <p class="title" style="margin-left:20px;"> FAQ </p>
                    <div>
	                    <!-- <p onclick="showHide(this)"> What type of documents should I show 	to the representatives of a rental company when picking-up a car?</p> 
	                    -->
		          	  <p class="question"> What type of documents should I show to the representatives of a rental company when
		          	   picking-up a car?</p>
                      <p class="answer">
                       You must have a credit card in the lead drivers name with sufficient funds to cover the excess and the driving license. In some cases be ready also to provide an air ticket and passport. </p> 
                    </div>

                    <div>
                      <p  class="question"> Can the cars-scanner.com company rent a vehicle for renters under 21 years old?  </p>
                      <p class="answer">We provide rental service to the drivers over 21 years old. Maximum driver’s age is 75 years old.</p>
                    </div>

                    <div>
                      <p class="question"> Can I cross the border of a country where I rented a car?</p>
                      <p class="answer">	
					   Yes, it’s possible, but not in every case. You can read the policy of border crossing in terms and conditions of booking by clicking on "rate details”.</p>
                    </div>
                    <div>
                      <p class="question" >	 What cards cars-scanner.com accepts for payment? </p>
                      <p class="answer">	
						MasterCard, Visa are accepted for vehicle rental payment.</p>
                    </div>
                    <div>
                      <p class="question"> 	Is there a minimum car rental period your company allows? </p>
                      <p class="answer">	A minimum rental period is one day (24 hours) at cars-scanner.com. You can rent a vehicle for a shorter period, however, in this case your funds are non-refundable for the time unused. </p>
                    </div>

                    <div>
                      <p class="question" >Do I have to pay additional local fees?</p>
                      <p class="answer"> For the convenience of our customers cars-scanner.com tries to provide services on car rental with "all inclusive" system. But some countries require the payment of local fees. For example, in Jersey and Barbados there is a Licensee Fee charged, in the Republic of South Africa a Contract Fee imposed, in Austria – a Government Tax.
					  You will also have to pay for selected extras to a car rental company (roof racks for skis and bicycles, child seats, additional insurance, etc.). Your voucher clearly specifies all compulsory fees you have to pay when booking.
					</p>      
                    </div>
		          </article>
		        </div>
		        <!-- Polls-section starts -->
		        <section class="polls-section">
		       	 <div class="three-polls" >
		       	   <h2 id="show-polls">Show Polls &#8609;</h2>
                   <div id="polls">
			       	 	<div class="f-poll">
	                       
	                    </div>
			       	 	<div class="s-poll">
	                      
	                     </div> 
			       	 	<div class="t-poll"> 

						</div>
                   	</div>
		       	 </div>
		       <!-- End of poll-section  -->
		       </section>
		       
		       </div>
               <!-- Right sidebar starts -->
	           <div class="links">
	           	  <aside>
			          <p>Our Partners</p>
			          <hr style="width:240px;">
			          <!-- Special Links Menu  -->
			          <ul>

			          	<p>Ministry of Interior</p>
			          	<li><a href="https://www.mvr.bg/en/home" target="_blank">https://www.mvr.bg/</a></li>

			          	 <p>Urban Mobility Center</p>
			          	<li><a href="https://www.sofiatraffic.bg/en/common" target="_blank">https://www.sofiatraffic.bg/</a></li>

			          	 <p>Union of Bulgarian Motorists</p>
			          	<li><a href="http://www.uab.org/" target="_blank">http://www.uab.org/</a></li>

			          	 <p>Used Cars for Sale Online</p>
			          	<li><a href="https://www.cars.bg/" target="_blank">https://www.cars.bg/</a></li>

			          	 <p>The world's greatest car website</p>
			          	<li><a href="https://www.topgear.com/" target="_blank">https://www.topgear.com/</a></li>

                        <p>The international BMW Website</p>
			          	<li><a href="https://www.bmw.com/en/index.html/" target="_blank">https://www.bmw.com/</a></li>

                        <p>Audi Bulgaria</p>
			          	<li><a href="https://www.audi.bg/" target="_blank">https://www.audi.bg/</a></li>

			          	 <p>LUKOIL Petrol stations</p>
			          	<li><a href="https://www.lukoil.bg/bg/" target="_blank">https://www.lukoil.bg/</a></li>

			          	 <p>Bulgarian Railways - BDZ</p>
			          	<li><a href="http://www.bdz.bg/en/" target="_blank">http://www.bdz.bg/</a></li>

			          	 <p>Formula 1</p>
			          	<li><a href="https://www.formula1.com/" target="_blank">https://www.formula1.com/</a></li>

			          	 <p>Dakar Rally</p>
			          	<li><a href="https://www.dakar.com/en" target="_blank">https://www.dakar.com/</a></li>

			          	 <p>Facebook</p>
			          	<li><a href="https://www.facebook.com/" target="_blank">https://www.facebook.com/</a></li>

			          	 <p>Twitter</p>
			          	<li><a href="https://twitter.com/twitter?lang=bg" target="_blank">https://twitter.com/</a></li>

			          	 <p>Linkdin</p>
			          	<li><a href="https://www.linkedin.com/" target="_blank">https://www.linkedin.com/</a></li>

			          	 <p>Instagram</p>
			          	<li><a href="https://www.instagram.com/" target="_blank">https://www.instagram.com/</a></li>

			          	
			          </ul>
			          <!-- end of Special LInks Menu -->
		         </aside>
		       </div>
		       <!-- Right sidebar ends -->
               
		       
		</div>
	</div>
	<?php include 'footer.php'; ?>
	 <script src="js/show-hide-content.js"></script>
	 <script src="js/js-image-slider.js"></script>
	 <script src="js/sub-menu-change.js"></script>
	 <script src="js/lightbox-plus-jquery.min.js"></script>

</body>
</html>