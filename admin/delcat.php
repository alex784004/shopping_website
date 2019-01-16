<?php
include("connect.php");
if(isset($_GET["id"]))
{
$id=$_GET["id"];
$a="delete from category where cat_id='$id'";
$b=mysqli_query($con,$a);
if($b)
{
header("location:category.php");	
}
}


?>