<!DOCTYPE html>
<html>

<head>
  <title>Locksmith Services Blog</title>
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
  <link rel="stylesheet" type="text/css" href="./styles/about-styles.css">
</head>

<body>
  <?php
  include('header.php');
  ?>

  <!-- FIXED CALL DIV Start-->
  <a href="tel:111-222-333" class="call-div blog-call-div footerLink text-center">
    Need service fast?<br/>
    Call us at <br/>
    <span>111-222-333</span>
  </a>
  <!-- FIXED CALL DIV End-->

  <!-- OUR BLOG Start -->
  <div class="blog-head">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <h1 class="blog-head-heading">OUR BLOG</h1>
      </div>
    </div>
  </div>
  <!-- OUR BLOG End -->

  <?php
  include('footer.php');
  ?>

  <!-- JavaScript Functionality -->
  <script>
    function checkOffset() {
      if ($('.call-div').offset().top + $('.call-div').height() >= $('#footer').offset().top - 10)
        $('.call-div').css('position', 'absolute');
      if ($(document).scrollTop() + window.innerHeight < $('#footer').offset().top)
        $('.call-div').css('position', 'fixed'); // restore when you scroll up
    }
    $(function() {
      $(document).scroll(function() {
        checkOffset();
      });
    });
  </script>
</body>

</html>