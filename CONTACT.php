<?php
    include ('connection.php');
    session_start();
    // if(isset($_SESSION['email'])){
    //     header('location: products.php');
    // }
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        // $insert = "insert into contact_us (name,email,message) VALUES('$name','$email','$message')";
		$insert = "INSERT INTO `contact_us`(`name`,`email`,`message`) VALUES ('$name','$email','$message')";
        $result = mysqli_query($con,$insert);
    }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CONTACT US</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/CONTACT.css">
</head>
<body>
	<header>
        <div class="navbar">
           
            <div class="nav-logo">
                <div class="logo"  style="    background-image: url('Images/logo.png'); background-size: 100% 100%;  position: absolute;  top: -4px;  height: 82px;  width: 80px;  margin: 1px;"></div>
            </div>

            <div class="nav-menu border">
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="D-Rajasthan.php">Destination</a></li>
                    <li><a href="Udaipur-main.php">Homestays</a></li>
         
                    <li><a href="">Contact Us</a></li>


                </ul>
            </div>
			<div>
                <!-- <a style="text-decoration:none;" href="Login2.php"><p>Sign In</p></a> -->
            </div>
            <!-- <div class="nav-sign">
			<a style="text-decoration:none;" href="Login2.php"><p>Sign In</p></a>
            </div> -->
        </div>
    </header>
  
	<section class="contect" style="	position: relative;	min-height: 100vh;	padding: 50px 100px;	display: flex;	justify-content: center;	align-items: center;	flex-direction: column;	background: url('Images/manali.jpg');	background-size: cover;">
		<div class="Contect">
			<h2 align="center">Contact Us</h2>
			<p align="center"> Thank You For Joining Us...You May Give Your Feedback....!!</p>
		</div><br><br>
		<div class="Container">
			<div class="ContactInfo">
				<div class="box">
					<div class="icon"><i class="fa fa-location-arrow" aria-hidden="true"></i>
		</div>
					<div class="text">
						<h3>Address</h3>
						<p>Satuababa BCA College,<br> Bhavanagar Road,Palitana,<br> 364270</p>
					</div>
					<br><br>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Phone</h3>
						<p>905442405</p>
					</div>
					<br><br>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
					<div class="text">
						<h3>E-Mail</h3>
						<p>sagathiyajaydeep66@gmail.com<br>pavasiyaparth@gmail.com</p>
					</div>
					<br><br>
				</div>
			</div>
			<div class="ContactForm">
				<form method="post">
					<h2>Send Message</h2><br>
					<div class="inputbox">
						<input type="box" name="name" required="Required">
						<span>Full Name</span>
					</div><br>
						<div class="inputbox">
						<input type="box" name="email" required="Required">
						<span>E-Mail</span>
					</div><br>
						<div class="inputbox">
						<textarea required="Required" name="message"></textarea>
						<span>Type Your Message....</span>
					</div><br>
						<div class="inputbox">
						<input type="submit" name="send" value="Send">
						
					</div><br>
	</section>


</body>
</html>