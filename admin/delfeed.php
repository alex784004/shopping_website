<?php
include("connect.php");
if(isset($_GET["id"]))
{
$id=$_GET["id"];
$a="delete from feedback where id=$id";
$b=mysqli_query($con,$a);	
if($b)
{
header("location:feedback.php");	
}
}

?>
