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
			
<?php
include("connect.php");
$a="select * from product";
$b=mysqli_query($con,$a);
while($c=mysqli_fetch_array($b))
{
?>
<img src="<?php echo"admin/uploads/$c[image]"; ?>" alt="" height="200" width="200" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
}
?>	
<?php
include("indexpart/newsletter.php");
?>
<?php
include("indexpart/footer.php");
?>