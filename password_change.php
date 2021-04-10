 <?php
session_start();
$con= mysqli_connect("localhost","root","","mazad");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$usernamme = $_POST['username'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $result = mysqli_query($con,"SELECT password FROM users WHERE username='".$usernamme."'");
		$row = mysqli_fetch_array($result);
		//echo $row[0];
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($password!= $row[0])
        {
        echo "You entered an incorrect password";
        }
		else {
        if($newpassword==$confirmnewpassword){
			$sql=mysqli_query($con,"UPDATE users SET password='$newpassword' where username='$usernamme'");
			if($sql)      {
				echo "Congratulations You have successfully changed your password";
			}
		}
       else
        {
       echo "Passwords do not match";
		}}
		
      ?>

