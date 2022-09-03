<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Event Booking</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflure.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>


	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
		<!--google font-->
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
   		

<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>


<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{ 

  $id = mysqli_real_escape_string($mysqli, $_POST['id']);
  
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
        
  } else {  
    //updating the table
    $result = mysqli_query($mysqli, "UPDATE event_in SET e_date='$e_date',e_time='$e_time',f_name='$f_name',n_person='$n_person',full_name='$full_name',email='$email',phone='$phone' WHERE id=$id");
    
    //redirectig to the display page. In our case, it is index.php
    header("Location: event_details.php");
  }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM event_in WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
  $e_date = $res['e_date'];
  $e_time = $res['e_time'];
  $f_name = $res['f_name'];
  $n_person = $res['n_person'];
  $full_name = $res['full_name'];
  $email = $res['email'];
  $phone = $res['phone'];
 
  
}
?>

</head>
<body>
	<nav>
		
		<label class="logo">StartLight Luxury Hotel</label>
		<ul>
			<li><a>Home</a></li>
			<li><a  >Rooms</a></li>
			<li><a href="#">Dining</a></li>
			<li><a class="active" href="#">Event</a></li>
			<li><a href="#">Offers</a></li>
			<li><a href="#">Experience</a></li>
			<li><a href="#">About Us</a></li>
		</ul>
	</nav>
	<section>

		<div class="container">
			<h1>Event Booking Form</h1>
  <form name="form1" method="post" action="#">
    <div class="row">
      <div class="col-25">
        <label for="e_date">Reservation Date*</label>
      </div>
      <div class="col-75">
        <input type="DATE" id="e_date" name="e_date"  value="<?php echo $e_date;?>" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="e_time">Reservation Time*</label>
      </div>
      <div class="col-75">
        <input type="time" id="e_time" name="e_time"  value="<?php echo $e_time;?>" >
      </div>
    </div>



    <div class="row">
      <div class="col-25">
        <label for="f_name">Function Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="f_name" name="f_name"  value="<?php echo $f_name;?>" >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="n_person">How many person will you be with?*</label>
      </div>
      <div class="col-75">
        <select id="n_person" name="n_person"  value="<?php echo $n_person;?>" >
          <option value="Person_1">Person 1</option>
          <option value="Person 2">Person 2</option>
          <option value="Person 3">Person 3</option>
          <option value="Person 4">Person 4</option>
          <option value="Person 5">Person 5</option>
          <option value="Person 6">Person 6</option>
        </select>
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="full_name">Full Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="full_name" name="full_name"  value="<?php echo $full_name;?>" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="emial" id="email" name="email" value="<?php echo $email;?>" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="phone">Phone Number</label>
      </div>
      <div class="col-75">
        <input type="Number" id="phone" name="phone"  value="<?php echo $phone;?>" >
      </div>
    </div>
    

    <div class="row">
     <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <input type="submit" name="update" value="Update">
    </div>
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