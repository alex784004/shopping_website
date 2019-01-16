<?php
include_once("connect.php");
if(isset($_POST["submit"]))
{
$pname=$_POST["name"];
$yemail=$_POST["email"];
$mob=$_POST["telephone"];
$sub=$_POST["subject"];
$msg=$_POST["message"];
$ins="INSERT INTO `feedback` ( `name`, `mob`, `email`, `subject`, `message`) VALUES ('$pname', '$mob', '$yemail', '$sub', '$msg');";
$ib=mysqli_query($con,$ins);
if($ib)
{
	header("location:index.php");
}
}
?>		
<?php
include("indexpart/head.php");
?>	
<?php
include("indexpart/header.php");
?>
<?php
include("indexpart/topmenu.php");
?>
<?php
include("indexpart/left.php");
?>
<?php
include("indexpart/slider.php");
?>
	
<div class="mail">
			<h3>Mail Us</h3>
			<div class="agileinfo_mail_grids">
				<div class="col-md-4 agileinfo_mail_grid_left">
					<ul>
						<li><i class="fa fa-home" aria-hidden="true"></i></li>
						<li>address<span>868 1st Avenue NYC.</span></li>
					</ul>
					<ul>
						<li><i class="fa fa-envelope" aria-hidden="true"></i></li>
						<li>email<span><a href="mailto:info@example.com">info@example.com</a></span></li>
					</ul>
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i></li>
						<li>call to us<span>(+123) 233 2362 826</span></li>
					</ul>
				</div>
				<div class="col-md-8 agileinfo_mail_grid_right">
					<form action="" method="post">
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="name" value="Name*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name*';}" required>
							<input type="email" name="email" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required>
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="telephone" value="Telephone*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone*';}" required>
							<input type="text" name="subject" value="Subject*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject*';}" required>
						</div>
						<div class="clearfix"> </div>
						<textarea  name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required>Message...</textarea>
						<input type="submit" name="submit" value="Submit">
						<input type="reset" value="Clear">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //mail -->
<?php
include("indexpart/newsletter.php");
?>
<?php
include("indexpart/footer.php");
?>