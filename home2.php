<?php
$con=mysqli_connect("localhost","root","","flowteach");


$result = mysqli_query($con,"SELECT * FROM second");
 	
 	echo "<table border='1'>
<tr>
<th>id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>address1</th>
<th>image</th>
</tr>";
 	
 	while($row = mysqli_fetch_array($result))
 	{
 		echo "<tr>";
 		echo "<td>" . $row['id'] . "</td>";
 		echo "<td>" . $row['news1'] . "</td>";
 		echo "<td>" . $row['news2'] . "</td>";
 		echo "<td>" . $row['news3'] . "</td>";
 		echo "<td>" . $row['image'] . "</td>";
 		echo "</tr>";
 	}
 	echo "</table>";
?>