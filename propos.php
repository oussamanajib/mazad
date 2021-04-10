<?php
$c = mysqli_connect("localhost","root","","mazad");
if(mysqli_connect_errno()){
echo"failed to connect".mysqli_connect_error();}
 mysqli_query($c,"INSERT INTO `proposition vendeur`(`id`,`prix demende`,`date proposition`,`specification`,`adherent`)
VALUES (id,'$_POST[a]','$_POST[b]','$_POST[c]','$_POST[users]')");

/* if(! mysqli_query($c,$sql)){
die('error'.mysqli_error($c));} */
echo "insert complete";
mysqli_close($c);
?>