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
				
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE booking_form SET firstname='$firstname',lastname='$lastname',email='$email',phone='$phone',r_type='$r_type',a_date='$a_date',d_date='$d_date',n_gest='$n_gest',s_request='$s_request' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: bookingDetails.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM booking_form WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$firstname = $res['firstname'];
	$lastname = $res['lastname'];
	$email = $res['email'];
	$phone = $res['phone'];
	$r_type = $res['r_type'];
	$a_date = $res['a_date'];
	$d_date = $res['d_date'];
	$n_gest = $res['n_gest'];
	$s_request = $res['s_request'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<section>

		<div class="container">
			<h1>Room Booking Form</h1>
  <form name="form1" method="post" action="#">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" value="<?php echo $firstname;?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" value="<?php echo $lastname;?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="emial" id="email" name="email" value="<?php echo $email;?>">
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
        <label for="r_type">RoomType</label>
      </div>
      <div class="col-75">
        <select id="r_type" name="r_type" value="<?php echo $r_type;?>">
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
        <input type="DATE" id="a_date" name="a_date" value="<?php echo $a_date;?>">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="d_date">DEPARTURE DATE*</label>
      </div>
      <div class="col-75">
        <input type="DATE" id="d_date" name="d_date" value="<?php echo $d_date;?>">
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="n_gest">Number OF Gest</label>
      </div>
      <div class="col-75">
        <select id="n_gest" name="n_gest" value="<?php echo $n_gest;?>">
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
        
        	<input type="text" id="s_request" name="s_request" value="<?php echo $s_request;?>" style="height:200px">

      </div>
    </div>
    <div class="row">
    	<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
      <input type="submit" name="update" value="Update">
    </div>
  </form>
</div>
 
		
	</section>


</body>
</html>
