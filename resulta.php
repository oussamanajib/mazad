<?php
$con=mysqli_connect("localhost","root","","test");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " .
mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM users");
echo "<table border='1'>
<tr>
<th>id</th>
<th>name</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
