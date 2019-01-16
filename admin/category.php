<?php
include_once("head.php");
?>
<body>

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
        
    <h2>Category Manager</h2> 
    <?php 
	include("connect.php");
	$ga="select * from gender";
	$gb=mysqli_query($con,$ga);
	while($gc=mysqli_fetch_array($gb))
	{ ?>
   
    
    <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <h3>Gender:<?php echo ucfirst($gc["gender"]);?></h3>
     <?php echo"<a href=addcategory.php?g=$gc[gender] class=bt_green><span class=bt_green_lft></span><strong>Add category</strong><span class=bt_green_r></span></a>"; ?>
    <tr>
        	
            <th scope="col" class="rounded">Category</th>
            <th scope="col" class="rounded">Gender</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
    </tr>
    <?php
	
	$ct="select * from category where gender='$gc[gender]'";
	$q=mysqli_query($con,$ct);
	while($w=mysqli_fetch_array($q))
	{
	echo"<tr>";
	echo"<td>$w[cat_name]</td>";
	echo"<td>$w[gender]</td>";
	echo"<td><a href=editcat.php?id=$w[cat_id] class=bt_green><span class=bt_green_lft></span><strong>Update</strong><span class=bt_green_r></span></a></td>";
	echo"<td><a href=delcat.php?id=$w[cat_id] class=bt_red><span class=bt_red_lft></span><strong>Delete</strong><span class=bt_red_r></span></a> </td>";
	echo"<tr>";
	}
	?>
    
    
    
    </table>   
    <?php } ?>
           
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
                    
    
   
    
    <?php
	include_once("footer.php");
	?>
