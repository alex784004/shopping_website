		    <!--Services End-->
            <?php 
			include("connect.php");
			$a="select * from product";
			$b=mysqli_query($con,$a);
			while($c=mysqli_fetch_array($b))
			{
			?>
			 <div class="product" title="Aman Product">
             
			    <div class="container text-center"><!--team-->
					  
					  <div class="row">
					    <div class="col-md-4">
					      <div class="thumbnail">
					        <a href="#" target="_blank" title="procut">
					          <img src="<?php echo"admin/uploads/$c[image]"; ?>" class="img" alt="Lights" style="width:50%">
					          <div class="caption text-center">
					            <p>Umesh Singh Punia</p>
					            <p>Founder And Programmer</p>
					          </div>
					        </a>
					      </div>
					    </div>
					    </div>
						</div>
                        
					</div><!--Team End-->
<?php
			}
?>