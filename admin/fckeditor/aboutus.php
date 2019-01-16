<?php 

require("connect.php");
if(isset($_POST['submit']))
{   $title=mysql_real_escape_string($_REQUEST['title']);
	$description=mysql_real_escape_string($_REQUEST['description']);
	$keyword=mysql_real_escape_string($_REQUEST['keyword']);
	$heading=mysql_real_escape_string($_REQUEST['heading']);
	$content=mysql_real_escape_string($_REQUEST['content']);
	$status=$_REQUEST['status'];
	 $sql="update  tb_cms set 
	         title='".$title."',
			description='".$description."',
			  keyword='".$keyword."',
			 heading='".$heading."',
			 content='".$content."',
			 status='".$status."' where id='1'";
        mysql_query($sql) or die(mysql_error().$sql);
			if (mysql_affected_rows()) $msg = "Data is updated";

}		
	 
		 	  $sql = "SELECT * FROM tb_cms  where id='1'";
			$thisitem = mysql_fetch_assoc(mysql_query($sql));
			
			if (!$thisitem)
			{
				echo "ERROR! Date is not found";
				exit;
			}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IN ADMIN PANEL | Powered by Manpreet singh Pannu , Harpreet Singh , Narinderpal singh </title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="clockp.js"></script>
<script type="text/javascript" src="clockh.js"></script> 
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />

</head>
<body>
<div id="main_container">

	<div class="header">
     <?php
include ("header.php");
?>
    </div>
    
    <div class="main_content">
    <?php
include ("topmenu.php");
?>                 
  </div> 
    <div class="center_content">  
  </div> 
    
    <div class="left_content">
    
    <?php
include ("leftmenu.php");
?>
    </div>  
    
    <div class="right_content">            
        
    <h2><span class="white_bold_big">About Us</span></h2> 
                    
   <tr><td height="347" align="center" valign="top" bgcolor="#EEEEEE"><form action="" method="post"  enctype="multipart/form-data" name="frm" onSubmit="return validate()" >

<input type="hidden" name="submitForm" value="yes">

<table width="99%" border="0" cellspacing="1" cellpadding="4" align=center >

<TR bgcolor="#638EC0" align="left"> 

<TD height="25" colspan="2" class="header_bg"><?php echo $thisitem['page_name'];?></TD>
</TR>

<?php if($_SESSION['sess_msg']!=''){?>

<tr>

<td colspan="2" align="center"  class="sess_msg_red"  >&nbsp;</td>
</tr>

<?php }?>
 

<TR class='oddRow'>
  <TD width='22%' align='right' class='fields_txt'><div align="left">Title</div></TD>
  <TD width='78%'>
  <input type='text' size=50 name="title" class="textfield" value="<?php echo $thisitem['title'];?>"></TD></TR>
 <TR class='evenRow'> 
  <TD width='22%' align='right' class='fields_txt'><div align="left">Keyword</div></TD>
  <TD width='78%'>
   <textarea name="keyword" cols="500" style="width:300px;" rows="5" class="textfield"><?php echo $thisitem['keyword']; ?>
</textarea></TD></TR>

 <TR class='oddRow'>
  <TD width='22%' align='right' class='fields_txt'><div align="left">Description </div></TD>
  <TD width='78%'>
    <textarea name="description" cols="500" style="width:300px;"  rows="5" class="textfield"> <?php echo $thisitem['description']; ?>
</textarea>        </TD>
  </TR>
<TR class='evenRow'>
  <TD width='22%' align='right' class='fields_txt'><div align="left">Heading</div></TD>
  <TD width='78%'>

 

<input type='text' size=50 name="heading" class="textfield" value="<?php echo $thisitem['heading'];?>"></TD></TR>

<TR class='oddRow'>
 
  <TD colspan="2">
Content<br />
<br />

 

<?php
include("fckeditor/fckeditor.php") ;
$sBasePath = './fckeditor/' ;
$oFCKeditor = new FCKeditor('content') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Width= 600 ;
$oFCKeditor->Value=$thisitem['content'];
$oFCKeditor->Create() ;
?></TD></TR>
<TR class='evenRow'>
                  <TD width='22%' align='right' class='fields_txt'><div align="left">Status</div></TD>
                  <TD width='78%' align="left"><input type="radio" name="status" value="1" <?php if($status=='1'){ echo "checked";} ?> checked="checked" >
                    &nbsp;Active&nbsp;&nbsp;
                    <input type="radio" name="status" value="0" <?php if($status=='0'){ echo "checked";} ?> />
                    &nbsp;In-Active              </TD>
            </TR>
<tr  class="oddRow">

<td align="center">&nbsp;</td><td>




<button type="submit" value="Save" name="submit">Save</button>
<input type="hidden" name="id" id="id"class="textfield" value="2">
<a href="about_us.php" >Cancel</a>
 

</td></tr>
</table>

</form>

 <br>

        </td>                 
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
</div> <!--end of main content-->
    <div class="footer">
    
    	  <?php

include("footer.php");
?>
    </div>

</div>		
</body>
</html>