<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<link href="css/reset.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/lightbox.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/main.css" media="screen" rel="stylesheet" type="text/css" />
<link href="images/oak-logo.png" rel="shortcut icon" />

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/jquery.slides.min.js"></script>
<script src="js/lightbox-2.6.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<script>
    $(function(){
      $("#slides").slidesjs({
        width: 700,
        height: 393,
        navigation: false,
        pagination: false
      });
    });
  </script>

</head>

<div class="center-wrap">

<body>
<div class="content-wrap" class="group">
  <div class="content" class="group">

<div id="slogan">Let a 
  <span id="slogan-mod">PROFESSIONAL</span>
  work for you!  
</div>

<div class="clearBoth"></div>

<div class="line-wrap">
  <hr></hr>
</div>

<div class="menu-wrap">
  <div id="menu">
    <ul>
      <li><a href="index.php" class="home">HOME</a></li>
      <li><a class="about" href="about.php">ABOUT</a></li>
      <li><a class="services" href="services.php">SERVICES</a></li>
      <li><a class="photos" href="photos.php">PHOTOS</a></li>
      <li><a class="contact" href="contact.php">CONTACT US</a></li>
    </ul>
  </div>
</div>

  <div class="phone-banner-wrap">
    <div class="phone-banner">
      CALL US!<br />
      <span class="time">24/7</span><br />
      <span class="phonenumber">(865) 577-3830</span><br />
      <div class="licensed">LICENSED<br /><hr style="width:34%;" />BONDED<br /><hr style="width:34%;" />INSURED</div>
    </div>
  </div>

<div class="clearBoth"></div>

<div class="logo-wrap">
  <div class="logo home">
    <a href="index.php"><img src="images/oak-logo.png" /></a>
    
  </div>
  <p id="logo-text">Family owned and operated since 1969.</p>
  <div class="accredidations-wrap">
    <div class="accredidations">
      <div id="tcia-logo">
        <a href="http://tcia.org" target="blank"><img src="images/tcia.png" /></a>
      </div>
      <div id="bbb-logo">
        <a href="http://knoxville.bbb.org" target="blank"><img src="images/bbb.png" /></a>
      </div>
    </div>
  </div>
</div>

<div id="content-home">
  <div id="slides">
    <img src="images/forest-wallpaper-1920x1080-1024x576_800x450.jpg">
    <img src="images/Before1.jpg">
    <img src="images/After1.jpg">
      <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
      <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>
  </div>

  

  <div class="clearBoth"></div>

  <div class="box-container">
    <div class="left-box">
      <h1 class="box"><a class="about" href="about.php">ABOUT US</a></h1>
      <ul class="icons-ul">
        <li><i class="icon-li icon-chevron-sign-right"></i>Established in 1969</li>
        <li><i class="icon-li icon-chevron-sign-right"></i>Locally owned and operated by Kent Holcomb</li>
        <li><i class="icon-li icon-chevron-sign-right"></i>Workers' Compensation</li>
        <li><i class="icon-li icon-chevron-sign-right"></i>Licensed, Bonded &amp; Insured</li>
        <li><i class="icon-li icon-chevron-sign-right"></i>Phones answered 24 hours a day/7 days a week for emergency services</li>
      </ul>
    </div>

    <div class="right-box">
      <h1 class="box"><a class="contact" href="services.php">SERVICES</a></h1>
      <ul class="icons-ul">
        <li><i class="icon-li icon-ok"></i>Tree Trimming/Removal</li>
        <li><i class="icon-li icon-ok"></i>Shrubbery Trimming</li>
        <li><i class="icon-li icon-ok"></i>Turf Installation</li>
        <li><i class="icon-li icon-ok"></i>Deep-Root Fertilization</li>
        <li><i class="icon-li icon-ok"></i>Tree Installation</li>
    </div>
  </div>

</div>

<div id="content-about">
  <h1>"Hi, my name is Kent Holcomb, owner of Holcomb Tree Experts.</h1>
    <p><br />
    I was born in Knoxville in 1965.  My father, Deal Holcomb, started our business in 1969.  His goal was to create an honest and professional tree service business.  He taught me to be fair and honest.  That is the way we have done business for 44 years.  I look forward to working with you and meeting all your tree care needs.  Please give me a call and allow us to assist you any way we can.<br /><br />
     
     <b>From large to small, we do it all!</b>"
    </p>
</div>

<div class="services-wrap">
  <div id="content-services">
    <ul class="icons-ul">
      <li><i class="icon-li icon-ok"></i>Tree Trimming/Removal</li>
      <li><i class="icon-li icon-ok"></i>Shrubbery Trimming</li>
      <li><i class="icon-li icon-ok"></i>Turf Installation</li>
      <li><i class="icon-li icon-ok"></i>Deep-Root Fertilization</li>
      <li><i class="icon-li icon-ok"></i>Tree Installation</li>
  </div>
</div>
</div>
</div>

<div id="content-photos">
  <h1>PHOTOS</h1>
  <ul>
  <?php
    $imagesDir = 'images/pictures/';
    $files = glob($imagesDir . "*.{png,jpg,jpeg}", GLOB_BRACE);
    foreach ($files as $file)
    {
      echo "<li><a href=\"" . $file . "\" data-lightbox=\"holcomb\"><img src=\"" . $file . "\" /></a></li>";
    }
  ?>
  </ul>
</div>
</div>
</div>

<div id="content-contact">
  <h1>CONTACT US</h1
</div>
</div>
<!-- BEGIN FOOTER -->
  </div> <!-- END CONTENT> -->
</div> <!-- END CONTENT-WRAP -->
<div id="footer">
  <div class="footer-content">
    <ul>
      <li>&copy; 2013 <span class="bold"><a href="mailto:danny.lusk@gmail.com" target="blank">Danny and Erik</a></span> All Rights Reserved.</li>
      <li><span class="bold">Holcomb Tree Experts</span> 7105 Martin Mill Pike Knoxville, TN 37920 | (865) 577-3830</li>
    </ul>
  </div>
</div>
</body>
</html>
<!-- END FOOTER -->
