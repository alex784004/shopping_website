<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						 <?php
						include_once("connect.php");
						$ga="select * from gender";
						$gb=mysqli_query($con,$ga);
						while($gc=mysqli_fetch_array($gb)) { ?>
						<li class="dropdown">
                       
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $gc["gender"]; ?><span class="caret"></span></a>     			
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
                                    <?php 
									$ca="select * from category where gender='$gc[gender]'";
									$cb=mysqli_query($con,$ca);
									while($cc=mysqli_fetch_array($cb))
									{
										echo"<li><a href=category.php?cn=$cc[cat_name]>$cc[cat_name]</a></li>";
									}
									?>
										
									</ul>
                                    
								</div> 
                                      
							</div>				
						</li>
						<?php } ?>     
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
