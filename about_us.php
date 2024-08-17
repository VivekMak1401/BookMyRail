<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>About Us </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	
	<!-- Link to your CSS file -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
	
</head>
<body>

	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo1.jpg"/>
			</div>		
			<div>
			
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			 if(isset($_SESSION['name']))	
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
			 ?>
				<a href="login1.php" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="signup.php?value=0" class="btn btn-info">Sign-up</a>
			<?php } ?>
			
			
			</div>
			<div id="heading" style=" font-size:45px;margin-top:20px; color: black;">
				 <a href="index.php" style="color: black; text-decoration: none;font-family: 'Montserrat', sans-serif;">Book My Rail</a>
			</div>
			</div>
		</div>
		
		<!-- Navigation bar -->
		
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >Home</a>
				<a class="brand" href="train.php" >Find Train</a>
				<a class="brand" href="reservation.php">Reservation</a>
				<a class="brand" href="profile.php">Profile</a>
				<a class="brand" href="display.php">Booking History</a>
				<a class="brand" href="about_us.php">About Us</a>
				</div>
			</div>
		</div>
		<div class="span12 well">
		
			<!-- About us -->
<div class="container">
	<div style="text-align: center;">
    <h2>Our Team</h2>
</div>

<div class="admin">
    <img src="images/admin1.jpg" alt="Admin 1">
   
   <h3>Smit Parekh</h3>
    <h4>20BSIT025</h4>
    <p>Frontend Devloper</p>
    <div class="social-icons">
        <a href="https://www.instagram.com/smit_8_4/"><img src="images/instagram.png" alt="Instagram"></a>
        <a href="https://www.linkedin.com/in/smit-parerkh-497b87231"><img src="images/linkedin.png" alt="LinkedIn"></a>
    </div>
</div>

<div class="admin">
    <img src="images/admin2.jpg" alt="Admin 2">
    <h3>Dhairya Mehta</h3>
    <h4>20BSIT087</h4>
    <p>Database Developer</p>
    <div class="social-icons">
        <a href="https://www.instagram.com/dhairyaaa_03_/"><img src="images/instagram.png" alt="Instagram"></a>
        <a href="https://www.linkedin.com/in/dhairya-mehta-b48140260"><img src="images/linkedin.png" alt="LinkedIn"></a>
    </div>
</div>

<div class="admin">
    <img src="images/admin3.jpg" alt="Admin 3">
    <h3>Vivek Makawana</h3>
    <h4>20BSIT057</h4>
    <p>Back-end Developer</p>
    <div class="social-icons">
        <a href="https://www.instagram.com/__vivek_1401_/"><img src="images/instagram.png" alt="Instagram"></a>
        <a href="https://www.linkedin.com/in/vivek-makwana-6b86b1220"><img src="images/linkedin.png" alt="LinkedIn"></a>
    </div>
</div>

</div>






			<!-- News and Alert-->
			
		<!-- Copyright -->
<footer >
		<div style="width:100%;">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; 2023 Copyright PVT Ltd.</p>	
			</div>
			<div style="float:right;">
			<p class="text-right text-info">	Desinged By : Smit, Dhairya & Vivek</p>
			</div>
		</div>
		</footer>	</div>
	
</body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>