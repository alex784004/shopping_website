<?php
include_once("connect.php");
$a="select * from cms where id=1";
$b=mysqli_query($con,$a);
$c=mysqli_fetch_array($b);
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
<div class="privacy about">
			<h3><?php echo ucfirst($c["title"]);?></h3>
			<p class="animi"><?php echo"$c[description]";?></p>
			<div class="agile_about_grids">
				<div class="col-md-6 agile_about_grid_right">
					<img src="brand-new-interior-cloth-store-luxury-fashionable-40575359.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 agile_about_grid_left">
					<ol>
						<li>laborum et dolorum fuga</li>
						<li>corrupti quos dolores et quas</li>
						<li>est et expedita distinctio</li>
						<li>deleniti atque corrupti quos</li>
						<li>excepturi sint occaecati cupiditate</li>
						<li>accusamus et iusto odio</li>
					</ol>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>			
	
<?php
include("indexpart/newsletter.php");
?>
<?php
include("indexpart/footer.php");
?>