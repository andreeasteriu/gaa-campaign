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

    // Check Required Fields
    if (!empty($email) && !empty($name) && !empty($message)){
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
            $subject = 'Contact Request Form '.$name;
            $body = '<h2>Contact Request</h2>
            <h4>Name</h4><p>'.$name.'</p>
            <h4>Email</h4><p>'.$email.'</p>
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Girls Are Awesome</title>
    <link rel="stylesheet" href="https://use.typekit.net/ivf1pxl.css">
    <link rel="stylesheet" href="style.css" type="text/css">


    <meta name="description" content="Girls Are Awesome is a global platform for creative expression, portraying women who live their lives with style and strength. Through community, social initiatives and brand collaborations, GAA wants to inspire and empower women around the globe.">
    <meta name="keywords" content=" ">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>



<body>


<section id="header">

<header>
                <div class="logo">
                    <img src="assets/SVG/logo-white-1.svg"/>
                </div>
                <nav>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

        <ul class="nav-links">
        <li><a href="#about">About</a></li>
            <li><a href="#how">How to apply</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#collaborate" class="cv-btn">Collaborate</a></li>
        </ul>
        </nav>
</header>




            <video autoplay muted loop>
                <source src="assets/bg-video.mp4" type="video/mp4">
            </video>

</section>


<section class="description">
  <div class="container">
   <div></div>
   <div><h1><span class="stroke">TIME TO MAKE A </span>CHANGE.</h1></div>
   <div><p>Our goal is to help all female artists: painters, musicians, dancers, designers, photographers and all the creatives mind, to turn their passions and inspire the community.</p>
<p>We identify bold talents and brilliant people who stands for their work.</p>

<p>We recognise and encourage great talents to grow and pursue inspiring the world with their creations.</p>

<p>We strive to empower talented women and their artistic creations.</p>
  <img class="thunder-icon" src="assets/SVG/thunder-icon.svg" alt=""></div>
   <div></div>
    <div class="benefits-section">
    <span class="benefits-text">
       <h1>BENEFITS</h1>
        <p>Exposure to our community of 70,000 + users</p>
        <p>Share your story</p>
        <p>Create an impact</p>
        <p>Inspire the community</p>
    </span>
    <span class="benefits-image">

    </span>
    </div>
</div>
</section>



<section class="how-section">
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
   <div class="slide-content">
    <div class="text">CREATE A RAD PORTFOLIO!<br> SUBMIT IT!</div>
    <div class="numbertext stroke"><h1>1</h1></div>
      </div>
  </div>

  <div class="slide slide2">
  <div class="slide-content">
    <div class="text">WE'LL LINK THE PIECES TOGETHER!
SELECT APPLICANTS </div>
    <div class="numbertext stroke"><h1>2</h1></div>
      </div>
  </div>

  <div class="slide slide3">
  <div class="slide-content">
    <div class="text">Caption Text</div>
    <div class="numbertext stroke"><h1>3</h1></div>
      </div>
  </div>

 </div>
  <!-- Next buttons -->

  <a class="how-next-button"><p class="small-next">Next!</p><img src="assets/SVG/how-next-button.svg" alt=""></a>

</div>
</section>



<section class="collaborate-section">

<div class="collaborate-image">
</div>

<div class="form-wrapper">
    <h1 class="title-collaborate">COLLABORATE<br><span class="stroke">WITH US</span></h1>
<div class="form-container">
 <?php if($msg != ''): ?>
 <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
 <?php endif; ?>
  <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
     <div class="form-group">
      <label><h4>Your Name</h4></label>
      <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
      </div>

   <div class="form-group">
       <label><h4>E-mail</h4></label>
      <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
      </div>

    <div class="form-group">
        <label><h4>Tell us something about yourself</h4></label>
     <textarea name="message" class="form-control" rows="5" cols="50"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
      </div>
      <br>
      <button  type="submit" name="submit" class="btn-form"><h3>SUBMIT</h3></button>
  </form>
   </div>


</div>

</section>


<section class="featured-section">

   <img class="banner" src="assets/SVG/gaa-banner.svg" alt="">

     <div class="carousel">
    <div class="carousel-track-container">
        <ul class="carousel-track">
            <li class="carousel-slide current-slide"><img classs="carousel-image"src="assets/tess5.jpg" alt=""></li>
            <li class="carousel-slide"><img classs="carousel-image"src="assets/tess6.jpg" alt=""></li>
            <li class="carousel-slide"><img classs="carousel-image"src="assets/tess7.jpg" alt=""></li>
        </ul>
    </div>





    <div class="carousel-nav">
    <button class="carousel-button carousel-button-left">
        <img src="assets/SVG/slide-left.svg" alt="">
    </button>
    <img  class="thunder-icon-2" src="assets/SVG/thunder-icon.svg" alt="">
    <button class="carousel-button carousel-button-right">
        <img src="assets/SVG/slide-right.svg" alt="">
    </button>
     </div>
</div>

</section>

<footer>
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
        <p class="contact-content">
        <i class="fas fa-map-marker-alt"></i>
        Enghavej 40, 1647 Copenhagen </p>
        <p class="contact-content">
        <i class="fas fa-envelope"></i>
    hello@girlsareawesome.com</p>
    </div>
    </div>
</footer>







</body>
<script src="js/script.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
