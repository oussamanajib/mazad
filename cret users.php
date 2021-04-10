<?php
$con=mysqli_connect("localhost","root","","mazad");
if (mysqli_connect_errno()){ echo "failed to connect";
}
$sql="CREATE TABLE `users` (
`id` INT( 50 ) NOT NULL AUTO_INCREMENT PRIMARY
KEY ,
`username` VARCHAR( 15 ) NOT NULL ,
`password` VARCHAR( 15 ) NOT NULL ,
`conf password` VARCHAR( 15 ) NOT NULL ,
`email` VARCHAR( 50 ) NOT NULL ,
`phone` INT(10) NOT NULL ,
`reponse` VARCHAR( 50 ) NOT NULL ,
`id question` INT(3) NOT NULL 
)";

if(mysqli_query($con,$sql)){
echo "table users created successfully";}
else { echo "error creaTING TABLE".MYSQLI_ERROR($con);}

?>												 