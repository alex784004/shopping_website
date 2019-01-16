<?php
include("connect.php");
if(isset($_GET["g"]))
{
$g=$_GET["g"];	
}
if(isset($_POST["add"]))
{
$cat=$_POST["cat_name"];
$slt=$_POST["slt"];

$a="INSERT INTO `category` ( `cat_name`, `gender`) VALUES ( '$cat', '$slt');";
$b=mysqli_query($con,$a);
if($b)
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
        
    <h2>Add new category</h2> 
     
     <div class="form1">
     	<form name="f1" action="" method="post">
  					Category Name:<br>
  					<input type="text" name="cat_name"><br>
                    Gender:
                    <select name="slt">
                    <option value="<?php echo $g; ?>"><?php echo $g; ?></option>
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
