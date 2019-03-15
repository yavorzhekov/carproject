<?php 
	include 'db.php';
	include 'functions.php';
	$email = saveFields($_POST['email']);
	$pass = saveFields($_POST['pass']);
	
	$sql = 'SELECT * FROM users WHERE user_email="'.$email.'" 
	AND user_password="'.md5($pass).'"';
	$res = mysqli_query($linkDB, $sql);
	if(mysqli_num_rows($res) == 1) {
		if($row=mysqli_fetch_assoc($res)) {
			session_start();
			$_SESSION['fname'] = $row['user_fname'];
			header("Location: index.php");
		}
	}
	else {
		echo "Location: log-reg.php?msg=Wrong account!!!"; 
	}  
	
	
 ?>