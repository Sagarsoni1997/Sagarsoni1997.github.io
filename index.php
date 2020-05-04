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
	<title>Ankit Dance Studio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Modak&family=Montserrat:wght@600&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<section class="header">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="images/ankitlogo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
    <i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link active-home" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.php">CONTACT US</a>
      </li>
    </ul>
  </div>
</nav>
			
	<div class="row banner">
		<div class="col-md-6">
			<h1 >Ankit Dance Studio</h1>
			<p>Where People Dance To Express Their Feelings and Emotions,<br> or To Feel Better.</p>
			<br><br>
			<a href="contactus.php" class="express-btn">JOIN CLASSES</a>
			<a href="about.php">ABOUT ANKIT</a>
		</div>

		<div class="col-md-6">
			<img src="images/banner.png" class="img-fluid">
		</div>
	</div>

		</div>
	</section>

<!-- -----------------------Service------------------------------ -->

	<section class="service">
		<div class="container">
			<h2 class="title">We Provide Many<br>Services</h2>
			<p class="subtitle">Let's Give One Chance To US To Make Your Event Memorable</p>
			<div class="row">
				<div class="col-md-4">
					<div class="service-box">
						<img src="images/sangeet.png" class="img-fluid">
						<h6>Mahila Sangeet</h6>
						<p>A sangeet ceremony is an Indian wedding tradition that involves singing, dancing and music.</p>
						 <a href="contactus.php"><i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-box active-service">
						<img src="images/event.jpg" class="img-fluid">
						<h6>Event Management</h6>
						<p>We manage all type of events and try our best to make your event memorable.</p>
						 <a href="contactus.php"><i class="fa fa-arrow-right"></i></a>
				</div>
				</div>
				<div class="col-md-4">
					<div class="service-box">
						<img src="images/onlineclass.jpg" class="img-fluid">
						<h6>Online Classes</h6>
						<p>We also provide online dance classes and they all are free, During this lockdown due to covid-19.</p>
						<a href="contactus.php"><i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</section>

<!-- -----------------------Why Choice US------------------------------ -->

<section id="about-us">
	<div class="container">
		<h1 class="title text-center">WHY CHOOSE US</h1>
		<div class="row">
			<div class="col-md-6 about-us">
				<p class="about-title">Why we are diffrent</p>
				<ul>
					<li>We Teach our student from beginning</li>
					<li>We Build confidence in our students</li>
					<li>We improve your skills</li>
					<li>We provide lot's of opportunities</li>
					<li>We make genius</li>
					<li>We provide lot's of offers</li>
				</ul>
			</div>
			<div class="col-md-6">
				<img src="images/choice.png" class="img-fluid">
			</div>
		</div>
	</div>
</section>

<!-------------------------- Review----------------------- -->

<section class="review">
	<div class="container">
		<h3 class="title text-center">WHAT PEOPLE SAY ABOUT US</h3>
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/khushi.jpeg">
      <div class="carousel-caption">
        <h5>Khushi Soni</h5>
        <small>Small Message</small>
        <p>Ankit sir is Awesome Dance teacher we learn amazing dance from him</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/khushi.jpeg">
      <div class="carousel-caption">
        <h5>Shivani Jain</h5>
        <small>Small Message</small>
        <p>Ankit sir is Awesome choreographer I learn many thing from him</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/khushi.jpeg">
      <div class="carousel-caption">
        <h5>Kritika Sharma</h5>
        <small>Small Message</small>
        <p>Ankit sir is Very Good Dance teacher, He teach dance very well</p>
      </div>
    </div>
  </div>
  
</div>
	</div>
</section>

<!-- ----------------------Contact us------------------------------------------------- -->

<section id="about-us">
	<div class="container">
	<h2 class="text-center">CONTACT US</h2>
		<div class="row">
			<div class="col-md-6">

				<div class="w-50 m-auto">
			<form action="" method="post">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" autocomplete="off" class="form-control" placeholder="Please Enter Your Name"> 				
				</div>
 
 			<div class="form-group">
					<label>Address</label>
					<input type="text" name="address" autocomplete="off" class="form-control" placeholder="Please Enter Your Address"> 				
				</div>

			<div class="form-group">
					<label>City</label>
					<input type="text" name="city" autocomplete="off" class="form-control" placeholder="Please Enter Your City"> 				
				</div>

			<div class="form-group">
					<label>Mobile</label>
					<input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="Please Enter Your Mobile"> 				
				</div>

			<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" autocomplete="off" class="form-control" placeholder="Please Enter Your Email"> 				
				</div>

			<div class="form-group">
					<label>Message</label>
					<textarea name="message" autocomplete="off" class="form-control" placeholder="Please Enter Your Message"> </textarea>				
				</div>

				<button class="btn btn-success" name="done" type="submit">SUBMIT</button>


			</form>
			    </div>
				
				</div>


			<div class="col-md-6">
				<img src="images/contact.png" class="img-fluid">
			</div>

		   
		</div>
	</div>
</section>


<!-- ------------------------------Footer--------------------- -->

<footer>
	<p class="bg-dark text-white text-center">Copyright @2020 Ankit Dance Studio All Rights Reserved Created by Sagar Soni</p>
</footer>


</body>
</html>