<?php
include("connect.php");
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$a="SELECT * FROM product where prod_id=$id";
	$b=mysqli_query($con,$a);
	$f=mysqli_fetch_array($b);
}
if(isset($_POST["add"]))
{
$prod_name=$_POST["prod_name"];	
$price=$_POST["price"];	
$acprice=$_POST["acprice"];	
$cat_name=$_POST["cat"];	
$gender=$_POST["gen"];	
$descr=$_POST["descr"];	
$pro_image=$_FILES["pro_image"]["name"];
$path='./uploads/'.$pro_image;
move_uploaded_file($_FILES["pro_image"]["tmp_name"],$path);
$upd="UPDATE `product` SET `prod_name` = '$prod_name', `price` = '$price', `actualprice` = '$acprice', `descr` = '$descr', `image` = '$pro_image', `cat_name` = '$cat_name', `gender` = '$gender' WHERE `product`.`prod_id` = $id";
$ex=mysqli_query($con,$upd);
if($ex)
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
        
    <h2>Edit Product</h2> 
     <div class="form1">
     	<form name="f1" action="" method="post" enctype="multipart/form-data" >
  					Product Name:
  					<input type="text" name="prod_name" value="<?php echo @$f[prod_name];?>"><br>
  					Price:
  					<input type="text" name="price" value="<?php echo @$f[price];?>"><br>
                    Actual Price:
  					<input type="text" name="acprice" value="<?php echo @$f[actualprice];?>"><br>
                    Description:
  					<textarea rows="2" cols="20" name="descr"><?php echo @$f[descr];?></textarea><br />
  					Image:
  					<input type="file" name="pro_image"><br />
                    <?php echo "<image src=uploads/$f[image] height=100 width=100>"; ?><br />
                    Category:
  	                <select name="cat">
                    <option value="<?php echo @$f[cat_name]?>">Category</option>
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
                    <option value="<?php echo @$f[gender]?>">Gender</option>
                    <option value="men">Men</option>
                    <option value="women">Women</option>
                    <option value="kids">Kids</option>
                    
                    
                    </select><br />
                  
                    <input type="submit" name="add" value="update"><br />
</form>
                    
                    
		
     </div>
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
                    
    
   
    
    <?php
	include_once("footer.php");
	?>
