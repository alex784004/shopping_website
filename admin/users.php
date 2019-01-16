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
        
    <h2>Welcome users</h2> 
    <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
         <tr>
        	<th scope="col" class="rounded">User Name</th>
            <th scope="col" class="rounded">Password</th>
            <th scope="col" class="rounded">Email</th>
            <th scope="col" class="rounded">Mobile</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
        <?php
		include("connect.php");
		$a="select * from user";
		$b=mysqli_query($con,$a);
		while($c=mysqli_fetch_array($b))
		{
			echo"<tr>";
		    echo"<td>$c[username]</td>";
			echo"<td>$c[password]</td>";
			echo"<td>$c[email]</td>";
			echo"<td>$c[mobile]</td>";
	        
			echo"<td><a href=deluser.php?id=$c[user_id] class=bt_red><span class=bt_red_lft></span><strong>Delete</strong><span class=bt_red_r></span></a></td> ";
			
			echo"</tr>";
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
