<?php
include ('connection.php');
session_start();
// if(isset($_SESSION['email'])){
//     header('location: products.php');
// }
if(isset($_POST['submit'])){
	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postlcode = $_POST['postlcode'];
    $number = $_POST['number'];
	$email = $_POST['email'];
	$destination = $_POST['destination'];
	$arrivaldate = $_POST['arrivaldate'];
    $departuredate = $_POST['departuredate'];
	// $insert = "insert into booking(name,email,number,packagename,packageloc) VALUES('$name','$email','$mobile','$packagename','$packageloc')";
	// $insert = "INSERT INTO `booking`( `name`, `email`, `mobile`, `pkgname`, `pkgloc`) VALUES ('$name','$email','$mobile','$packagename','$packageloc')";
	$insert = "INSERT INTO `booking`(`firstname`, `lastname`, `address`, `city`, `postlcode`, `number`, `email`, `destination`, `arrivaldate`, `departuredate`) VALUES ('$firstname','$lastname','$address','$city','$postlcode','$number','$email','$destination','arrivldate','$departuredate')";
    $result = mysqli_query($con,$insert);
    header("location:payment3.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="css/Booking2.css">
</head>
<body>
    <div class="booking">
        <div class="img"   style="background-image: url('Images/book2.png');  background-size: 100% 100%;  height: 250px;  width: 750px;"></div>

        <div class="head">
            <h2>Package Booking Form</h2><p>Please Complete The Form Below.</p>
        </div>
<form method="post">
        <div class="contant">
            <div class="fullname">
                <h3>Fullname</h3>
                <input type="text" name="firstname" id="firstname" required>
                <span> <input type="text" name="lastname" id="lastname"required></span>
                <a> FirstName</a> <p> LastName</p>
            </div>

            <div class="address">
                <h3>Address</h3>
                <input type="text" name="address" id="address">
            </div>

            <div class="combine">
                <div class="city">
                    <h3>City</h3>
                    <input type="text" name="city" id="city">
                </div>
                <div class="pincode">
                    <h3>Postal Code</h3>
                    <input type="number" name="postlcode" id="pincode" required>
                </div>
                
            </div>


            <div class="combine2">
                <div class="mobile">
                    <h3>Phone Number</h3>
                    <input type="number" name="number" id="mobile">
                </div>
                <div class="email">
                    <h3>E-Mail</h3>
                    <input type="email" name="email" id="email" required>
                </div>
            </div>

            <div class="location">
                <h3>Destination</h3>
                <input type="text" name="destination" id="Destination" required>
            </div>

            <div class="date">
                <div class="arrival">
                    <h3>Arrival Date</h3>
                    <input type="date" name="arrivaldate" id="arrivaldate">
                </div>
                <div class="departure">
                    <h3>Departure Date</h3>
                    <input type="date" name="departuredate" id="mobile">
                </div>
            </div>

            <button><p><input type="submit" name="submit"></p></button>
           <!-- <p><input type="submit" name="submit" value="submit" ></p> -->
        </div>
    </div>
</form>
    
</body>
</html>