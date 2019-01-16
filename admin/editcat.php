<?php
include("connect.php");
if(isset($_GET["id"]))
{
$id=$_GET["id"];
$a="select * from category where cat_id=$id";
$b=mysqli_query($con,$a);
$c=mysqli_fetch_array($b);	
}
if(isset($_POST["add"]))
{
$cate=$_POST["cat_name"];
$slt=$_POST["slt"];
$s="UPDATE `category` SET `cat_name` = '$cate', `gender` = '$slt' WHERE `category`.`cat_id` = $id";
$t=mysqli_query($con,$s);
if($t)
{
header("location:category.php");	
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
        
    <h2>Edit category</h2> 
    <div class="form1">
     	<form name="f1" action="" method="post">
  					Category Name:<br>
  					<input type="text" name="cat_name" value="<?php echo"$c[cat_name]"; ?>"><br>
                    Gender:
                    <select name="slt">
                    <option value="<?php echo "$c[gender]"; ?>"><?php echo "$c[gender]"; ?></option>
                    </select><br />
  					
                    <input type="submit" name="add" value="update" >
                    
		</form>
     </div>  
     
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
                    
    
   
    
    <?php
	include_once("footer.php");
	?>
