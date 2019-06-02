<?php

// Message Vars
$msg = '';
$msgClass = '';
// Check for submit



if(filter_has_var(INPUT_POST, 'submit')){
    // Get Form Data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
     $message = htmlspecialchars($_POST['message']);
  if(isset($_POST['url'])){
    $url = $_POST['url'];
}


    // Check Required Fields
    if (!empty($email) && !empty($name) && !empty($message) && !empty($url)){
        //Passed
        // Check Email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            //Failed
        $msg = 'Please use a valid email';
        $msgClass = 'alert-danger';

        } else {
            //Passed
            //Recipient Email
            $toEmail = 'steriuandreea@deckadev.com';
            $subject = 'Application Form '.$name;
            $body = '<h2>Application Form</h2>
            <h4>Name</h4><p>'.$name.'</p>
            <h4>Email</h4><p>'.$email.'</p>
            <h4>Portfolio</h4><p>'.$url.'</p>
            <h4>Message</h4><p>'.$message.'</p>';

            // Email Headers
            $headers = "MIME-Version: 1.0" ."\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

            //Additional Headers
            $headers .= "From: " .$name. "<".$email.">". "\r\n";

            if(mail($toEmail, $subject, $body, $headers)){
                // Email Sent
                $msg = 'Your email has been sent';
                $msgClass = 'alert-success';
            } else {
                $msg = 'Your email was not sent';
                $msgClass = 'alert-danger';
            }

        }

    } else {
        //Failed

        $msg = 'please fill in all fields';
        $msgClass = 'alert-danger';

    }



}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <title>Girls are Awesome</title>
    <link rel="stylesheet" href="https://use.typekit.net/ivf1pxl.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta name="description" content="Girls Are Awesome is a global platform for creative expression, portraying women who live their lives with style and strength. Through community, social initiatives and brand collaborations, GAA wants to inspire and empower women around the globe.">
    <meta name="keywords" content="girls,girls are awesome,awesome,campaign,talent,showcase,girl,woman,women,artist,featured,painter,writer,dancer,ballerina">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="aos.css">
</head>



<body>


    <!--- PAGE LOADER --->

    <div class="preloader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    <!--- SCROLL PROGRESS BAR --->

    <div class="header">
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>



    <section id="header">

        <header>

            <nav>
                <div class="logo">
                    <img src="assets/SVG/logo-white-1.svg" />
                </div>
                <div id="menuToggle">
                    <input type="checkbox" />
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <ul class="nav-links">
                    <li><a href="#about">About</a></li>
                    <li><a href="#how">How to apply</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#collaborate" class="cv-btn">Collaborate</a></li>
                </ul>


            </nav>
        </header>




        <video class="video1" autoplay muted loop>
            <source src="assets/Mobile-bg-video.mp4">
        </video>
        <video class="video2" autoplay muted loop>
            <source src="assets/bg-video.mp4" type="video/mp4">
        </video>

        <div  class="campaign-slogan">
            <h2 class="campaign-message">
                Girls are Awesome Campaign
            </h2>
            <div class="messages">
                <h3 class="message-text">ELEVATE WOMEN
                </h3>
                <h3 class="message-text">INSPIRE COMMUNITY
                </h3>
                <h3 class="message-text">CREATE FUTURES
                </h3>
            </div>
        </div>

    </section>


    <section id="about" class="description">
        <div class="container">

            <!--- DIV 1 --->
            <div data-aos="fade-right">
                   <video autoplay muted loop>
                    <source src="assets/video_section_About.mp4" type="video/mp4">
                </video>
                </div>
            <!--- DIV 2 --->
            <div>
                <h1 class="change-text"><span class="stroke">TIME TO MAKE A </span>CHANGE.</h1>
            </div>
            <!--- DIV 3 --->
            <div>
                <p class="desc-text">Our goal is to help all female artists: painters, musicians, dancers, designers, photographers and all the creatives mind, to turn their passions and inspire the community.</p>
                <br>
                <p class="desc-text">We identify bold talents and brilliant people who stands for their work.</p>
                <br>
                <p class="desc-text">We recognise and encourage great talents to grow and pursue inspiring the world with their creations.</p>
                <h2 class="text-question">WHAT IS YOUR TALENT?</h2>
                <img class="thunder-icon" src="assets/SVG/thunder-icon.svg" alt="">
            </div>
            <!--- DIV 4 --->
            <div data-aos="fade-left"></div>


        </div>
    </section>



    <section id="how" class="how-section">
        <div class="how-banner">
            <section>
                <div class="group">
                    <div class="row">
                        <span>HOW</span>
                        <span>HOW</span>
                        <span>HOW</span>
                        <span>HOW</span>
                        <span>HOW</span>
                        <span>HOW</span>
                        <span>HOW</span>
                        <span>HOW</span>
                        <span>HOW</span>
                        <span>HOW</span>
                        <span>HOW</span>
                        <span>HOW</span>
                        <span>HOW</span>
                        <span>HOW</span>
                        <span>HOW</span>
                        <span>HOW</span>
                        <span class="extra-hows">HOW</span>
                        <span class="extra-hows">HOW</span>
                        <span class="extra-hows">HOW</span>
                        <span class="extra-hows">HOW</span>
                        <span class="extra-hows">HOW</span>
                        <span class="extra-hows">HOW</span>
                        <span class="extra-hows">HOW</span>
                        <span class="extra-hows">HOW</span>
                        <span class="extra-hows">HOW</span>
                        <span class="extra-hows">HOW</span>
                        <span class="extra-hows">HOW</span>
                        <span class="extra-hows">HOW</span>
                        <span class="extra-hows">HOW</span>
                        <span class="extra-hows">HOW</span>
                        <span class="extra-hows">HOW</span>
                    </div>
                </div>
            </section>
        </div>




        <!-- Slideshow container -->
        <div class="wrap">

            <!-- Full-width images with number and caption text -->
            <div id="slider">

                <div class="slide slide1">
                    <div data-aos="fade-up" class="slide-content">
                        <div class="text">CREATE A RAD PORTFOLIO &<br> SUBMIT IT!</div>
                        <div class="numbertext stroke">
                            <h1>1</h1>
                        </div>
                    </div>
                </div>

                <div class="slide slide2">
                    <div class="slide-content">
                        <div class="text">WE'LL LINK THE PIECES TOGETHER!<br>
                            SELECT APPLICANTS </div>
                        <div class="numbertext stroke">
                            <h1>2</h1>
                        </div>
                    </div>
                </div>

                <div class="slide slide3">
                    <div class="slide-content">
                        <div class="text">Caption Text</div>
                        <div class="numbertext stroke">
                            <h1>3</h1>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Next buttons -->
            <div>
            <a class="how-next-button">
                <p class="small-next">Next</p><img src="assets/SVG/how-next-button.svg" alt="">
            </a>
            </div>
        </div>
    </section>


    <section class="benefits-section">
        <div class="how-banner">
            <section>
                <div class="group">
                    <div class="row">
                        <span class="black-text-benefits">BENEFITS</span>
                        <span class="black-text-benefits">BENEFITS</span>
                        <span class="black-text-benefits">BENEFITS</span>
                        <span class="black-text-benefits">BENEFITS</span>
                        <span class="black-text-benefits">BENEFITS</span>
                        <span class="black-text-benefits">BENEFITS</span>
                        <span class="black-text-benefits">BENEFITS</span>
                        <span class="black-text-benefits">BENEFITS</span>
                        <span class="black-text-benefits">BENEFITS</span>
                        <span class="black-text-benefits">BENEFITS</span>
                        <span class="black-text-benefits">BENEFITS</span>
                        <span class="black-text-benefits">BENEFITS</span>
                        <span class="black-text-benefits">BENEFITS</span>
                        <span class="black-text-benefits">BENEFITS</span>
                        <span class="extra-hows black-text-benefits">BENEFITS</span>
                        <span class="extra-hows black-text-benefits">BENEFITS</span>
                        <span class="extra-hows black-text-benefits">BENEFITS</span>
                        <span class="extra-hows black-text-benefits">BENEFITS</span>


                    </div>
                </div>
            </section>
        </div>

        <div  class="benefits-text">
            <div class="benefits-center-text">
                <p class="p-benefits"><img src="assets/SVG/bullet-red.svg" alt="">Let your work speak</p>
                <p class="p-benefits"><img src="assets/SVG/bullet-red.svg" alt="">Share your story</p>
                <p class="p-benefits"><img src="assets/SVG/bullet-red.svg" alt="">Create an impact</p>
                <p class="p-benefits"><img src="assets/SVG/bullet-red.svg" alt="">Inspire the community</p>
                <img class="thunder-benefits" src="assets/SVG/thunder-icon.svg" alt="">
            </div>
        </div>
        <div data-aos="fade-right" class="benefits-image">
            <img src="assets/SVG/family-girl.svg" alt="">
        </div>
    </section>

    <section id="collaborate" class="collaborate-section">

        <div data-aos="fade-right" class="collaborate-image">
            <img src="assets/BOLD-LETTERS-02.png" alt="">
        </div>

        <div class="form-wrapper">
            <h1 class="title-collaborate">COLLABORATE<br><span class="stroke-collaborate">WITH US</span></h1>


            <div class="form-container">
                <?php if($msg != ''): ?>
                <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
                <?php endif; ?>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                    <div class="form-group">
                        <label>
                            <h4>Your Name</h4>
                        </label>
                        <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                    </div>

                    <div class="form-group">
                        <label>
                            <h4>E-mail</h4>
                        </label>
                        <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                    </div>

                    <div class="form-group">
                        <label>
                            <h4>Link to your online portfolio</h4>
                        </label>
                        <input type="text" name="url" class="form-control" value="<?php echo isset($_POST['url']) ? $url : ''; ?>">
                    </div>

                    <div class="form-group">
                        <label>
                            <h4>Tell us something about yourself</h4>
                        </label>
                        <textarea name="message" class="form-control" rows="5" cols="50"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn-form">
                        <h3>Submit</h3>
                    </button>
                </form>
            </div>


        </div>

    </section>


    <section class="featured-section">

        <div class="how-banner">
            <section>
                <div class="group">
                    <div class="row">
                        <span class="black-text-benefits">FEATURED</span>
                        <span class="black-text-benefits">FEATURED</span><span class="black-text-benefits">FEATURED</span><span class="black-text-benefits">FEATURED</span><span class="black-text-benefits">FEATURED</span><span class="black-text-benefits">FEATURED</span><span class="black-text-benefits">FEATURED</span><span class="black-text-benefits">FEATURED</span><span class="black-text-benefits">FEATURED</span><span class="black-text-benefits">FEATURED</span>
                        <span class="black-text-benefits">FEATURED</span>
                        <span class="black-text-benefits">FEATURED</span>
                        <span class="extra-hows black-text-benefits">FEATURED</span>
                        <span class="extra-hows black-text-benefits">FEATURED</span>
                        <span class="extra-hows black-text-benefits">FEATURED</span>
                        <span class="extra-hows black-text-benefits">FEATURED</span>



                    </div>
                </div>
            </section>
        </div>

        <div data-aos="fade-up" class="carousel">
            <div class="carousel-track-container">
                <ul class="carousel-track">

                    <li class="carousel-slide current-slide">
                        <img classs="carousel-image" src="assets/tess1.png" alt="">
                        <h2 class="carousel-text">"Quote an awesome girl"</h2>
                    </li>

                    <li class="carousel-slide">
                        <img classs="carousel-image" src="assets/tess2.png" alt="">
                        <h2 class="carousel-text">"that said something"</h2>
                    </li>

                    <li class="carousel-slide">
                        <img classs="carousel-image" src="assets/tess3.png" alt="">
                        <h2 class="carousel-text">"something awesome"</h2>
                    </li>

                </ul>
            </div>


            <div class="carousel-nav">
                <button class="carousel-button carousel-button-left">
                    <img src="assets/SVG/slide-left.svg" alt="">
                </button>
                <img class="thunder-icon-2" src="assets/SVG/thunder-icon.svg" alt="">
                <button class="carousel-button carousel-button-right">
                    <img src="assets/SVG/slide-right.svg" alt="">
                </button>
            </div>
        </div>

    </section>

    <footer id="contact">
        <div class="right">
            <img src="assets/SVG/logo-white-2.svg" alt="">
            <div class="fabs">
                <a href="https://www.facebook.com/girlsawesome"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.linkedin.com/company/girls-are-awesome/"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com/girlsareawesome/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="center">
            <img class="thunder-icon-white" src="assets/SVG/thunder-icon-white.svg" alt="">
            <p class="copyrights"> © Girls Are Awesome 2019</p>
        </div>
        <div class="left">
            <div class="contact-center">
                <p class="contact-content"><a href="https://goo.gl/maps/fdBzFohijxSALbTG7">
                        <i class="fas fa-map-marker-alt"></i>
                        Enghavej 40, 1647 Copenhagen</a> </p>
                <p class="contact-content"><a href="mailto:hello@girlsareawesome.com">
                        <i class="fas fa-envelope"></i>
                        hello@girlsareawesome.com</a></p>
            </div>
        </div>
    </footer>







</body>
<script src="js/script.js"></script>
<script src="js/aos.js"></script>
<script>
    AOS.init({
      offset: 200,
      duration: 1000,
        easing: 'ease-in-sine',
      delay: 150,
    disable: 'mobile',
    });
  </script>

</html>
