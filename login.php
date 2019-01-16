<?php
session_start();
include("connect.php");
if(isset($_SESSION["user_id"]))
{
header("location:index.php");	
}
if(isset($_POST["login"]))
{
	$user=$_POST["Username"];
	$pass=$_POST["Password"];
	$a="select * from user where username='$user' && password='$pass'";
	$b=mysqli_query($con,$a);
	$c=mysqli_fetch_array($b);
	//storing values in session
	$_SESSION["id"]=$c["user_id"];
	$_SESSION["user"]=$c["username"];
	if($c)
	{
     header("location:index.php");		
	}
}
if(isset($_POST["register"]))
{
	$user=$_POST["Username"];
	$pass=$_POST["Password"];
	$email=$_POST["Email"];
	$mob=$_POST["Phone"];
	$ra="INSERT INTO `user` (`username`, `password`, `email`, `mobile`) VALUES ('$user', '$pass', '$email', '$mob')";
	$rb=mysqli_query($con,$ra);
	if($rb)
	{
		echo "<script type='text/javascript'>alert('submitted successfully!Please login with your username and password!')</script>";	
	}
	else
	{
		echo "<script type='text/javascript'>alert('failed!')</script>";	
	}
	
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>

	
<?php
include("indexpart/header.php");
?>
<?php
include("indexpart/topmenu.php");
?>
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
	
	</div>
<!-- //products-breadcrumb -->
<?php
include("indexpart/left.php");
?>
		<div class="w3l_banner_nav_right">
<!-- login -->
		<div class="w3_login">
			<h3>Sign In & Sign Up</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				  </div>
				  <div class="form">
					<h2>Login to your account</h2>
					<form action="#" method="post">
					  <input type="text" name="Username" placeholder="Username" required>
					  <input type="password" name="Password" placeholder="Password" required>
					  <input type="submit" name="login" value="Login">
					</form>
				  </div>
				  <div class="form">
					<h2>Create an account</h2>
					<form action="#" method="post">
					  <input type="text" name="Username" placeholder="Username" required>
					  <input type="password" name="Password" placeholder="Password" required>
					  <input type="email" name="Email" placeholder="Email Address" required>
					  <input type="text" name="Phone" placeholder="Phone Number" required>
					  <input type="submit" name="register" value="Register">
					</form>
				  </div>
				  <div class="cta"><a href="#">Forgot your password?</a></div>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<?php
include("indexpart/newsletter.php");
?>
<?php
include("indexpart/footer.php");
?>