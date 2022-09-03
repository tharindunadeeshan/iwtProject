<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment Page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflure.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>


	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
		<!--google font-->
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
   		
<style >

.container{
    background-color: #f2f2f2;
    border: 1px solid gray;
    border-radius: 4px;
    padding: 5px 10px 15px 20px;
}

p{
    font-size: 13px;
    text-align: right;
    margin-right: 15px;
}



.main-heading{
    text-align: center;
}

input[type="text"],
input[type="email"],
input[type="number"],
input[type="date"],
input[type="password"],
select,textarea{
    width: 100%;
    padding: 10px;
    margin: 10px 0px;
    border: 1px solid #cccccc;
    border-radius: 4px;
}

input[type="submit"]{
    width: 100%;
    background-color: rgb(13, 163, 13);
    color: honeydew;
    font-size: 18px;
    padding: 12px 20px;
    margin: 10px 0px;
    border-radius: 7px;
    border: none;
    box-shadow: none;
    cursor: pointer;
}

input[type="submit"]:hover{
    background-color: rgb(7, 231, 7);
}

fieldset{
    background-color: white;
    border: 1px solid #cccccc;
    margin: 10px;
    font-size: 17px;
}

.Gender{
    font-size: 15px;
    font-weight: 50;
}

#visa{
    width: 65px;
}

#rupay{
    width: 95px;
    height: 56px;
}

#mastercard{
    width: 65px;
}

</style>


<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
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
				
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE payment SET name='$name',gender='$gender',address='$address',email='$email',card_type='$card_type',card_number='$card_number',exp_date='$exp_date',cvv='$cvv' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: payment_details.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM payment WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$gender = $res['gender'];
	$address = $res['address'];
	$email = $res['email'];
	$card_type = $res['card_type'];
	$card_number = $res['card_number'];
	$exp_date = $res['exp_date'];
	$cvv = $res['cvv'];
	
}
?>

</head>
<body>
	<nav>
		
		<label class="logo">StartLight Luxury Hotel</label>
		<ul>
			<li><a class="active" href="#">Home</a></li>
			<li><a href="#">Rooms</a></li>
			<li><a href="#">Dining</a></li>
			<li><a href="#">Event</a></li>
			<li><a href="#">Offers</a></li>
			<li><a href="#">Experience</a></li>
			<li><a href="#">About Us</a></li>
		</ul>
	</nav>
	<section>

		<div class="container">
        <form name="form1" method="post" action="#">      <!--Location of Server-->
            <h1 class="main-heading">PAYMENT FORM</h1>
            <hr>
            <p>* indicates a required field</p>
            <h2>User Information</h2>
            <div>Name: *<input type="text" name="name" value="<?php echo $name;?>" required></div>
            <div>
           <select id="r_type" name="gender" value="<?php echo $gender;?>">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          
        </select>
            </div>
            <div>
                Address:<input type="text" name="address" id="address" value="<?php echo $address;?>" required>
            </div>
            <div>
                Email: * <input type="email" name="email" id="email" value="<?php echo $email;?>" required>
            </div>
           
            <hr>
            <h2>Payment Information</h2>
            <div>
                Accepted Cards <br>
                <div>
                    <img src="img/Visa.png" alt="Visa" class="cards" id="visa">
                    <img src="img/Rupay.png" alt="Rupay" class="cards" id="rupay">
                    <img src="img/Mastercard.png" alt="MasterCard" class="cards" id="mastercard">
                </div>
                Card Type: *
                <select name="card_type" id="card_type" value="<?php echo $card_type;?>">

                    <option value="visa">Visa</option>
                    <option value="rupay">Rupay</option>
                    <option value="mastercard">MasterCard</option>
                </select>
            </div>
            <div>
                Card Number: * <input type="number" name="card_number" id="card_number"
                     value="<?php echo $card_number;?>" required>
            </div>
            <div>
                Expiration Date: * <input type="date" name="exp_date" id="exp_date" value="<?php echo $exp_date;?>" required>
            </div>
            <div>
                CVV: * <input type="password" name="cvv" id="cvv"  value="<?php echo $cvv;?>" >
            </div>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <input type="submit" name="update" value="Update">
        </form>

    </div>


		
	</section>




	</footer>
     <!------------------------------------------------------------------------------>
<div class="footer">
			<div class="content">

				<div class="footer_section about">
					<h3><span>StarLight Luxury</span>.Hotel</h3>	
					<ul class="h123">
						<li><a href="">Home</a></li>
						<li><a href="">Rooms</a></li>
						<li><a href="">Dining</a></li>
						<li><a href="">Event</a></li>
						<li><a href="">Offers</a></li>
						<li><a href="">Experience</a></li>
						<li><a href="">About Us</a></li>
					</ul>
				</div>
				<div class="footer_section follow_us">
				<h6>Folow Us</h6>
				<div class="soicial">
					
					<ul>
						<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a>
					</ul>
				</div>
					<div class="cotact">
						<span><i class="fa fa-phone-square" aria-hidden="true"></i> &nbsp;011 1111 111</span>
						<span><br><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; starlightluxury@gmail.com</span>
					</div>

					</div>

				<div class="footer_section apps">
					<h6>About Us</h6>
					<p>We specializes in creating beautiful and unique events.
				 We provide a multitude of services ranging from Day-of to Full Service Event Coordination,
				  and everything in between. Your coordinator will collaborate with you to 
				produce an unforgettable event that will be tailored to you and your vision.
				 During a complimentary initial consultation, you will have the opportunity to look through our portfolios, learn more about our services and ask any questions you may have.
				 </p>
				</div>
			</div><!--content-->
			<div class="footer_bottom">
				&copy; StarLight Luxury.COM | Desigend By Tharindu  Nadeeshan
			</div><!--footer_bottom-->
		</div>


</body>
</html>