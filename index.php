<!DOCTYPE html>
<html>

<head>
  <title>Locksmith Services</title>
  <meta name="description" content="Locksmith Services: Auto, Residential and Commercial - serving in Texas, New Jersey and Pennsylvania">
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
  include_once('config.php');
  include('header.php');
  $result = mysqli_query($mysqlconn, "SELECT * FROM reviews ORDER BY ID DESC;");
  ?>

  <!-- FIXED CALL DIV Start-->
  <a href="tel:111-222-333" class="call-div footerLink text-center">
    Need service fast?<br />
    Call us at <br />
    <span>111-222-333</span>
  </a>
  <!-- FIXED CALL DIV End-->

  <!-- CAROUSEL VIDEO Start -->
  <div class="container-fluid remove-video-margin">
    <div class="vid-background">
      <video playsinline autoplay muted loop>
        <source src="./Images/carousel-video.mp4">
      </video>
      <div class="video-overlay"></div>
    </div>
    <div class="video-content text-center" style="width: 100%;">
      <h1 class="vid-head text-white brand-name">LOCKSMITH SERVICES</h1>
      <p class="vid-tagline">Profession made for your Protection</p>
      <a href="#services" class="btn start footerLink mt-2">OUR SERVICES</a>
    </div>
  </div>
  <!-- CAROUSEL VIDEO End -->

  <!-- DISCLAIMER Start -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 text-white py-4 text-center disclaimerDiv">
        <h2>Licensed, Bonded & Insured</h2>
        <h4>We are Licensed Locksmiths for all your Locksmith needs!</h4>
      </div>
    </div>
  </div>
  <!-- DISCLAIMER End -->

  <!-- SERVICES Start -->
  <div id="services" class="container-fluid">
    <div class=" mt-5 mb-4 row align-items-center justify-content-center">
      <h2 class="col-12 text-uppercase text-center allFont">Our Services</h2>
      <hr class="bg-primary mt-3 underline1">
    </div>
    <div class="row align-items-center">
      <div class="col-12 col-md-6 bgColor2">
        <div class="container containerWidth">
          <div class="row align-items-center rowHeight">
            <a href="lockouts.php" class="col-12 bgColor centerItems colHeight colBorder colMove">
              <img class="serviceImg" src="./services/img1.png">
              <span class="pl-4">
                <h3 class="my-auto stroke service-title">LOCKOUTS</h3>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 bgColor">
        <div class="container containerWidth">
          <div class="row align-items-center rowHeight">
            <a href="locksChange.php" class="col-12 bgColor2 centerItems colHeight colBorder colMove">
              <img class="pl-1 serviceImg" src="./services/lock repair.png">
              <span class="pl-4">
                <h3 class="my-auto stroke service-title">LOCK CHANGE</h3>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-12 col-md-6 bgColor order-last order-md-first">
        <div class="container containerWidth">
          <div class="row align-items-center rowHeight">
            <a href="lockReplacement.php" class="col-12 bgColor2 centerItems colHeight colBorder colMove">
              <img class="pl-1 serviceImg" src="./services/lock1.png">
              <span class="pl-5 title-padding">
                <h3 class="my-auto stroke service-title">LOCK REPAIR & REPLACEMENT</h3>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 bgColor2">
        <div class="container containerWidth">
          <div class="row align-items-center rowHeight">
            <a href="rekey.php" class="col-12 bgColor centerItems colHeight colBorder colMove">
              <img class="pl-1 serviceImg" src="./services/Door2.png">
              <span class="pl-3">
                <h3 class="my-auto stroke service-title">REKEY/MASTERKEY</h3>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-12 col-md-6 bgColor2">
        <div class="container containerWidth">
          <div class="row align-items-center rowHeight">
            <a href="keyDuplication.php" class="col-12 bgColor centerItems colHeight colBorder colMove">
              <img class="pl-1 serviceImg" src="./services/duplicate key.png">
              <span class="pl-3">
                <h3 class="my-auto stroke service-title">KEY DUPLICATION</h3>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 bgColor">
        <div class="container containerWidth">
          <div class="row align-items-center rowHeight">
            <a href="laserCutting.php" class="col-12 bgColor2 centerItems colHeight colBorder colMove">
              <img class="pl-1 serviceImg" src="./services/key cutting1.png">
              <span class="pl-5 title-padding">
                <h3 class="my-auto stroke service-title">LASER/HIGH SECURITY KEY CUTTING</h3>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-12 col-md-6 bgColor order-last order-md-first">
        <div class="container containerWidth">
          <div class="row align-items-center rowHeight">
            <a href="keyProgramming.php" class="col-12 bgColor2 centerItems colHeight colBorder colMove">
              <img class="pl-1 serviceImg" src="./services/home.png">
              <span class="pl-4">
                <h3 class="my-auto stroke service-title">KEY & REMOTE PROGRAMMING</h3>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 bgColor2">
        <div class="container containerWidth">
          <div class="row align-items-center rowHeight">
            <a href="brokenKey.php" class="col-12 bgColor centerItems colHeight colBorder colMove">
              <img class="pl-2 serviceImg" src="./services/lost key.png">
              <span class="pl-5">
                <h3 class="my-auto stroke service-title">BROKEN KEY REMOVAL</h3>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- SERVICES End -->

  <!--TRUSTED BY DIV Start -->
  <div class="container-fluid jumbotron trusted-by my-0">
    <h3 id="trustedBy" class="text-center text-uppercase allFont">Trusted By</h3>
    <hr class="bg-primary underline1 mb-4">
    <div class="row align-items-center justify-content-center pt-0 logosRow">
      <div class="col-12 col-sm-5 col-md-3 col-xl-2 d-flex justify-content-center"><img src="./Images/uhaul2.png" class="uhaul"></div>
      <div class="col-12 col-sm-5 col-md-3 col-xl-2 d-flex justify-content-center"><img src="./Images/Agero.png" class="agero"></div>
      <div class="col-12 col-sm-5 col-md-3 col-xl-2 d-flex justify-content-center"><img src="./Images/AAA.png" class="aaa"></div>
      <div class="col-12 col-sm-5 col-md-3 col-xl-1 mr-5 d-flex justify-content-center"><img src="./Images/kb_home_resized.jpg" class="kb_home"></div>
      <div class="col-12 col-sm-12 col-md-3 col-xl-2 d-flex justify-content-center"><img src="./Images/google2.png" class="google"></div>
    </div>
  </div>
  <!--TRUSTED BY DIV End -->


  <!-- REVIEWS Start -->
  <div class="container-fluid px-0">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner carousel-background bg-dark" role="listbox">
        <?php
        $count = 1;
        while ($res = mysqli_fetch_assoc($result)) {
          if ($count == 1) {
            echo "<div class='carousel-item active'>";
          } else {
            echo "<div class='carousel-item'>";
          }
          echo "<div class='text-center min-vh-100 review-content'>";
          echo "<p class='review-text'>" . $res['Review'] . "</p><br/>";
          echo "<h4 class='review-name'>" . $res['Name'] . "</h4>";
          echo "<div class='review-address'>" . $res['City'] . "</div>";
          echo "</div>";
          echo "</div>";
          $count = $count + 1;
        }
        $mysqlconn->close();
        ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-- REVIEWS End -->

  <!--WHY CHOOSE US DIV Start -->
  <div class="container-fluid jumbotron trusted-by my-0">
    <h3 id="chooseUs" class="text-center text-uppercase allFont">WHY CHOOSE LOCKSMITH SERVICES?</h3>
    <hr class="bg-primary underline2">
    <div class="row align-items-center justify-content-center py-5 logosRow2">
      <div class="col-12 col-sm-5 col-md-2 offset-lg-1 quality"><i class="fas fa-award fa-5x mb-3" style="color: #c71585;"></i>
        <h6>QUALITY</h6>
      </div>
      <div class="col-12 col-sm-5 col-md-2 trust"><i class="fas fa-hand-holding-heart fa-5x mb-3" style="color: #008000;"></i>
        <h6 class="pl-3">TRUST</h6>
      </div>
      <div class="col-12 col-sm-5 col-md-2 experience"><i class="fas fa-users fa-5x mb-3" style="color: #0B4C74;"></i>
        <h6 class="pl-2">EXPERIENCE</h6>
      </div>
      <div class="col-12 col-sm-5 col-md-2"><i class="fas fa-business-time fa-5x mb-3" style="color: #ff8c00;"></i>
        <h6 class="pr-3">CONVENIENCE</h6>
      </div>
    </div>
  </div>
  <!--WHY CHOOSE US DIV End -->

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