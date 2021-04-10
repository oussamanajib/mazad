<html>
<body>
<form method="post" action="" enctype="multipart/form-data">
<table width="400" border="2" cellspacing="1" cellpadding="2" bgcolor="red">
<tr>
<td width="100">date debut</td>
<td><input name="a" type="date"></td>
</tr>
<tr>
<td width="100">date fin</td>
<td><input name="b" type="date"></td>
</tr> 
<tr>
		<td width="50">coordinateur</td>
		<td><select name = 'users'>
		<?php
	$con= mysqli_connect("localhost","root","","mazad");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM users");
	while($row = mysqli_fetch_array($result)) {
	echo "<option value=".$row['id'].">" . $row['username'] . "</option>";
	}
	?></td></tr>
	<tr>
		<td width="50">evaluation</td>
		<td><select name = 'users'>
		<?php
	$con= mysqli_connect("localhost","root","","mazad");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM evaluation");
	while($row = mysqli_fetch_array($result)) {
	echo "<option value=".$row['id-evaluation'].">" . $row['id-evaluation'] . "</option>";
	}
	?></td></tr>
	<tr>
		<td width="50">proposition</td>
		<td><select name = 'proposition'>
		<?php
	$con= mysqli_connect("localhost","root","","mazad");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM proposition");
	while($row = mysqli_fetch_array($result)) {
	echo "<option value=".$row['id'].">" . $row['id'] . "</option>";
	}
	?></td></tr>
		
<tr>
<td width="100"> </td>
<td>
<input name="add" type="submit" value="Add nouvelle">
</td>
</tr>

</table>

</form>

</body>
</html>
