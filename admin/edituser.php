<?php
include("connect.php");
if(isset($_GET["id"]))
{
$id=$_GET["id"];
$a="select * from login where id=$id";
$b=mysqli_query($con,$a);
$c=mysqli_fetch_array($b);	
}
if(isset($_POST["add"]))
{
$user=$_POST["user"];
$pass=$_POST["pass"];
$u="UPDATE `login` SET `username` = '$user', `password` = '$pass' WHERE `login`.`id` = $id";
$p=mysqli_query($con,$u);
if($p)
{
header("location:users.php");	
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
        
    <h2>Update user</h2> 
    <div class="form1">
     	<form name="f1" action="" method="post" enctype="multipart/form-data" >
  					Username:
  					<input type="text" name="user" value="<?php echo @$c[username]?>"><br>
  					Password:
  					<input type="text" name="pass" value="<?php echo @$c[password]?>"><br>
                    
                    <input type="submit" name="add" value="update">
                    
		</form>
     </div>
     
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
                    
    
   
    
    <?php
	include_once("footer.php");
	?>
