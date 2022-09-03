<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$f_cat = mysqli_real_escape_string($mysqli, $_POST['f_cat']);
	$s_fod = mysqli_real_escape_string($mysqli, $_POST['s_fod']);
	$f_quantity = mysqli_real_escape_string($mysqli, $_POST['f_quantity']);
	$s_request = mysqli_real_escape_string($mysqli, $_POST['s_request']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
	$t_price = mysqli_real_escape_string($mysqli, $_POST['t_price']);
	
		
	// checking empty fields
	if(empty($f_cat) || empty($s_fod) || empty($f_quantity)|| empty($s_request) || empty($name) || empty($email) || empty($phone) || empty($t_price) ) {
				
		if(empty($f_cat)) {
			echo "<font color='red'>f_cat field is empty.</font><br/>";
		}
		
		if(empty($s_fod)) {
			echo "<font color='red'>s_fod field is empty.</font><br/>";
		}
		
		if(empty($f_quantity)) {
			echo "<font color='red'>f_quantity field is empty.</font><br/>";
		}
		if(empty($s_request)) {
			echo "<font color='red'>s_request field is empty.</font><br/>";
		}
		if(empty($name)) {
			echo "<font color='red'>name field is empty.</font><br/>";
		}
		if(empty($email)) {
			echo "<font color='red'>email field is empty.</font><br/>";
		}
		if(empty($phone)) {
			echo "<font color='red'>phone field is empty.</font><br/>";
		}
		if(empty($t_price)) {
			echo "<font color='red'>t_price field is empty.</font><br/>";
		}
		
			
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO food_order(f_cat,s_fod,f_quantity,s_request,name,email,phone,t_price ) VALUES('$f_cat','$s_fod','$f_quantity','$s_request','$name','$email','$phone','$t_price' )");
		

		/*echo "INSERT INTO payment(name,gender,address,email,card_type,card_number,exp_date,cvv ) VALUES('$name','$gender','$address','$email','$card_type','$card_number','$exp_date','$cvv' )";*/
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='food_details.php'>View Result</a>";
	}
}
?>
</body>
</html>