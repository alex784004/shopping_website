<?php
include("connect.php");
$a="select * from cms where id=1";
$b=mysqli_query($con,$a);
$c=mysqli_fetch_array($b);
if(isset($_POST["update"]))
{
$title=	$_POST["title"];
$descr=	$_POST["descr"];
$upd="update cms set title='$title',description='$descr' where id=1";
$po=mysqli_query($con,$upd);
if($po)
{
header("location:aboutus.php");	
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
        
    <h2>About US</h2> 
    <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
  
  <form name="f1" action="" method="post">

Title:<input type="text" name="title" value="<?php echo"$c[title]";?>"><br>
Description:
<?php
include("fckeditor/fckeditor.php") ;
$sBasePath = './fckeditor/' ;
$oFCKeditor = new FCKeditor('descr') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Width= 600 ;
$oFCKeditor->Value=$c['description'];
$oFCKeditor->Create() ;
?>
<input type="submit" name="update" value="update">
</form>
  
  
</table>
     
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
                    
    
   
    
    <?php
	include_once("footer.php");
	?>
