<!DOCTYPE html>
<html lang="en">
<head>
<title>BELMONT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/bt.css">
<link rel="stylesheet" href="./css/Lato.css">
<link rel="stylesheet" href="./css/font-awesome.min.css">
<link rel="stylesheet" href="./css/sweetalert.css">
<script src="./js/sweetalert.js"></script>
</a>
</head>
<body>
<?php
error_reporting(0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit']))
{
  require 'vendor/autoload.php';

  $mail = new PHPMailer(true);

  try {
    $mail->SMTPDebug = 0;								
    $mail->isSMTP();										
    $mail->Host	 = 'smtp.gmail.com;';				
    $mail->SMTPAuth = true;							
    $mail->Username = 'yazarvale@gmail.com';				
    $mail->Password = 'kfclevphglfzhgmh';					
    $mail->SMTPSecure = 'tls';							
    $mail->Port	 = 587;

    $mail->setFrom('yazarvale@gmail.com', 'BELMONT Website');	
    $mail->addAddress('yazar.vr46@gmail.com', $_POST['Name']);
    
    $mail->isHTML(true);
    $mail->Subject = 'Mail Received from BELMONT Website User';
    $mail->Body = '<h1>This is '.$_POST['Name'].'</h1><p>'.$_POST['Message'].'</p>Reply to: '. $_POST['Email'];
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->send();
    echo "<script>Swal.fire({
      title: 'Success!',
      text: 'Mail has been sent successfully!',
      icon: 'success',
      confirmButtonText: 'OK'
    });</script>";
  } catch (Exception $e) {
    echo "<script>Swal.fire({
    title: 'Error!',
    text: 'Message could not be sent!',
    icon: 'error',
    confirmButtonText: 'OK'
  });</script>";
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
  /*$to = "yazar.vr46@gmail.com";
  $subject = "This is subject";

  $message = "";
  if(isset($_POST['Name']))
    $message .= "<h1>This is ".$_POST['Name']."</h1>";
  if(isset($_POST['Message']))
    $message .= $_POST['Message']."<BR/>";
  if(isset($_POST['Email']))
    $message .= "Reply to: ". $_POST['Email'];

  $header = "From:yazarvale@gmail.com \r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html\r\n";

  $retval = mail ($to,$subject,$message,$header);

  if( $retval == true ) {
    echo "<script>Swal.fire({
      title: 'Success!',
      text: 'Mail sent successfully...!',
      icon: 'success',
      confirmButtonText: 'OK'
    });</script>";
  } else {
  echo "<script>Swal.fire({
    title: 'Error!',
    text: 'Message could not be sent...!',
    icon: 'error',
    confirmButtonText: 'OK'
  });</script>";
  }*/
}
?>
<!-- Navbar -->
<div class="bt-top">
  <div id="navMenu" class="bt-bar bt-white bt-bar-container">
    <a class="bt-bar-item bt-button bt-padding-large bt-hide-medium bt-hide-large bt-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="bt-bar-item bt-padding-small"><img src="./img/logo.png" style="width:162px; height:38px;"/></a>
    <a id="home" href="#" class="bt-bar-item bt-button bt-padding-large bt-hide-small subTit bt_btn_active" onclick="menuClrFunc(this.id)">HOME</a>
    <a id="about" href="#aboutSec" class="bt-bar-item bt-button bt-padding-large bt-hide-small subTit bt_btn_default" onclick="menuClrFunc(this.id)">ABOUT US</a>
    <a id="products" href="#productsSec" class="bt-bar-item bt-button bt-padding-large bt-hide-small subTit bt_btn_default" onclick="menuClrFunc(this.id)">PRODUCTS</a>
    <a id="contact" href="#contactSec" class="bt-bar-item bt-button bt-padding-large bt-hide-small subTit bt_btn_default" onclick="menuClrFunc(this.id)">CONTACT US</a>
    <div class="bt-sm-block">
      <a href="https://www.facebook.com/belmonttailors/" target="_blank"><i class="icon fa fa-facebook white-icon bt-padding-small"></i></a>
      <a href="https://www.instagram.com/belmonttailors/" target="_blank"><i class="icon fa fa-instagram white-icon bt-padding-small"></i></a>
      <a href="https://www.youtube.com/@belmonttailors2451" target="_blank"><i class="icon fa fa-youtube white-icon bt-padding-small"></i></a>
     </div>
  </div>
    
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="bt-bar-block bt-white bt-hide bt-hide-large bt-hide-medium bt-top" style="margin-top:46px">
  <a href="#" class="bt-bar-item bt-button bt-padding-large subTit" onclick="myFunction()">HOME</a>
  <a href="#aboutSec" class="bt-bar-item bt-button bt-padding-large subTit" onclick="myFunction()">ABOUT US</a>
  <a href="#productsSec" class="bt-bar-item bt-button bt-padding-large subTit" onclick="myFunction()">PRODUCTS</a>
  <a href="#contactSec" class="bt-bar-item bt-button bt-padding-large subTit" onclick="myFunction()">CONTACT US</a>
</div>

<!-- Page content -->
<div class="bt-content" style="max-width:2000px;margin-top:46px" id="homeSec">
  <div class="whats-float">
      <a href="https://api.whatsapp.com/send?phone=9876543210&text=Hai"
         target="_blank">
          <i class="fa fa-whatsapp"></i><span>WhatsApp<br><small>+91 98765 43210</small></span>
      </a>
  </div>
  <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<!-- Automatic Slideshow Images -->
  <div class="mySlides fade bt-display-container bt-center">
    <div class="numbertext">1 / 5</div>
    <img src="./img/home1.jpg" class="homeSlide">
  </div>
  <div class="mySlides fade bt-display-container bt-center">
    <div class="numbertext">2 / 5</div>
    <img src="./img/home2.jpg" class="homeSlide">
  </div>
  <div class="mySlides fade bt-display-container bt-center">
    <div class="numbertext">3 / 5</div>
    <img src="./img/home3.jpg" class="homeSlide">
  </div>
  <div class="mySlides fade bt-display-container bt-center">
    <div class="numbertext">4 / 5</div>
    <img src="./img/home21.jpg" class="homeSlide">
  </div>
  <div class="mySlides fade bt-display-container bt-center">
    <div class="numbertext">5 / 5</div>
    <img src="./img/home22.jpg" class="homeSlide">
  </div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- The dots/circles -->
<div style="text-align:center; padding-top: 10px;">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
<span class="dot" onclick="currentSlide(4)"></span>
<span class="dot" onclick="currentSlide(5)"></span>
</div>
  <div class="bt-container bt-content bt-padding-32">
    <div class="bt-row">
      <div class="bt-col m6 bt-padding-large bt-center">
        <img src="./img/home4.jpg" class="bt-round bt-image bt-opacity-off" alt="" width="226" height="261">
      </div>

      <div class="bt-col m6 bt-padding-large">
        <h1 class="bt-text-black mainTit">DISCOVER TRUE QUALITY</h1>
        <span class="subTitSpan">HANDCRAFTED SUIT</span>
        <p>We provide you with great suits that befit you and your Lifestyle. Our suits are made from the highest quality fabrics and guaranteed to give you functionality, durability and comfort. Our skilled master tailors handle all of our cutting and sewing, ensuring precision in all production processes and paying attention to the details. Come to us and choose the best suit for your lifestyle.</p>
        <p class="bt-left"><a href="#about" class="bt-button bt-round bt-padding-large bt-large" style="color: #ffffff; background-color: #bf9668;">LEARN ABOUT US</a></p>
      </div>
    </div>
  </div>
  <!-- Team Container -->
  <div class="bt-content bt-container bt-padding-32 bt-center" style="background-color: #f2f2f2;">
    <span class="prodSpan">OUR SERVICES</span><br><br>

    <div class="bt-row">

    <div class="bt-quarter bt-padding-small">
      <img src="./img/home5.jpg" alt="" class="bt-circle circleImg">
      <h3 class="mainTit">CUSTOM TAILORING</h3>
      <p>You can choose all details you want, from buttons to pockets and lapels, we can do everything</p>
    </div>

    <div class="bt-quarter bt-padding-small">
      <img src="./img/home6.jpg" alt="" class="bt-circle circleImg">
      <h3 class="mainTit bt-serv-fab">FABRICS</h3>
      <p>Each our suit is made to your exact measurements and fit your specific body type</p>
    </div>

    <div class="bt-quarter bt-padding-small">
      <img src="./img/home7.jpg" alt="" class="bt-circle circleImg">
      <h3 class="mainTit">READY MADE SUITS</h3>
      <p>We have a wide range of bow ties which fit everyday fashion as well as special occasions</p>
    </div>

    <div class="bt-quarter bt-padding-small">
      <img src="./img/home8.jpg" alt="" class="bt-circle circleImg">
      <h3 class="mainTit">WEDDING SERVICES</h3>
      <p>You and your groomsmen deserve the sharpest suits. Let us help you create suits for your day.</p>
    </div>

    </div>
  </div>
  
  <div class="bt-content bt-display-container bt-wide ">
    <img class="bt-image" src="./img/home9.jpg" alt="" style="width:100%; height:260px;">
    <div class="bt-display-left bt-text-white bt-col m8 bt-padding">
      <h1 class="bt-text-white mainTit">WE DESIGN, YOU RULE</h1>
      <p class="bt-text-white spanTitle">−−− Providing you with maximum Level of comfort & confidence in every suit!</p>
    </div>
    <a class="bt-display-right bt-button bt-round bt-large bt-hover-opacity-off" style="color: #ffffff; background-color: #bf9668; margin-right: 16px;" href="#contact">CONTACT US</a>
  </div>
  <div class="bt-content bt-container bt-padding-32">
    <div class="bt-row">
      <div class="bt-col m6 bt-padding-large bt-video-link">
        <img src="./img/home10.jpg" class="bt-round bt-image bt-opacity-off" alt="" width="500" height="282">
        <a href="https://www.youtube.com/watch?v=PzzNkT3jJd0" target="_blank"><i class="fa fa-youtube-play fa-5x bt-video-icon"></i></a>
      </div>

      <div class="bt-col m6 bt-padding-large">
        <h1 class="bt-text-black mainTit">BELMONT IN THE MEDIA</h1>
        <span class="subTitSpan">PRESS & ARTICLES</span>
        <p>We invite you to follow us on our social media channels for the latest news and event updates! Be kept up to date with the freshest ideas of Peter Mason and his talented team. No matter where you are in the world.</p>
        <p class="bt-left"><a href="https://www.youtube.com/@belmonttailors2451" class="bt-button bt-round bt-padding-large bt-large" style="color: #ffffff; background-color: #bf9668;">WATCH OUR VIDEOS</a></p>
      </div>
    </div>
  </div>
  <!-- Container (Portfolio Section) -->
<div class="bt-content bt-container bt-padding-32" id="">
  <h3 class="bt-center mainTit">LOOK BOOK</h3><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="bt-row-padding bt-center">
    <div class="bt-col m4">
      <img src="./img/home11.jpg" class="bt-lb-img">
    </div>

    <div class="bt-col m4">
      <img src="./img/home12.jpg" class="bt-lb-img">
    </div>

    <div class="bt-col m4">
      <img src="./img/home13.jpg" class="bt-lb-img">
    </div>
  </div>
</div>
  <!-- The About Us Section -->
  <div class="bt-container bt-content bt-center bt-padding-32" id="aboutSec">
    <h2 class="bt-wide mainTit">ABOUT US</h2>
    <header class="bt-display-container bt-wide bt-padding-32">
      <div style="width:100%; height:250px; background-color: black;">
        <img class="bt-display-right bt-image" src="./img/about1.jpg" alt="" style="width:auto; height:250px;">
        <div class="bt-display-left bt-col m9 bt-text-white bt-padding-large">
          <p>Since 1967. Belmont has cherished the needs of the customers. We carry values and maintain culture throughout our journey. We believe tailoring is an Art. Measurement is an Art, execution and finishing is an Art.</p>
        </div>
      </div>
    </header>
  </div>
  <div class="bt-content">

    <div class="bt-row bt-margin">

      <div class="bt-third">
        <img src="./img/about2.jpg" class="aboutImg">
      </div>
      <div class="bt-twothird bt-container">
        <h2 class="mainTit">N.M JAINUL AUBIDEEN</h2>
        <span class="subTitle">−−− Founder</span>
        <p>Our founder Mr. N. M. Jainul Aubideen is a perfect tailor with integrity and self-confidence. He always focuses on perfection and time. He was driven by the policy " DO IT NOW ".</p>
      </div>

      </div>
      <div class="bt-row bt-margin">

      <div class="bt-third">
        <img src="./img/about3.jpg" class="aboutImg">
      </div>
      <div class="bt-twothird bt-container">
        <h2 class="mainTit">ABDUL KAREEM SAKLA</h2>
        <span class="subTitle">−−− CEO</span>
        <p>Mr. Abdul Kareem Sakla, the elder son, joined BELMONT after graduation. A person with an artistic view which insights best dressing sense. He is a Problem solver and a consultant in customized tailoring. He is a Rotarian and a social worker.</p>
      </div>

      </div>
      <div class="bt-row bt-margin">

      <div class="bt-third">
        <img src="./img/about4.jpg" class="aboutImg">
      </div>
      <div class="bt-twothird bt-container">
        <h2 class="mainTit">MOHAMED HASAN</h2>
        <span class="subTitle">−−− Chairman</span>
        <p>Mr. Mohamed Hasan the younger son joined BELMONT after finishing civil engineering. He gives the finest attention to the procurement of fabrics and materials. He ensures that all garments are engineered with the specific need of the customers. He is a member of the Lions Club and Civil Engineers Association of India.</p>
      </div>

    </div>
  </div>
  <!-- Automatic Slideshow Images -->
  <div class="bt-content">
    <!-- Slideshow container -->
<div class="slideshow-container1">
  <!-- Full-width images with number and caption text -->
  <div class="mySlides1 fade">
    <div class="numbertext">1 / 6</div>
    <img src="./img/about5.jpg" class="homeSlide1">
    <div class="text bt-center bt-display-middle bt-container bt-text-white bt-padding-16"><h2 class="mainTit">TESTIMONIALS</h2>
      <h2 class="subTitle">“</h2>
      <p>I came here for stitching 3 piece suit on velvet ,these guys are doing amazing job at affordable price, compare to other brands Belmont is far better option and their tailoring skill is next level.</p>
      <span class="subTitle">Jaya Raju </span></div>
  </div>

  <div class="mySlides1 fade">
    <div class="numbertext">2 / 6</div>
    <img src="./img/about5.jpg" class="homeSlide1">
    <div class="text bt-center bt-display-middle bt-container bt-text-white bt-padding-16"><h2 class="mainTit">TESTIMONIALS</h2>
      <h2 class="subTitle">“</h2>
      <p>Amazing ... I not worn a tailor made suit since forty years....my company QUEEN'S HOTEL got me couple of suits stitched ....Miracle....I thought I was born with that suit.. great work BELMONT....keep up your great job....</b></p>
      <span class="subTitle">J Ravi John </span></div>
  </div>

  <div class="mySlides1 fade">
    <div class="numbertext">3 / 6</div>
    <img src="./img/about5.jpg" class="homeSlide1">
    <div class="text bt-center bt-display-middle bt-container bt-text-white bt-padding-16"><h2 class="mainTit">TESTIMONIALS</h2>
      <h2 class="subTitle">“</h2>
      <p>I've been their customer for 15+ years on and off. They never failed to meet the expectations. Recently went to purchase and tailor my wedding suit and the output was fully satisfactory. Their warmth approach and the fabrics they have will make you feel very satisfied especially when the ready made sizes are not fitting well for you. I'm totally satisfied with their service and highly recommend to anyone. &#128522;</p>
      <span class="subTitle">Mohaan Balakrishnan</span> </div>
  </div>

<div class="mySlides1 fade">
  <div class="numbertext">4 / 6</div>
  <img src="./img/about5.jpg" class="homeSlide1">
  <div class="text bt-center bt-display-middle bt-container bt-text-white bt-padding-16"><h2 class="mainTit">TESTIMONIALS</h2>
      <h2 class="subTitle">“</h2>
      <p>Wow &#x1F929; I got my best wedding tuxedo suit from Belmont. I am so delighted and impressed in your fabric and fitting! Honestly my first impression with Belmont was not so great however they proved me wrong with their professionalism...more than me they really put lots of extra effort to make my wedding suit better, which I never expected. Later I realised I choose the best people for my wedding. My wife has told me how smart I look in my suit that I have got it from Belmont, as well as receiving many other compliments on the quality and fit from friends and family! I am so happy that I have found you...and I will continue with Belmount for all my best occasions! One of the best tailors especially for wedding suit.Thank you so much! &#128522;</p>
      <span class="subTitle">Albert Levay</span></div>
</div>

<div class="mySlides1 fade">
  <div class="numbertext">5 / 6</div>
  <img src="./img/about5.jpg" class="homeSlide1">
  <div class="text bt-center bt-display-middle bt-container bt-text-white bt-padding-16"><h2 class="mainTit">TESTIMONIALS</h2>
      <h2 class="subTitle">“</h2>
      <p>When you think of a well perfected tailored Suit it's them. Had the most amazing experience. Suits are fitted perfectly and brings out the dapper you.
        Without a second thought this would be the go to place for any Custom fit cloths.
        Thank you Belmont. You guys are great !!!!!</p>
      <span class="subTitle">Vicky Jeyakkan </span></div>
</div>

<div class="mySlides1 fade">
  <div class="numbertext">6 / 6</div>
  <img src="./img/about5.jpg" class="homeSlide1">
  <div class="text bt-center bt-display-middle bt-container bt-text-white bt-padding-16"><h2 class="mainTit">TESTIMONIALS</h2>
      <h2 class="subTitle">“</h2>
      <p>The dress perfectly suits me. Never felt so happy wearing a dress because it fits you so genuinely and adds a value to your own self.
        I recommend and give Belmont a 5 star and it is the maximum that is given here. Way to go Shakla</p>
      <span class="subTitle">prince faraqualeeth </span></div>
</div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides1(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides1(1)">&#10095;</a>
  </div>

  <!-- The dots/circles -->
  <div style="text-align:center; padding-top: 10px;">
  <span class="dot1" onclick="currentSlide1(1)"></span>
  <span class="dot1" onclick="currentSlide1(2)"></span>
  <span class="dot1" onclick="currentSlide1(3)"></span>
  <span class="dot1" onclick="currentSlide1(4)"></span>
  <span class="dot1" onclick="currentSlide1(5)"></span>
  <span class="dot1" onclick="currentSlide1(6)"></span>
  </div>
  
</div>
  <!-- The Products Section -->
  <div class="bt-container bt-content bt-padding-32 bt-center" style="max-width:1000px" id="productsSec">
    <h2 class="bt-wide bt-center mainTit">PRODUCTS</h2>
    <p class="subTit">NOTHING CAN GO WRONG WHEN EVERY ASPECT IS PERSONALISED FOR YOUR UNIQUE PERSONALITY AND THAT WHICH WOULD FIT YOU RIGHT</p>
    <div class="bt-row-padding bt-center">
      <div class="bt-col m4">
        <img src="./img/tuxedo.jpg" style="width:auto; height: 250px;" class="" alt=""><br/>
        <span class="prodSpan">TUXEDO</span>
      </div>

      <div class="bt-col m4">
        <img src="./img/suits.jpg" style="width:auto; height: 250px;" class="" alt=""><br/>
        <span class="prodSpan">SUITS</span>
      </div>

      <div class="bt-col m4">
        <img src="./img/bandhgala.jpg" style="width:auto; height: 250px;" class="" alt=""><br/>
        <span class="prodSpan">BANDHGALA</span>
      </div>
    </div>
    <div class="bt-row-padding bt-center">
      <div class="bt-col m4">
        <img src="./img/sherwani.jpg" style="width:auto; height: 250px;" class="" alt=""><br/>
        <span class="prodSpan">SHERWANI</span>
      </div>

      <div class="bt-col m4">
        <img src="./img/bandhi.jpg" style="width:auto; height: 250px;" class="" alt=""><br/>
        <span class="prodSpan">BANDHI</span>
      </div>

      <div class="bt-col m4">
        <img src="./img/trousers.jpg" style="width:auto; height: 250px;" class="" alt=""><br/>
        <span class="prodSpan">TROUSERS</span>
      </div>
    </div>
    <div class="bt-row-padding bt-center">
      <div class="bt-col m6">
        <img src="./img/shirts.jpg" style="width:auto; height: 200px;" class="" alt=""><br/>
        <span class="prodSpan">SHIRTS</span>
      </div>

      <div class="bt-col m6">
        <img src="./img/trouzers.jpg" style="width:auto; height: 200px;" class="" alt=""><br/>
        <span class="prodSpan">TROUSERS</span>
      </div>
    </div>
  </div>
  <div class="bt-content bt-container bt-padding-32 bt-center" id="">
    <img src="./img/products1.jpg" class="fullWidth" alt="">
    <h2 class="bt-wide bt-center mainTit">FABRICS</h2>
    <p class="subTit">QUALITY FABRIC IS IN OUR DNA. WE SOURCE FABRICS FROM SOME OF THE BEST MILLS ACROSS WORLD OUR CRAFTSMANSHIP MAKE FABRICS THAT LAST YOU A LIFETIME.</p><br>
    <div class="bt-row-padding bt-center">
      <div class="bt-col m4">
        <img src="./img/fabrics1.jpg" class="bt-lb-img" alt="">
      </div>

      <div class="bt-col m4">
        <img src="./img/fabrics2.jpg" class="bt-lb-img" alt="">
      </div>

      <div class="bt-col m4">
        <img src="./img/fabrics3.jpg" class="bt-lb-img" alt="">
      </div>
    </div><br/>
    <div class="bt-row-padding bt-center">
      <div class="bt-col m4">
        <img src="./img/fabrics4.jpg" class="bt-lb-img" alt="">
      </div>

      <div class="bt-col m4">
        <img src="./img/fabrics5.jpg" class="bt-lb-img" alt="">
      </div>

      <div class="bt-col m4">
        <img src="./img/fabrics6.jpg" class="bt-lb-img" alt="">
      </div>
    </div><br/>
    <marquee behavior="scroll" direction="left" scrollamount="5"><img style="width:auto; height: 50px;" src="./img/dolce.png" /> &nbsp; <img style="width:auto; height: 50px;" src="./img/linenclub.jpg" /> &nbsp; <img style="width:auto; height: 50px;" src="./img/raymond.jpg" /> &nbsp; <img style="width:auto; height: 50px;" src="./img/roger.jpg" /> &nbsp; <img style="width:auto; height: 50px;" src="./img/soktas.jpg" /> &nbsp; <img style="width:auto; height: 50px;" src="./img/tessi.jpg" /></marquee>
  </div>
  <!-- The Contact Section -->
  <div class="bt-container bt-content bt-padding-32" id="contactSec" style="background-color: #f2f2f2;">
    <h2 class="bt-wide mainTit bt-center">CONTACT US</h2>
    <p class="subTit bt-center">We offer premium custom tailored suits for men who see the value in looking gallant.</p>
    <div class="bt-row">
      <div class="bt-col m6 bt-padding">
        <form name="mail" id="mail" method="post">
          <input class="bt-input bt-border" type="text" placeholder="Your Name" required name="Name"><br>
          <input class="bt-input bt-border" type="text" placeholder="Your Email Address" required name="Email"><br>
          <textarea class="bt-input bt-border" style="resize: none;" placeholder="Your Message" required name="Message" rows="5"></textarea>
          <button class="bt-button bt-section bt-right bt-round bt-padding-large bt-large" style="color: #ffffff; background-color: #bf9668;" name="submit" type="submit">SEND</button>
        </form>
      </div>
      <div class="bt-col m6 bt-padding bt-medium">
        <div class="responsive-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1589.2455787087667!2d78.68615865062225!3d10.823826368226444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf5aef159d1ab%3A0xee8d058d4eaf70f5!2sBelmont!5e0!3m2!1sen!2sus!4v1693908409709!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="bt-row">
          <div class="bt-col m1"><i class="fa fa-map-marker"></i></div>
          <div class="bt-col m11">87/1, North East Extn, Shastri Rd, Thillai Nagar, Tiruchirappalli, Tamil Nadu 620018</div>
        </div>
        <div class="bt-row">
          <div class="bt-col m1"><i class="fa fa-clock-o"></i></div>
          <div class="bt-col m11">Monday - Friday:10 am - 9 pm<br>Sunday 11 am - 8pm</div>
        </div>
        <div class="bt-row">
          <div class="bt-col m1"><i class="fa fa-phone"></i></div>
          <div class="bt-col m11">0431-4542113</div>
        </div>
        <div class="bt-row">
          <div class="bt-col m1"><i class="fa fa-envelope"></i></div>
          <div class="bt-col m11"><a href="mailto:shakla.belmont@gmail.com">shakla.belmont@gmail.com</a></div>
        </div>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="bt-container bt-padding bt-center bt-opacity bt-light-grey bt-xlarge">
  <p class="bt-medium">Belmont Tailors @ 2023 All Rights Reserved.</p>
</footer>

<script>
/*var myIndex1 = 0;
carousel1();

function carousel1() {
  var j;
  var y = document.getElementsByClassName("mySlides1");
  for (j = 0; j < y.length; j++) {
    y[j].style.display = "none";  
  }
  myIndex1++;
  if (myIndex1 > y.length) {myIndex1 = 1}    
  y[myIndex1-1].style.display = "block";  
  setTimeout(carousel1, 4000);    
}*/

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("bt-show") == -1) {
    x.className += " bt-show";
  } else { 
    x.className = x.className.replace(" bt-show", "");
  }
}

function menuClrFunc(ele) {
  if (document.querySelector('.bt_btn_active'))
    document.querySelector('.bt_btn_active').classList.replace('bt_btn_active', 'bt_btn_default');

  var x = document.getElementById(ele);
  if (x.className.indexOf("bt_btn_active") == -1) {
    x.className = x.className.replace('bt_btn_default', 'bt_btn_active');
  }
}

window.addEventListener('scroll', () => {
  let y = Math.round(1 + (window.scrollY || window.pageYOffset) / 150);
  console.log(y);
  if (document.querySelector('.bt_btn_active'))
    document.querySelector('.bt_btn_active').classList.replace('bt_btn_active', 'bt_btn_default');
  if(y==1) {
    document.getElementById('navMenu').classList.remove('bt-card');
  } else {
    document.getElementById('navMenu').classList.add('bt-card');
  }
  if ((y>=1) && (y<17)) {
    var x = document.getElementById("home");
    if (x.className.indexOf("bt_btn_active") == -1) {
      x.className = x.className.replace('bt_btn_default', 'bt_btn_active');
    }
  } else if((y>=17) && (y<30)) {
    var x = document.getElementById("about");
    if (x.className.indexOf("bt_btn_active") == -1) {
      x.className = x.className.replace('bt_btn_default', 'bt_btn_active');
    }
  } else if((y>=30) && (y<43)) {
    var x = document.getElementById("products");
    if (x.className.indexOf("bt_btn_active") == -1) {
      x.className = x.className.replace('bt_btn_default', 'bt_btn_active');
    }
  } else if(y>=43) {
    var x = document.getElementById("contact");
    if (x.className.indexOf("bt_btn_active") == -1) {
      x.className = x.className.replace('bt_btn_default', 'bt_btn_active');
    }
  }
});

let slideIndex = 1;
showSlides(slideIndex);

// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1; showSlides(slideIndex = 1);}    
  x[myIndex-1].style.display = "block";  
  showSlides(slideIndex += 1);
  setTimeout(carousel, 5000);    
}

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

let slideIndex1 = 1;
showSlides1(slideIndex1);

// Next/previous controls
function plusSlides1(n) {
  showSlides1(slideIndex1 += n);
}

// Thumbnail image controls
function currentSlide1(n) {
  showSlides1(slideIndex1 = n);
}

function showSlides1(n) {
  let i;
  let slides1 = document.getElementsByClassName("mySlides1");
  let dots1 = document.getElementsByClassName("dot1");
  if (n > slides1.length) {slideIndex1 = 1}
  if (n < 1) {slideIndex1 = slides1.length}
  for (i = 0; i < slides1.length; i++) {
    slides1[i].style.display = "none";
  }
  for (i = 0; i < dots1.length; i++) {
    dots1[i].className = dots1[i].className.replace(" active", "");
  }
  slides1[slideIndex1-1].style.display = "block";
  dots1[slideIndex1-1].className += " active";
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>
