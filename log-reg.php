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
</head>
<body>
	<div id="wrapper" style="background:#dbdbdb;">
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
								echo '<a href="log-reg.php" title="login or register" style="background: #343434;">LOGIN/REGISTER</a>';
							}
						 ?>
					</li>
					<li><a href="contacts.php" title="contacts">CONTACTS</a></li>
				</ul>
			</nav>
		</header>
		<div id="main">
			<div class="log-reg-wrapper">
				<div class="title">
					<h1>Login or Register</h1>
					<p><?php if(isset($_GET['msg'])) {
						echo $_GET['msg'];
					} ?></p>
				</div>
				<div class="log-reg-section">
					<div class="reg-form">
						<form action="register.php" name="register" class="register-form" method="POST">	
							<span>
								
						  		<input type="text" name="fname" placeholder="Please enter your first name" required="required" />
						  		<img src="img/user.png">
						  	</span>

						  	<span>
						  		
						  		<input type="text" name="lname" placeholder="Please enter your last name" required="required" />
						  		<img src="img/user.png">
						  	</span>

						  	<span>
						  		
						  		<input type="email" name="email" placeholder="Please enter your email" required="required"/>
						  		<img src="img/email.png">
						  	</span>

						  	<span>
						  		
						  		<input type="password" name="pass" placeholder="Please enter your password" required="required"/>
						  		<img src="img/pass.png">
						  	</span>

						  	<span>
						  		
						  		<input type="text" name="address" placeholder="Please enter your address" />
						  		<img src="img/user.png">
						  	</span>

						  	<span>
						  		
						  		<input type="text" name="phone" placeholder="Please enter your phone" />
						  		<img src="img/phone.png">
						  	</span>
						  	
						  	<span>
						  	    <input type="submit" class="reg" value="Register" />
						    </span>
						  	    
						   
						</form>
					</div>			
						
					<div class="log-form">
						<form action="login.php" name="log-in" class="log-in" method="POST">
						  <span>
							
						  	<input type="email" name="email" placeholder="Please enter your email" required="true" />
						  	<img src="img/email.png">
						  </span>

						  <span>
						  	
						  	<input type="password" name="pass" placeholder="Please enter your password"  required="true"/>
						  	<img src="img/pass.png">
						  </span>
						  <span>
						  	<input type="submit" value = "Login" class="log"/>
						  </span>
						  
						</form>
						
					</div>
				</div>

			</div>
		</div>
		<?php include 'footer.php'; ?>

	</div>
 <script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>