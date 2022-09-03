<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM event_in ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Booking Details Page</title>
</head>

<body>
<a href="index.html">Home Page</a><br/><br/>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>e_date</td>
		<td>e_time</td>
		<td>f_name</td>
		<td>n_person</td>
		<td>full_name</td>
		<td>email</td>
		<td>phone</td>
		
		
		<td>Action</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['e_date']."</td>";
		echo "<td>".$res['e_time']."</td>";
		echo "<td>".$res['f_name']."</td>";
		echo "<td>".$res['n_person']."</td>";
		echo "<td>".$res['full_name']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['phone']."</td>";
		
		
		echo "<td><a href=\"event_edit.php?id=$res[id]\">Edit</a> | <a href=\"event_delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
