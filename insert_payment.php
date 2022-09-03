<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
	$address = mysqli_real_escape_string($mysqli, $_POST['address']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$card_type = mysqli_real_escape_string($mysqli, $_POST['card_type']);
	$card_number = mysqli_real_escape_string($mysqli, $_POST['card_number']);
	$exp_date = mysqli_real_escape_string($mysqli, $_POST['exp_date']);
	$cvv = mysqli_real_escape_string($mysqli, $_POST['cvv']);
	
		
	// checking empty fields
	if(empty($name) || empty($gender) || empty($address)|| empty($email) || empty($card_type) || empty($card_number) || empty($exp_date) || empty($cvv) ) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($gender)) {
			echo "<font color='red'>gender field is empty.</font><br/>";
		}
		
		if(empty($address)) {
			echo "<font color='red'>address field is empty.</font><br/>";
		}
		if(empty($email)) {
			echo "<font color='red'>email field is empty.</font><br/>";
		}
		if(empty($card_type)) {
			echo "<font color='red'>card_type field is empty.</font><br/>";
		}
		if(empty($card_number)) {
			echo "<font color='red'>card_number field is empty.</font><br/>";
		}
		if(empty($exp_date)) {
			echo "<font color='red'>exp_date field is empty.</font><br/>";
		}
		if(empty($cvv)) {
			echo "<font color='red'>cvv field is empty.</font><br/>";
		}
		
			
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO payment(name,gender,address,email,card_type,card_number,exp_date,cvv ) VALUES('$name','$gender','$address','$email','$card_type','$card_number','$exp_date','$cvv' )");
		

		/*echo "INSERT INTO payment(name,gender,address,email,card_type,card_number,exp_date,cvv ) VALUES('$name','$gender','$address','$email','$card_type','$card_number','$exp_date','$cvv' )";*/
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='payment_details.php'>View Result</a>";
	}
}
?>
</body>
</html>