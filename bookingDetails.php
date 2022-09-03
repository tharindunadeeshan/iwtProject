<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM booking_form ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="index.html">Home Page</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>F Name</td>
		<td>L Name</td>
		<td>Email</td>
		<td>Phone</td>
		<td>R Type</td>
		<td>A Date</td>
		<td>D Date</td>
		<td>N gest</td>
		<td>s_request</td>
		<td>Action</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['firstname']."</td>";
		echo "<td>".$res['lastname']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['phone']."</td>";
		echo "<td>".$res['r_type']."</td>";
		echo "<td>".$res['a_date']."</td>";
		echo "<td>".$res['d_date']."</td>";
		echo "<td>".$res['n_gest']."</td>";
		echo "<td>".$res['s_request']."</td>";	
		echo "<td><a href=\"booking_edit.php?id=$res[id]\">Edit</a> | <a href=\"booking_delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
