<?php
$name =$_FILES["file"]["name"];
$name =$_FILES["file"]["type"];
$name =$_FILES["file"]["size"];
$name =$_FILES["file"]["tmp_name"];
$error =$_FILES["file"]["error"];
if($error>0)
die("error file");
else{
	move_uploaded_file($temp,"images".$name);
	echo"uploaded";
	}

?>
