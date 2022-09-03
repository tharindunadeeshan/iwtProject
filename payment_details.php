<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM payment ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Booking Details Page</title>
</head>

<body>
<a href="index.html">Home Page</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Gender</td>
		<td>address</td>
		<td>email</td>
		<td>Card type</td>
		<td>Card number</td>
		<td>Exp date</td>
		<td>cvv</td>
		
		<td>Action</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['gender']."</td>";
		echo "<td>".$res['address']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['card_type']."</td>";
		echo "<td>".$res['card_number']."</td>";
		echo "<td>".$res['exp_date']."</td>";
		echo "<td>".$res['cvv']."</td>";
		
		echo "<td><a href=\"payment_edit.php?id=$res[id]\">Edit</a> | <a href=\"payment_delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
