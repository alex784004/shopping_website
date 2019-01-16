
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
        
    <h2>Products</h2> 
    
    <a href="addproduct.php" class="bt_green"><span class="bt_green_lft"></span><strong>Add new product</strong><span class="bt_green_r"></span></a>
    <table id="rounded-corner">
    <tr>
        	
            <th scope="col" class="rounded">Product name</th>
            <th scope="col" class="rounded">Price</th>
            <th scope="col" class="rounded">Actual Price</th>
            <th scope="col" class="rounded">Description</th>
            <th scope="col" class="rounded">Image</th>
            <th scope="col" class="rounded">Category</th>
            <th scope="col" class="rounded">Gender</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
<?php
include("connect.php");
$pro="select * from product";
$g=mysqli_query($con,$pro);
while($f=mysqli_fetch_array($g))
{
	echo"<tr>";
	echo"<td>$f[prod_name]</td>";
	echo"<td>$f[price]</td>";
	echo"<td>$f[actualprice]</td>";
	echo"<td>$f[descr]</td>";
	echo"<td><image src=uploads/$f[image] height=50 width=50></td>";
	echo"<td>$f[cat_name]</td>";
	echo"<td>$f[gender]</td>";
	echo"<td> <a href=editproduct.php?id=$f[prod_id] class=bt_green><strong>Update</strong></a></td>";
	echo"<td> <a href=delproduct.php?id=$f[prod_id] class=bt_red><strong>Delete</strong></a> </td>";
	
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
