<?php
$c=$_FILES["e"];
$name= $c["name"];
$type= $c["type"];
$size= $c["size"];
$temp= $c["tmp_name"];
$error= $c["error"];
if($error>0)
	die("ERROR uploading file! code $error.");
else{
	move_uploaded_file($temp,"images/".$name);
	$o="images/" .$name;
}
$con= mysqli_connect("localhost","root","","mazad");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id=$_POST['a'];
$prixdemende=$_POST['b'];
$dateproposition=$_POST['c'];
$specification=$_POST['d'];
$image=$_POST['e'];
$idadherent=$_POST['f'];
$sql="insert into proposition vendeur(`id`, `prix demende`, `date proposition`, `specification`, `image`, `id-adherent`) 
values ('$id','$prixdemende','$dateproposition','$specification','$image','$idadherent')";
if (mysqli_query($con,$sql)) {
		echo "Table nouvelle created successfully";
	}
	else { echo "Error creating table: " . mysqli_error($con);
	}
mysqli_close($con);
?>