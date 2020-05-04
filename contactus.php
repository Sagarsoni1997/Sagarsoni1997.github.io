<?php

include 'connection.php';

if(isset($_POST['done'])){

$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$message = $_POST['message'];



if($name!="" && $address!="" && $city!="" && $mobile!="" && $email!="" && $message!="")
{
	$q = "INSERT INTO contactus(id,name,address,city,mobile,email,message) VALUES ('','$name','$address','$city','$mobile','$email','$message')";

	$query = mysqli_query($con,$q);

	if($query)
	{
		echo "Your Message Send Successfully";
	}

}
else
{
	echo "All Field Required";
}


}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Modak&family=Montserrat:wght@600&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
	body{
		background-image: url(images/services.jpeg);
		background-size: cover;

	}
</style>
</head>
<body>

<section>
	<div class="container">
	<h2 class="text-center">CONTACT US</h2>
	<hr>
		<div class="row">
			<div class="col-md-6">

				<div class="w-50 m-auto">
			<form action="" method="post">
				<div class="form-group">
					<label class="text-white">Name</label>
					<input type="text" name="name" autocomplete="off" class="form-control" placeholder="Please Enter Your Name"> 				
				</div>
 
 			<div class="form-group">
					<label class="text-white">Address</label>
					<input type="text" name="address" autocomplete="off" class="form-control" placeholder="Please Enter Your Address"> 				
				</div>

			<div class="form-group">
					<label class="text-white">City</label>
					<input type="text" name="city" autocomplete="off" class="form-control" placeholder="Please Enter Your City"> 				
				</div>

			<div class="form-group">
					<label class="text-white">Mobile</label>
					<input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="Please Enter Your Mobile"> 				
				</div>

			<div class="form-group">
					<label class="text-white">Email</label>
					<input type="email" name="email" autocomplete="off" class="form-control" placeholder="Please Enter Your Email"> 				
				</div>

			<div class="form-group">
					<label class="text-white">Message</label>
					<textarea name="message" autocomplete="off" class="form-control" placeholder="Please Enter Your Message"> </textarea>				
				</div>

				<button class="btn btn-success" name="done" type="submit">SUBMIT</button>


			</form>
			    </div>
				
				</div>


			<div class="col-md-6">
				<p class="about-title text-danger">OR <br> <br></p>
				<h3>You Can Contact US Directly At</h3>
				<br> <br>
				<ul>
					<li>Mobile :- 8109411201</li>
					<li>Email :- soniankit052@gmail.com</li>
					<li>Address :- 26A Vyanktesh Vihar Chota Bangarda Road Indore Pin-452005 (M.P)</li>
				</ul>
			</div>

		   
		</div>
	</div>
</section>
</body>
</html>