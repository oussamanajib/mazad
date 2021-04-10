<?php
$con= mysqli_connect("localhost","root","","mazad");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["images"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

$sql="INSERT INTO images(`id`,`image`) 
VALUES (id,'$_POST[image]')";

if($sql)

{
Echo "Record successfully inserted";
}
{
Echo "There is some problem in inserting record";
}
	
	
	
}
?>