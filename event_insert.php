<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$e_date = mysqli_real_escape_string($mysqli, $_POST['e_date']);
	$e_time = mysqli_real_escape_string($mysqli, $_POST['e_time']);
	$f_name = mysqli_real_escape_string($mysqli, $_POST['f_name']);
	$n_person = mysqli_real_escape_string($mysqli, $_POST['n_person']);
	$full_name = mysqli_real_escape_string($mysqli, $_POST['full_name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);

	
		
	// checking empty fields
	if(empty($e_date) || empty($e_time) || empty($f_name)|| empty($n_person) || empty($full_name) || empty($email) || empty($phone)  ) {
				
		if(empty($e_date)) {
			echo "<font color='red'> E date field is empty.</font><br/>";
		}
		
		if(empty($e_time)) {
			echo "<font color='red'>e_time field is empty.</font><br/>";
		}
		
		if(empty($f_name)) {
			echo "<font color='red'>f_name field is empty.</font><br/>";
		}
		if(empty($n_person)) {
			echo "<font color='red'>n_person field is empty.</font><br/>";
		}
		if(empty($full_name)) {
			echo "<font color='red'>full_name field is empty.</font><br/>";
		}
		if(empty($email)) {
			echo "<font color='red'>email field is empty.</font><br/>";
		}
		if(empty($phone)) {
			echo "<font color='red'>phone field is empty.</font><br/>";
		}
		
			
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO event_in(e_date,e_time,f_name,n_person,full_name,email,phone ) VALUES('$e_date','$e_time','$f_name','$n_person','$full_name','$email','$phone' )");
		

		/*echo "INSERT INTO payment(name,gender,address,email,card_type,card_number,exp_date,cvv ) VALUES('$name','$gender','$address','$email','$card_type','$card_number','$exp_date','$cvv' )";*/
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='event_details.php'>View Result</a>";
	}
}
?>
</body>
</html>