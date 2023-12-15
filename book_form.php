<?php 
//include("book_form.php"); 
//include 'config.php';
//include("book.php");
error_reporting(0);  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "s_webp";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['submit']))
 {
    $name= $_POST['name'];
    $email= $_POST['email'];
    $num= $_POST['phone'];
    $address= $_POST['address'];
    $location= $_POST['location'];
    $guest= $_POST['guests'];
    $arrival= $_POST['arrivals'];
    $leaving= $_POST['leaving'];

    $query = "INSERT INTO `book`(Name, Email, Phone, Address, Location, Guests, Arrivals, Leaving) 
    VALUES('$name','$email','$num','$address','$location','$guest','$arrival','$leaving')";

    $data = mysqli_query($conn,$query);

     if($data)
     {
        echo "Data inserted into Database";
     }
     else
     {
        echo "Failed";
     }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link rel="stylesheet" href="home.css">

    <!----- sawiper css link ---->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!---- Font awesome cdn link ---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>

<!-----header Section start ----->
<section class="header">
    <a href="home.php" class="logo">Tour & Travel</a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
        <a href="contact.php">Contact Us</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<div class="heading" style="background:url(image/3.jpg) no-repeat">
    <h1>Book</h1>
</div>

<!----book section start----->
<section class="booking">
    <h1 class="heading-title">Book your trip!</h1>
    <form action="#" method="POST" class="book-form" name="bookingForm">
        <div class="flex">
            <div class="inputBox">
                <span>Name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>Email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>Phone :</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
                <span>Address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>How many :</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>
            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>
        </div>
        <input type="submit" value=" submit" name="submit" class="btn" >
    </form>
</section>



<!-------footer section------->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="" class="home php"> <i class="fas fa-angle-right"></i>Home</a>
            <a href="" class="about php"> <i class="fas fa-angle-right"></i>About</a>
            <a href="" class="package php"> <i class="fas fa-angle-right"></i>Package</a>
            <a href="" class="book php"> <i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
            <h3>Extra Links</h3>
            <a href="" class="home php"> <i class="fas fa-angle-right"></i>Ask Questions</a>
            <a href="" class="about php"> <i class="fas fa-angle-right"></i>About Us</a>
            <a href="" class="package php"> <i class="fas fa-angle-right"></i>Privacy Policy</a>
            <a href="" class="book php"> <i class="fas fa-angle-right"></i>Terms of use</a>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="" class="home php"> <i class="fas fa-phone"></i>+123-456-7890</a>
            <a href="" class="about php"> <i class="fas fa-phone"></i>+111-222-3333</a>
            <a href="" class="package php"> <i class="fas fa-envelope"></i>anikahhossen123@gmail.com</a>
            <a href="" class="book php"> <i class="fas fa-map"></i>Dhanmondi, Dhaka-1205, Bangladesh</a>
        </div>

        <div class="box">
            <h3>Extra Links</h3>
            <a href="" class="home php"> <i class="fab fa-facebook-f"></i>Facebook</a>
            <a href="" class="about php"> <i class="fab fa-twitter"></i>Twitter</a>
            <a href="" class="package php"> <i class="fab fa-instagram"></i>Instagram</a>
            <a href="" class="book php"> <i class="fab fa-linkedin"></i>Linkedin</a>
        </div>
    </div>

    <div class="credit"> created by <span>Anikah Hossain</span> | all rights reserved!</div>
</section>


<!----Swiper js link---->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!----js file---->
<script src="home.js"></script>
    
</body>
</html>

<!-----------------------------------Php section-------------------------------->
<?php
   
?>

<!---------------------------------------php section close-------------------------------------------->