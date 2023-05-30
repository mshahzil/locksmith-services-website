<!DOCTYPE html>
<html>

<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Browser Tab Logo -->
  <link rel="shortcut icon" href="./Images/lock-logo.png" type="image/x-icon" />

  <!-- Bootstrap 4 CSS (CDN) -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

  <!--Google Fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">

  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="./styles/styles.css">
</head>

<body>
  <?php
  include('header.php');
  ?>

  <!-- CONTACT US HEADING Start -->
  <div class="contact-head vid-head">
    <div class="contact-head-content">
      <h1 class="contact-heading">CONTACT US</h1>
    </div>
  </div>
  <!-- CONTACT US HEADING End -->

  <!-- CONTACT US TILES Start -->
  <div class="container" style="margin-top: 40px">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-12 justify-content-center d-flex">
        <div id="phone-tile" class="tile pt-4">
          <h4 class="titlePadding text-center">Call Us</h4>
          <div class="text-center" style="font-size: 16px;"><i class="fas fa-phone mr-2"></i><a href="tel:111-222-333"><span>111-222-333</span></a></div>
        </div>
      </div>
      <div class="col-lg-4 col-12 justify-content-center d-flex">
        <div id="email-tile" class="tile pt-4">
          <h4 class="titlePadding text-center">Email Us</h4>
          <div class="text-center" style="font-size: 16px;"><i class="fas fa-envelope mr-2"></i><a href="mailto: test@locksmith.com">test@locksmith.com</a></div>
        </div>
      </div>
      <div class="col-lg-4 col-12 justify-content-center d-flex">
        <div id="address-tile" class="tile pt-2">
          <h4 class="titlePadding2 text-center">Office Address</h4>
          <div class="text-center px-4" style="font-size: 16px;">
            <i class="fas fa-home mr-2"></i>
            Killeen, TX 76549<br />
            New Brunswick, NJ 08901<br />
            Ewing, NJ 08618
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CONTACT US TILES End -->

  <!-- CONTACT US FORM & MAP Start -->
  <div class="container mb-3 form-container">
    <div class="row">
      <div class="col-12">
        <h1 class="stroke get-in-touch">GET IN TOUCH</h1>
      </div>
    </div>
  </div>
  <div class="container bg-secondary" style="margin-bottom: 80px;">
    <div class="row align-items-center justify-content-center">
      <div class="col-12 col-lg-6 text-white py-5 bg-dark">
        <form action="https://formsubmit.co/altice.112233@gmail.com" method="POST" />
        <input type="hidden" name="_captcha" value="false">
        <div class="row py-3 text-center">
          <div class="col-12 col-sm-6">
            <input type="text" name="Name" placeholder=" Name" class="inStyle">
          </div>
          <div class="col-12 col-sm-6 contact-field">
            <input type="text" name="Email" placeholder=" Email" class="inStyle">
          </div>
        </div>
        <div class="row py-3 text-center">
          <div class="col-12 col-sm-6">
            <input type="num" name="Phone" placeholder=" Phone" class="inStyle">
          </div>
          <div class="col-12 col-sm-6 contact-field">
            <input type="text" name="City" placeholder=" City" class="inStyle">
          </div>
        </div>
        <div class="row py-3 text-center">
          <div class="col-12">
            <textarea name="Message" placeholder=" Comments/Message" rows="4" class="comInStyle"></textarea>
          </div>
        </div>
        <div class="row py-2 text-center">
          <div class="col-12">
            <input type="submit" value="SUBMIT" class="buttonStyle">
          </div>
        </div>
        </form>
      </div>
      <div class="col-12 col-lg-6 p-0" style="height: 430px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d780122.8128830809!2d-75.36096270770514!3d40.20117137710559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865ab5c51ad12453%3A0x9bc7c0f4e143168e!2sDan%20Locksmith!5e0!3m2!1sen!2sus!4v1630248402389!5m2!1sen!2sus" class="footer-map" style="border:0; width: 100%; height: 100%;" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <!-- CONTACT US FORM & MAP End -->

  <?php
  include('footer.php');
  ?>
</body>

</html>