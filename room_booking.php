<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Room Booking</title>
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


</head>
<body>
	<nav>
		
		<label class="logo">StartLight Luxury Hotel</label>
		<ul>
			<li><a>Home</a></li>
			<li><a  class="active" href="#">Rooms</a></li>
			<li><a href="#">Dining</a></li>
			<li><a href="#">Event</a></li>
			<li><a href="#">Offers</a></li>
			<li><a href="#">Experience</a></li>
			<li><a href="#">About Us</a></li>
		</ul>
	</nav>
	<section>

		<div class="container">
			<h1>Room Booking Form</h1>
  <form action="#">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Email">Email</label>
      </div>
      <div class="col-75">
        <input type="emial" id="Email" name="Email" placeholder="Your Email..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="phone">Phone Number</label>
      </div>
      <div class="col-75">
        <input type="Number" id="phone" name="phone" placeholder="Your phone..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="r_type">RoomType</label>
      </div>
      <div class="col-75">
        <select id="r_type" name="r_type">
          <option value="Type1">Type 1</option>
          <option value="Type2">Type 1</option>
          <option value="Type1">Type 3</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="a_date">ARRIVAL DATE*</label>
      </div>
      <div class="col-75">
        <input type="DATE" id="a_date" name="a_date" placeholder=" ARRIVAL DATE*..">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="d_date">DEPARTURE DATE*</label>
      </div>
      <div class="col-75">
        <input type="DATE" id="d_date" name="d_date" placeholder="DEPARTURE DATE*..">
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="n_gest">Number OF Gest</label>
      </div>
      <div class="col-75">
        <select id="n_gest" name="n_gest">
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="s_request">SPECIAL REQUESTS</label>
      </div>
      <div class="col-75">
        <textarea id="s_request" name="s_request" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Booking">
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