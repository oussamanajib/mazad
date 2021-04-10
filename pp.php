<html>
<body>
<?php
$con= mysqli_connect("localhost","root","","mazad");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM question");
?>
<form method="post" action="propos.php" enctype="multipart/form-data">
<table width="400" border="2" cellspacing="1" cellpadding="2" bgcolor="red">
<tr>
<td width="100">prix demende</td>
<td><input name="a" type="text"></td>
</tr>
<tr>
<td width="100">date proposition</td>
<td><input name="b" type="date"></td>
</tr>
<td width="100">specification</td>
<td><textarea name="c" rows=10 cols=40></textarea></td>
</tr>
<tr>
		<td width="50">adherent</td>
		<td><li><a href="pp.php">aa</li></a>
	</td>
		</tr>
		
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


<html><table><tr>
		<td width="50">Qusetion:</td>
		<td><select name = 'question'>
	<?php
	$con= mysqli_connect("localhost","root","","mazad");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM question");
	while($row = mysqli_fetch_array($result)) {
	echo "<option value=".$row['id-question'].">" . $row['question secret'] . "</option>";
	}
	?></td>
		</tr></table><html>