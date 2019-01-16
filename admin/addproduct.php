<?php 
include("connect.php");
if(isset($_POST["add"]))
{
$prod_name=$_POST["prod_name"];	
$price=$_POST["price"];
$aprice=$_POST["aprice"];	
$descr=$_POST["descr"];	
$pro_image=$_FILES["pro_image"]["name"];
$path='./uploads/'.$pro_image;
move_uploaded_file($_FILES["pro_image"]["tmp_name"],$path);
$cat_name=$_POST["cat"];
$gender=$_POST["gen"];
$a="INSERT into `product` (`prod_name`, `price`, `actualprice`, `descr`, `image`, `cat_name`, `gender` ) VALUES ('$prod_name', '$price', '$aprice', '$descr', '$pro_image', '$cat_name', '$gender')";
$b=mysqli_query($con,$a);
if($b)
{
header("location:product.php");	
}
}


?>

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
        
    <h2>Add Product</h2> 
     <div class="form1">
     	<form name="f1" action="" method="post" enctype="multipart/form-data" >
  					Product Name:
  					<input type="text" name="prod_name"><br>
  					Price:
  					<input type="text" name="price"><br>
                    Actual Price:
  					<input type="text" name="aprice" ><br>
                    Description:
  					<textarea rows="2" cols="20" name="descr">
                    </textarea><br />
  					Image:
  					<input type="file" name="pro_image"><br>
                    Category:
  	                <select name="cat">
                    <option value="">Category</option>
                    <?php
					$ax="select * from category";
					$bx=mysqli_query($con,$ax);
					while ($cx=mysqli_fetch_array($bx)) { 
				
                    echo "<option value=$cx[cat_name]>$cx[cat_name]</option>";
					}
                    ?>    
                    </select><br />
                    Gender:
  					
                    <select name="gen" >
                    <option value="">Gender</option>
                    <option value="men">Men</option>
                    <option value="women">Women</option>
                    <option value="kids">Kids</option>
                    
                    
                    </select><br />
                    <input type="submit" name="add" value="add" >
                    
		</form>
     </div>
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
                    
    
   
    
    <?php
	include_once("footer.php");
	?>
