<html>
<body>
<form method="post" action="insertnouvelle.php" enctype="multipart/form-data">
<table width="400" border="2" cellspacing="1" cellpadding="2" bgcolor="Green">
<tr>
<td width="100">ID Nouvelle</td>
<td><input name="id_nouvelle" type="text"></td>
</tr>
<tr>
<td width="100">Select image to upload:</td>
<td><input type='file' name="myfile"></td>
</tr>
<tr>
<td width="100">titre</td>
<td><input name="titre" type="text"></td>
</tr>
<tr>
<td width="100">details</td>
<td><textarea name="details" rows=10 cols=100></textarea></td>
</tr>
<tr>
<td width="100">Textt</td>
<td><textarea name="textt" rows=10 cols=100></textarea></td>
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
