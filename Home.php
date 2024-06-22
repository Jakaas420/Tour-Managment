
<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOURIFY</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="Home.css">

<!-- Header Css Code -->
<!-- <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' /> -->

<!-- <link href="css/animate.css" rel="stylesheet" type="text/css" media="all"> -->
<!-- <script src="js/wow.min.js"></script> 
	<script>
		  new WOW().init(); -->
	</script>   


</head> 
<body>
    <header>
        <div class="navbar">
           
            <div class="nav-logo">
                <div class="logo" style=" background-image: url('Images/logo.png'); background-size: 100% 100%; position: absolute; top: -4px; height: 82px; width: 80px; margin: 1px;"></div>
            </div>  

            <div class="nav-menu border">
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="D-Rajasthan.php">Destination</a></li>
                    <li><a href="Udaipur-main.php">Homestays</a></li>
            
                    <li><a href="CONTACT.php">Contact Us</a></li>
                    <li><a href="admin/index.php"><i class="fa-solid fa-user"></i></a></li>


                </ul>
            </div>

            <div class="nav-sign">
            <a style="text-decoration:none;" href="Login2.php"><p>Sign In</p></a>
            </div>
        </div>
    </header>
    <div class="imgslider">
        <div class="slogen">
            <h1>Let Us Plan You Perfect !!<p>Rajasthan Holidays</p></h1>
            
        </div>
    </div>
    
    <h2> Rajasthan Vacation Rantals  </h2>
    <h5>Featured Destination In Rajasthan  </h5>
    <!-- <a>View All Tours <i class="fa-solid fa-angle-right"></i></a>-->
    <div class="top-destination"> 
        <div class="box1 box">
            <div class="box-contant">
                <div class="box-img" style="background-image: url('Images/jaisalmer.webp');"></div>
                <div class="button">
                    <div class="heritage"><a href="R-Jaisalmer.php">JAISALMER</a></div>
                </div>
                <!-- <h4>Jaisalmer</h4> -->
            </div>
        </div>
  
       
        <div class="box3 box">
            <div class="box-contant">
                <div class="box-img" style="background-image: url('Images/udaipur.jpg');"></div>
            </div>
            <div class="button">
                <div class="heritage"><a href="R-Udaipur.php">UDAIPUR</a></div>
            </div>
        </div>
        
        <div class="box4 box">
            <div class="box-contant">
                <div class="box-img" style="background-image: url('Jaipur.jpg');"></div>
            </div>  
            <div class="button">
                <div class="heritage"><a href="R-Jaipur.php">JAIPUR</a></div>
            </div>
        </div>

    </div>

    <h5>Best Hotels In Rajasthan</h5>
    <div class="top-destination"> 
        <div class="box1 box">
            <div class="box-contant">
                <div class="box-img" style="background-image: url('Images/marrito.jpg');"></div>
                <div class="button">
                    <div class="heritage"><a href="Hotel-Marrito.php">MARRITO</a></div>
                </div>
                <!-- <h4>Jaisalmer</h4> -->
            </div>
        </div>
        <div class="box2 box">
            <div class="box-contant">
                <div class="box-img" style="background-image: url('Images/rajputana.jpg');"></div>
                <div class="button">
                    <div class="heritage"><a href="U-Justa-Hotel.php">RAJPUTANA</a></div>
                </div>
            </div>
        </div>
           
        <div class="box3 box">
            <div class="box-contant">
                <div class="box-img" style="background-image: url('Images/paras.jpg');"></div>
            </div>
            <div class="button">
                <div class="heritage"><a href="U-Paras-Hotel.php">PARAS</a></div>
            </div>
        </div>
        
        <div class="box4 box">
            <div class="box-contant">
                <div class="box-img" style="background-image: url('Images/golden-tulip.jpg');"></div>
            </div>
            <div class="button">
                <div class="heritage">&nbsp;&nbsp;&nbsp;<a href="U-Golden-Hotel.php">TULIP</a></div>
            </div>
        </div>

    </div>
     <?php $sql = "SELECT * from tbltourpackages order by rand() limit 4";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name: <?php echo htmlentities($result->PackageName);?></h4>
					<h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6>
					<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
                    <p><b>Package price :</b> <?php echo htmlentities($result->PackagePrice);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
                    <p><a href="Booking2.php" background-color="red"> booking</p>

				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
				</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>  


    <h1>Why Choose Us ?</h1><br>
    <div class="detail-section">
        <div class="box1 detail" style="background-color: #eff4ef;">
            <div class="box-contant">
                <div class="like-icon"><i class="fa-solid fa-thumbs-up"></i></div>
                <div class="description">
                    <h3>Supportinig All Region</h3>
                    <p>We Are Supporting All Relegion Of India And We Are Also Respecting All The guests ,Whatever They Belong Relegion.</p>
                </div>
            </div>
        </div>
   
    
        <div class="box3 detail" style="background-color: #fdfaee;">
            <div class="box-contant">
                <div class="like-icon"><i class="fa-solid fa-thumbs-up"></i></div>
                <div class="description">
                    <h3>Verified Hotels</h3>
                    <p>We offer a meticulously selected and verified list of high-grade hotels. Our partners consistently deliver top-notch service, ensuring an exceptional experience for our guests.</p>
                </div>
            </div>
        </div>

        <div class="box4 detail" style="background-color: #eef5f8;">
            <div class="box-contant">
                <div class="like-icon"><i class="fa-solid fa-thumbs-up"></i></div>
                <div class="description">
                    <h3>Value For Money Tours</h3>
                    <p>With Tour My India, your vacation is not just about sightseeing; it's about creating memories that last a lifetime. Our holiday packages are hassle-free and designed with a focus on value for money. Trust us to weave unforgettable experiences into your journey.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- <h1>About Incredible India !!</h1>
    <div class="detail-section2">
        <div class="detail-img" style="    background-image: url('Images/4.jpg');   border-radius: 8px;   background-size: 100% 100%;   height: 650px;   width: 400px;   position: absolute;   right: 150px;   margin-top: 7px;"></div>
        <div class="description2">
            <p>Interesting and Intriguing, India offers incredible holiday experiences through its cultural, topography, and wildlife diversity. With these amazing and unique experiences, this south Asian country conveniently finds its way into the world tourism map as one of the finest destinations for a holistic vacation. India establishes its identity as the country of architectural masterpieces, making it an ideal travel destination to plan a heritage tour in the world. While Taj Mahal makes for the major draw on an India tour, there are a plethora of monuments and edifices in every India travel guide displaying the fine architecture and grandiose of different eras in the country.</p>
            <p>The diverse Indian topography adorned with the impressive Himalayas; long stretches of coastline; expansive hot, cold and white salt deserts; dense forests; alpine meadows and lakes; and scenic waterfalls pique the tourists’ interest. Along with the best nature sightseeing tours, India offers an opportunity to visitors to have a little adventure of their own. The numerous spell-binding and less-trodden trails give trekking tour opportunities in South Asia unlike any other.</p>
        </div>
    </div> -->

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
                <p></p>
            </div>
    </footer>
 </body>
</html>
