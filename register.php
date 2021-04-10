<html>
<html><head>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head><body>
<div id="wrapper">

<div id="header">

<h2>مستخدم جديد</h2>

</div> 

<div id="nav">

<a href="index.html">الرئيسية</a>
<a href="chrout.html" id="usage_policy">شروط الاستخدام</a>
<a href="#">من نحن</a>
<a href="contactuse.html">اتـصـل بـنا</a>
</div> 


<div id="content">

<html>
<?php
$con= mysqli_connect("localhost","root","","mazad");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM question");
?>
<center>
<form method="post" action="signupp.php">
<img class="images" src="images/register.jpg" alt="blank" title="blank" width="30" height="30" />
<h4>Sign Up</h4>
<table width="600" height="700" border="10" cellspacing="1" cellpadding="2" bgcolor="red">
<tr><td width="50">Username:</td>
	<td><input type="text" name="myusername"/></td>
</tr>
<tr>
	<td width="50">create Password:</td>
	<td><input type="password" name="mypassword"/></td>
	</tr>
	<tr>
		<td width="50">confir Password:</td>
		<td><input type="password" name="cpassword"/></td>
	</tr>
	<tr>
		<td width="50">E-mail:</td>
		<td><input type="email" name="email" id="Email" class="form-control input-lg"  tabindex="2"></td>
		</tr>
		<tr>
		<td width="50">PHONE:</td>
		<td><input type="text" name="phone"/></td>
		</tr>
		<tr>
		<td width="50">Qusetion:</td>
		<td><select name = 'question'>
	<?php
	while($row = mysqli_fetch_array($result)) {
	echo "<option value=".$row['id-question'].">" . $row['question secret'] . "</option>";
	}
	?></td>
		</tr>
		<tr>
		<td width="50">REPONSE:</td>
		<td><input type="text" name="reponse"/></td>
		</tr>
		<tr>
		<td></td>
		<td align="center"><input type="submit" value="sign up" name="submit"/></td>
		<td></td></tr>
</table>
</form><img class="images" src="images/n.jpg" alt="blank" title="blank" width="300" height="300" /><br> <br></center></html>
</div> 
<div id="sidebar">

</div> 

<div id="footer">
<p> <a href="#">تصميم وبرمجة Oussama Najib-design &copy;</a></p>

</div> 
</div>
</body>
</html>


