<?php
include ('connection.php');
session_start();

if(isset($_POST['Get_Customer_Quote'])){
	$fullname = $_POST['fullname'];
    $description = $_POST['description'];
	$email = $_POST['email'];
	$contactno = $_POST['contactno'];
	
   $insert = "INSERT INTO `enquiry`(`fullname`, `description`, `email`, `contactno`) VALUES ('$fullname','$description','$email','$contactno')"; 
   $result = mysqli_query($con,$insert);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaipur Ajamer $ Pushkar Tour</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/Jaipur-Ajmer.css">
</head>
<body>
    <header>
        <div class="navbar">
           
            <div class="nav-logo">
                <div class="logo" style="    background-image: url('Images/logo.png'); background-size: 100% 100%;  position: absolute;  top: -4px;  height: 82px;  width: 80px;  margin: 1px;"></div>
            </div>

            <div class="nav-menu border">
                <ul>
                    <li><a href="Home.php   ">Home</a></li>
                    <li><a href="D-Rajasthan.php">Destination</a></li>
                    <li><a href="Udaipur-main.php">Homestays</a></li>
                    <li><a href="CONTACT.php">Contact Us</a></li>
                </ul>
            </div>

            <div class="nav-sign">
            <a style="text-decoration:none;" href="Login2.php"><p>Sign In</p></a>
            </div>
        </div>
    </header>

    <div class="Go-Back">
        <p><a href="Home.php">Home</a><i class="fa-solid fa-arrow-right"></i><a href="D-Rajasthan.php">Rajasthan<i class="fa-solid fa-arrow-right"></i><a href="R-Jaipur.php">Jaipur Tour</a><i class="fa-solid fa-arrow-right"></i><a href="">Jaipur Ajamer $ Pushkar Tour</a></p>
    </div>

    <div class="banner-section">
        <div class="img-section">
            <div class="img-contant" style="    height: 430px;    background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),  url('Images/ajmer.jpg');    background-size: 100% 100%;    width: 1220px;    margin-left: 20px;    background-size: 100% 100%;    animation: slider 15s linear infinite;"> <p>JAIPUR AJMER & PUSHKAR TOUR</p></div>
        </div>
        
     </div>
    <div class="nav-header">
        <div class="duration">
            <p>DURATION</p>
            <H3>3 NIGHTS 4 DAYS</H3>
        </div>
        <div class="duration">
            <p>TYPE OF TRIP</p>
            <H3>ROAD TRIP</H3>
        </div>
        <div class="duration">
            <p>&nbsp;START CITY</p>
            <H3>AJMER</H3>
        </div>
        <div class="duration">
            <p>&nbsp;END CITY</p>
            <H3>PUSHKAR</H3>
        </div>
    </div>

   <div class="description">
        <div class="detail">
            <h3>JAIPUR TOUR WITH AJMER & PUSHKAR</h3>
            <P>If travelers have been planning a trip to Jaipur since a long time but weren't able to make a move due to budget constraint. Well, Tour My India is here to offer a trip to Jaipur and Pushkar for budget-conscious traveler who are eager to check a bunch of boxes off their traveling to-do list in one fell swoop. The trip begins in Delhi; further, tourists will be transferred to a hotel where they will get in touch with the Rajasthan rich culture in famed monuments, museums, and galleries. On the third day, travelers will visit Ajmer and Pushkar to seek blessings of divinity. And on the fourth day, travelers will be transferred to Delhi for journey onwards.</P>
        </div>
        <div class="booking">
            <div class="icon">
                <i class="fa-solid fa-indian-rupee-sign"><a>11,999<span>Per Person</span><p>Excluding Applicable Taxes</p></a></i>
            </div>
        <button class="book"><a href="booking.php"> <p>PROCEED TO BOOK</p></a></button>      
        </div>
      
   </div>

   <div class="description2">
        <div class="detail2">
            <h3>Itinerary</h3>
            <div class="day1">
                <h3>DAY 1</h3><span>  NEW DELHI - JAIPUR (260 KMS-6 HRS)</span>
                <P>On arrival in Delhi, you will board a cab or bus, which will take you to Jaipur. On arrival in Jaipur, you will be transferred to a hotel. After relaxing for a while in the hotel, visit City Palace, Jantar Mantar, Govind Deoji Temple. The evening will be free for leisure, during which you can go to market for some shopping. Overnight stay at the hotel.</P>
            </div>
            <div class="day2">
                <h3>DAY 2</h3><span> JAIPUR - AJMER / PUSHKAR - JAIPUR (130 KMS 3 HRS- ONE WAY)</span>
                <P>After breakfast at the hotel, depart by car for a day trip to Ajmer - Pushkar. In the evening, come back to Jaipur hotel for overnight stay.</P>
           </div>
            <div class="day3">
                <h3>DAY 3</h3><span>  JAIPUR CITY TOUR</span>
                <P>Today, after breakfast, you will go for Jaipur sightseeing tour. You will visit Amber Palace and Kanak Vrindavan Temple. In the evening, you will visit Chokhi Dhani. Overnight stay in the Jaipur hotel.</P>
            </div>
            <div class="day4">
                <h3>DAY 4</h3><span>JAIPUR-DELHI</span>
                <P>Post breakfast, you will be transferred to Delhi. When in Delhi, you will be transferred to airport or railway station for your journey onwards.

                </P>
            </div>
        
</div>
<form method="post">
        <div class="in-box">
            <div class="map" style=" height: 90px; width: 90px; margin-left: 170px;margin-top: 5px;background-image: url('Images/map.jpg');background-size: 100% 100%;" > </div>
            <h2>Fill Enquiry Form Below</h2>
            <tr>
            <h3>Your Full Name</h3>
            <td><input type="text" name="fullname" id="name" required></td>
					</tr>
                    <tr>
            <h3>Tour Description</h3> <td><input type="text" name="description" id="name" required></td>
					</tr>
                    <tr>
            <h3>Email</h3> <td><input type="email" name="email" id="name" ></td>
					</tr>
                    <tr>
            <h3>Contact No.</h3> <td><input type="text" name="contactno" id="name" required></td>
					</tr>
                    
            <tr>
						<td>
							<input type="submit" value="Get Customer Quote" name="Get_Customer_Quote" id="Get Customer Quote">
							
						</td>
					</tr>
            
        </div>
    
    </div>
</from>
    <footer>     
        <div class="footerContainer">
            <div class="socialIcon">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-telegram"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
</div>
             <div class="footernav">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">News</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Our Team</a></li>
                </ul>
             </div>
             
        </div>
        <div class="footerbottom">
            <p>Copyright &copy; Since 2023
        </div>
</footer>
</body>
</html>