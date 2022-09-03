<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Food Ordering </title>
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
    
        
  } else {  
    //updating the table
    $result = mysqli_query($mysqli, "UPDATE food_order SET f_cat='$f_cat',s_fod='$s_fod',f_quantity='$f_quantity',s_request='$s_request',name='$name',email='$email',phone='$phone',t_price='$t_price' WHERE id=$id");
    
    //redirectig to the display page. In our case, it is index.php
    header("Location: food_details.php");
  }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM food_order WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
  $f_cat = $res['f_cat'];
  $s_fod = $res['s_fod'];
  $f_quantity = $res['f_quantity'];
  $s_request = $res['s_request'];
  $name = $res['name'];
  $email = $res['email'];
  $phone = $res['phone'];
  $t_price = $res['t_price'];
  
}
?>


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
			<h1>Food Order Form</h1>
  <form name="form1" method="post" action="#">
    <div class="row">
      <div class="col-25">
        <label for="f_cat">Select Food Category</label>
      </div>
      <div class="col-75">
        <select id="f_cat" name="f_cat" value="<?php echo $f_cat;?>">
          <option value="breakfast">breakfast</option>
          <option value="Lunch">Lunch</option>
          <option value="Dinner">Dinner</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="s_fod">Select Foods</label>
      </div>
      <div class="col-75">
        <select id="s_fod" name="s_fod" value="<?php echo $s_fod;?>">
          <option value="food1">food1</option>
          <option value="Food2">Food2</option>
          <option value="Food3">Food3</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="f_quantity">Food Quantity</label>
      </div>
      <div class="col-75">
        <input type="number" id="f_quantity" name="f_quantity" value="<?php echo $f_quantity;?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="s_request">SPECIAL REQUESTS</label>
      </div>
      <div class="col-75">
        
        <input type="text" id="s_request" name="s_request" value="<?php echo $s_request;?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="name">Enter Your Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" value="<?php echo $name;?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Enter Your Emial</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" value="<?php echo $email;?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="phone">Phone Number</label>
      </div>
      <div class="col-75">
        <input type="Number" id="phone" name="phone" value="<?php echo $phone;?>">
      </div>
    </div>
      <div class="row">
      <div class="col-25">
        <label for="t_price">Totale Price</label>
      </div>
      <div class="col-75">
        <input type="Number" id="t_price" name="t_price"  value="<?php echo $t_price;?>">
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