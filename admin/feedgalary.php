<?php
include_once("head.php");
?>
<?php
include("connect.php");
if(isset($_POST["addevent"]))
{
$event=$_POST["event"];
$ea="INSERT INTO `event` (`event`) VALUES ('$event');";
$eb=mysqli_query($con,$ea);	
}
?>
<?php
include("connect.php");
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
        
    <h1>Welcome to Feed galary</h1>
    <div style="background-color: #85F3FC">
    <h2>Events</h2>
    <!-- Form to add event -->
    <form name="f2" action="" method="post">
    <fieldset style="background-color: #85F3FC">
    <legend style="background-color: #0D0080; color:white" c><strong>Add New Event</strong></legend>
    <input type="text" name="event">
    <input type="submit" name="addevent" value="Add Event" style="background-color: #0C3 ">
    </fieldset>
    </form> 
    <hr />
    <!-- Closing of form to add event -->
    <!-- List of added events -->
    <text>List of events</text>
    <ul>
    <?php
	$fa="select * from event";
	$fb=mysqli_query($con,$fa);
	while($fc=mysqli_fetch_array($fb))
	{
    echo"<li>$fc[event]</li>";
	}
    ?>
    </ul>
    </div>
    <!-- Closing of list to add event --> 
    <div style="background-color: #85F3FC">
    <h2>Upload Images of Event</h2>
    <form name="f1" action="" method="post" enctype="multipart/form-data">
    <fieldset>
    <legend style="background-color: #0D0080; color:white"><strong>Add images to event</strong></legend>
    <table> 
    
    <tr><td>Event:</td>
    <td><select name="title">
    <option>Event</option>
    <?php
	$pa="select * from event";
	$pb=mysqli_query($con,$pa);
	while($pc=mysqli_fetch_array($pc))
	{
    echo"<option value='$pc[event]'>$pc[event]</option>";
	}
	?>
    </select></td></tr>
    <tr><td>Image:</td>
    <td><input type="file" name="img" ></td></tr>
    <tr><td><input type="submit" name="submit" value="Add Image" style="background-color: #0C3" /></td></tr>
   
    </table>
    </fieldset>
     </form>
     </div>
     
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
                    
    
   
    
    <?php
	include_once("footer.php");
	?>
