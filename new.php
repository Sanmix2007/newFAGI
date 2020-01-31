
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Food Genes Initiative </title>
    <!--Favicon Generator-->
    <link rel="apple-touch-icon" sizes="57x57" href="images/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/fav/favicon-16x16.png">
    <link rel="manifest" href="images/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="single-page contact-page">
<header class="site-header">
    <div class="top-header-bar">
        <div class="container">
            <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                    <div class="header-bar-email">
                        MAIL: <a href="#">drugabuse365@gmail.com</a>
                    </div><!-- .header-bar-email -->

                    <div class="header-bar-text">
                        <p>PHONE: <span>+234 8102443104</span></p>
                    </div><!-- .header-bar-text -->
                </div><!-- .col -->

                <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                    <div class="donate-btn">
                        <a href="#">Donate Now</a>
                    </div><!-- .donate-btn -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .top-header-bar -->

    <div class="nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                    <div class="site-branding d-flex align-items-center">
                        <a class="d-block" href="index.html" rel="home"><img class="d-block" src="images/logo2.jpg" alt="logo"></a>
                    </div><!-- .site-branding -->

                    <nav class="site-navigation d-flex justify-content-end align-items-center">
                        <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                            <li ><a href="index.html">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="causes.html">Causes</a></li>
                            <li><a href="portfolio.html">Gallery</a></li>
                            <!--<li><a href="news.html">News</a></li>-->
                            <li class="current-menu-item"><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav><!-- .site-navigation -->
                    <br>
                    <br>

                    <?php
$conn = mysqli_connect('localhost', 'root', '', 'fagi');


if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO fagi_table (Name, Email, Message) VALUES ('$name', '$email','$message')";

$result = mysqli_query($conn, $sql);

if($result == 1){
    $update = "Hi, Thanks for contacting us at food and genes initiative. We will 
    look through your details/info and get back to you as quick as possible.";
    echo $update;
   
    
}else{
    $update = "Error try again";
}


}

?>

<div class="portfolio-wrap">
        <div class="container">
            <div class="row portfolio-container">
                <div class="col-12 col-md-6 col-lg-4 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="#"><img src="images/correct.jpg" alt=""></a>

                        <h3 class="entry-title"><a href="#"> 
                        </a></h3>
                        <h4></h4>
                    </div>
                </div>
                    
    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <h2><a class="foot-logo" href="#"><img src="images/logo2.jpg" alt=""></a></h2>

                            <p>At Food & Genes we care about the social and environmental wellbeing and we are
                                committed to ensuring that the abuse of drug substance is limited within the society.</p>

                            <ul class="d-flex flex-wrap align-items-center">
                                <!--<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>-->
                                <li><a href="www.facebook/DrugAbuseYouthSensitization"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="www.twitter.com/365days_fagi"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="www.instagram.com/365days_fagi"><i class="fa fa-dribbble"></i></a></li>
                                <!--<li><a href="#"><i class="fa fa-behance"></i></a></li>-->
                                <!--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                            </ul>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Useful Links</h2>

                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Become  a Volunteer</a></li>
                            <li><a href="#">Donate</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="causes.html">Causes</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2>Latest News</h2>

                            <ul>
                                <li>
                                    <h3><a href="#">A new cause to help</a></h3>
                                    <div class="posted-date">March 12, 2018</div>
                                </li>

                                <li>
                                    <h3><a href="#">We love to help people</a></h3>
                                    <div class="posted-date">March 12, 2018</div>
                                </li>

                                <li>
                                    <h3><a href="#">The new ideas for helping</a></h3>
                                    <div class="posted-date">March 12, 2018</div>
                                </li>
                            </ul>
                        </div><!-- .foot-latest-news -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>+234 8102443104</span></li>
                                <li><i class="fa fa-envelope"></i><span>drugabuse365@gmail.com</span></li>
                                <li><i class="fa fa-map-marker"></i><span>37,Adeyemi Street Off Arowojobe Oshodi Lagos </span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Your email">
                                <input type="submit" value="send">
                            </form><!-- .flex -->
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
    <script type='text/javascript' src='js/newjava.js'></script>
</body>
</html>