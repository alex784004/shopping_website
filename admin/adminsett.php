<?php
include_once("head.php");
include_once("connect.php");
$z=$_SESSION["userid"];
$az="select * from login where id='$z'";
$bz=mysqli_query($con,$az);
$cz=mysqli_fetch_array($bz);
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
        
    <h2>Admin setting</h2> 
    <table id="rounded-corner">
    <form name="f1" action="" Method="post">
    <tr><td><label>Username</label></td>
    <td><input type="text" name="user" value="<?php echo ucfirst($cz["username"]); ?>"></td></tr>
    <tr><td><label>Password</label></td>
    <td><input type="text" name="pass" value="<?php echo ucfirst($cz["password"]); ?>"></td></tr>
    <tr><td><label>Email Id</label></td>
    <td><input type="text" name="email" value="<?php echo ucfirst($cz["email"]); ?>"></td></tr>
    <tr><td><label>Sitename</label></td>
    <td><input type="text" name="site" value="<?php echo ucfirst($cz["sitename"]); ?>"></td></tr>
    <tr><td><label>Image</label></td>
    <?php echo"<td><image src=userimg/$cz[image] height=50 width=50></td>";?></tr>
    </table>
     
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
                    
    
   
    
    <?php
	include_once("footer.php");
	?>
