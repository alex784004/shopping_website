    <?php
    include_once("head.php");
    ?>
	<?php
	include_once("header.php");
	?>
    
	<?php 
	include_once("menu.php");
	?>
    
	<?php
    include_once("left.php")
	?>
    <div class="right_content">            
        
    <h2>Feedback</h2> 
    <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
        <tr>
            <th scope="col" class="rounded">Name</th>
            <th scope="col" class="rounded">Email ID</th>
            <th scope="col" class="rounded">Subject</th>
            <th scope="col" class="rounded">Message</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
        <?php
		include("connect.php");
		$a="select * from feedback";
		$g=mysqli_query($con,$a);
		while($f=mysqli_fetch_array($g))
		{
		echo"<tr>";
		echo"<td>$f[name]</td>";
		echo"<td>$f[email]</td>";
		echo"<td>$f[subject]</td>";
		echo"<td>$f[message]</td>";
        echo"<td> <a href=delfeed.php?id=$f[id] class=bt_red><span class=bt_red_lft></span><strong>Delete items</strong><span class=bt_red_r></span></a> </td>";
		echo"<tr>";	
		}
		
		?>
     </table>
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
                    
    
   
    
    <?php
	include_once("footer.php");
	?>
