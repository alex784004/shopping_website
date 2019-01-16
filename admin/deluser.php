<?php
include("connect.php");
if(isset($_GET["id"]))
{
$id=$_GET["id"];
$a="DELETE FROM `user` WHERE `user`.`user_id` = $id";
$b=mysqli_query($con,$a);
if($b)
{
	header("location:users.php");
}
}




?>
