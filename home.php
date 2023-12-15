<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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

<!----home section start ----->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(image/7.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Travel around the world</h3>
                    <a href="package.php" class="btn">Discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(image/2.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Discover the new places</h3>
                    <a href="package.php" class="btn">Discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(image/3.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Make your tour worthwile</h3>
                    <a href="package.php" class="btn">Discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(image/4.jpg) no-repeat">
                <div class="content">
                    <span>Happy Journey</span>
                    <h3>Travel around the world</h3>
                    <a href="package.php" class="btn">Discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(image/5.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Jobs fill your pocket, but adventures fill your soul</h3>
                    <a href="package.php" class="btn">Discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(image/6.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Travel around the world</h3>
                    <a href="package.php" class="btn">Discover more</a>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!---service section--->
<section class="services">
    <h1 class="heading-title">Our Services</h1>
    <div class="box-container">
        <div class="box">
        <img src="icon/2.png" alt="">
            <h3>Adventure</h3>
        </div>
        <div class="box">
            <img src="icon/3.png" alt="">
            <h3>tour guide</h3>
        </div>
        <div class="box">
            <img src="icon/4.png" alt="">
            <h3>trekking</h3>
        </div>
        <div class="box">
            <img src="icon/5.png" alt="">
            <h3>camp fire</h3>
        </div>
        <div class="box">
            <img src="icon/6.png" alt="">
            <h3>off road</h3>
        </div>
        <div class="box">
            <img src="icon/7.png" alt="">
            <h3>camping</h3>
        </div>
    </div>
</section>
<!-----home about sevtion ----->
<section class="home-about">
    <div class="image">
        <img src="about/1.jpg" alt="">
    </div>
    <div class="content">
        <h3>About Us</h3>
        <p>Welcome to our website, where every journey is a story waiting to be told. With 10 years of passion for travel, we specialize in creating personalized experiences that transcend the ordinary. Our dedicated team of seasoned professionals is committed to turning your travel dreams into reality. From the moment you connect with us to the day you return home, we strive to make every aspect of your adventure seamless and unforgettable. At [Your Company Name], we believe in responsible travel, innovation, and the power of exploration to enrich lives. Join us on a voyage of discovery, and let's create memories that will last a lifetime.</p>
        <a href="about.php" class="btn">Read More...</a>
    </div>
</section>
<!--------home packages section---->
<section class="home-packages">
    <h1 class="heading-title">Our Packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="packages/1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Advanture & Tour</h3>
                <p>Our expert guides take you to the must-see destinations as well as the undiscovered places to enjoy wonderful tours in Rome in small groups or in private tours.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="packages/2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Advanture & Tour</h3>
                <p>Our expert guides take you to the must-see destinations as well as the undiscovered places to enjoy wonderful tours in Rome in small groups or in private tours.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="packages/3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Advanture & Tour</h3>
                <p>Our expert guides take you to the must-see destinations as well as the undiscovered places to enjoy wonderful tours in Rome in small groups or in private tours.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
    </div>
    <div class="load-more">
        <a href="package.php" class="btn">Load More</a>
    </div>
</section>

<!-----home offer section----->
<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Travelling helps us feel like our best selves because we're more willing to receive the world's many lessons, no matter their shape or size. It helps us recognise our shared humanity with others while dissipating fear or misunderstandings. After all, it's way more fun to love the world than to be afraid of it.</p>
        <a href="book.php" class="btn">Book Now</a>
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