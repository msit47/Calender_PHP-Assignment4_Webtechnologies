<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


<head>
<title> Calendar </title>

  
<style type="text/css">

div {
<?php

if(isset($_POST['color']))

{
   
$font_color = $_POST['color'];

 if ($font_color == "red")

   		print "color: Red;\n";
	 
if ($font_color == "yellow")
   		
                                print "color: #FFFF00;\n";
		 
if ($font_color == "green")

   		print "color: green;\n";
		 
}

if( isset($_POST['size']) )
{
$font_size = $_POST['size'];

if($font_size =="10pt")
print "font-size:10pt;\n";
if($font_size =="20pt")
print "font-size:20pt;\n";
if($font_size =="30pt")
print "font-size:30pt;\n";


}
if( isset($_POST['font-style']) ) 
{
   $font_style = $_POST['font-style'];
   if ($font_style == "b")
   		print "font-style: Bold;\n";
	if ($font_style == "i")
   		print "font-style: italic;\n";
	
}




if( isset($_POST['font']) )

{
   
$font = $_POST['font'];

  print "font: $font;\n";

}

?>
}
</style>


</head>

<body>



<?php
 
   print "<div>";

    print htmlspecialchars($_POST['text']);
 
   print "\n</div>\n";

?>



</body>

</html>