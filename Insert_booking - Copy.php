<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$firstname = mysqli_real_escape_string($mysqli, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($mysqli, $_POST['lastname']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
	$r_type = mysqli_real_escape_string($mysqli, $_POST['r_type']);
	$a_date = mysqli_real_escape_string($mysqli, $_POST['a_date']);
	$d_date = mysqli_real_escape_string($mysqli, $_POST['d_date']);
	$n_gest = mysqli_real_escape_string($mysqli, $_POST['n_gest']);
	$s_request = mysqli_real_escape_string($mysqli, $_POST['s_request']);
		
	// checking empty fields
	if(empty($firstname) || empty($lastname) || empty($email)|| empty($phone) || empty($r_type) || empty($a_date) || empty($d_date) || empty($n_gest) || empty($s_request)) {
				
		if(empty($firstname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($lastname)) {
			echo "<font color='red'>lastname field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		if(empty($phone)) {
			echo "<font color='red'>phone field is empty.</font><br/>";
		}
		if(empty($r_type)) {
			echo "<font color='red'>r_type field is empty.</font><br/>";
		}
		if(empty($a_date)) {
			echo "<font color='red'>a_date field is empty.</font><br/>";
		}
		if(empty($d_date)) {
			echo "<font color='red'>d_date field is empty.</font><br/>";
		}
		if(empty($n_gest)) {
			echo "<font color='red'>n_gest field is empty.</font><br/>";
		}
		if(empty($s_request)) {
			echo "<font color='red'>s_request field is empty.</font><br/>";
		}
		
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO booking_form(firstname,lastname,email,phone,r_type,a_date,d_date,n_gest,s_request) VALUES('$firstname','$lastname','$email','$phone','$r_type','$a_date','$d_date','$n_gest','$s_request' )");
		

		/*echo "INSERT INTO booking_form(firstname,lastname,email,phone,r_type,a_date,a_date,d_date,n_gest,s_request) VALUES('$firstname','$lastname','$email','$phone','$r_type','$a_date','$d_date','$n_gest','$s_request' )";*/
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='bookingDetails.php'>View Result</a>";
	}
}
?>
</body>
</html>