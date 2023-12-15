<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
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

<div class="heading" style="background:url(contact/1.jpg) no-repeat">
    <h1></h1>
</div>

<section class="contact">
            <div class="content">
                <h2>Contact Us</h2>
                <p>Please do contact with us to get offer on packages and travel to beautiful places
                    with your family and friends! May you have a nice and safe journey!
                </p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon">
                            <i class='bx bx-map'></i>
                        </div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>21 North Road,Dhanmondi <br> Dhaka-1205, Bangladesh</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class='bx bx-phone'></i>
                        </div>
                        <div class="text">
                            <h3>Let's Talk</h3>
                            <p>+88001234567890 <br> +234-456-7890</p>

                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class='bx bx-envelope'></i>
                        </div>
                        <div class="text">
                            <h3>General Support</h3>
                            <p>nuhaamerica@gmail.com <br> anikahhossen123@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form action="#" method="POST">
                        <h2>Send Us Message</h2>
                        <div class="inputBox">
                            <input type="text" name="fname" required="required">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="email" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="phone" required="required">
                            <span>Phone Number</span>
                        </div>
                        <div class="inputBox">
                            <textarea required="required" name="message"></textarea>
                            <span>Type Your Message</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="send" value="Send Message">
                        </div>
                    </form>
                </div>
            </div>
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

<?php
if($_POST['send']){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $query = "INSERT INTO forms values('$fname','$email','$phone','$message')";
    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo "Data Inserted into Database";
    }

    else{
        echo "Failed";
    }
}
?>