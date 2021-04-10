<?php
$con= mysqli_connect("localhost","root","","mazad");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$myusername=$_POST['myusername'];
$x="vrai";
$result = mysqli_query($con,"SELECT * FROM users");
while($row = mysqli_fetch_array($result)) {
				if(($myusername==$row['username'])){
					$x="faux";
								
		}
			}

$mypassword=$_POST['mypassword'];
$cpassword=$_POST['cpassword'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$question=$_POST['question'];
$reponse=$_POST['reponse'];

if((($mypassword!=$cpassword)||(strlen ($mypassword)<=4 ))){
	$p=1;

}
if(($email=="") || (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))){
		$e=1;

}
if (($myusername=="")||(!preg_match("/^[a-zA-Z ]+[1-9]*$/",$myusername))){
	$n=1;

}
if(($reponse=="")){
	$r=1;
}

else {
$p=0;
$n=0;
$e=0;
$r=0;


	if(($p==0)&&($n==0)&&($e==0)&&($x=="vrai")&&($r==0)){
		
$sql="insert into users(`id`, `username`, `password`,`email`, `phone`, `question`, `reponse`) values
		('id','$myusername','$mypassword','$email','$phone','$question','$reponse')";

	if (mysqli_query($con,$sql)) {
	header("location:http://localhost/in/login.php");
		//echo "create succues";
	}
}else{
echo "create error";
}
}//else
?>
