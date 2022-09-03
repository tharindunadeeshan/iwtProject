<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM food_order ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Booking Details Page</title>
</head>

<body>
<a href="index.html">Home Page</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>f Category</td>
		<td> foods</td>
		<td>F Quantity</td>
		<td>S request</td>
		<td>Name</td>
		<td>Email</td>
		<td>Phone Number</td>
		<td>T Price</td>
		
		<td>Action</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['f_cat']."</td>";
		echo "<td>".$res['s_fod']."</td>";
		echo "<td>".$res['f_quantity']."</td>";
		echo "<td>".$res['s_request']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['phone']."</td>";
		echo "<td>".$res['t_price']."</td>";
		
		echo "<td><a href=\"food_update.php?id=$res[id]\">Edit</a> | <a href=\"food_delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
