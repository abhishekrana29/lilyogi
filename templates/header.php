<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>li'lyogi website</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Font Awesome icons (free version)-->
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&family=Poppins&display=swap" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="assets/aos/aos.css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link href="css/styles.css" rel="stylesheet" />
  <link href="css/common.css" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="assets/img/logo.svg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">

  <link rel="stylesheet" href="dist/js-snackbar.css?v=1.3" />

  <style>
    .js-snackbar-container {
      position: fixed !important;
      z-index: 10000;
    }
  </style>

<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-58WM53MZN3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-58WM53MZN3');
  </script>


</head>

<body id="page-top">

  <div class="preloader">
    <img src="assets/loader.svg" class="preloader-image" width="10%" />
  </div>
  <!-- Navigation-->
  <?php
  function active($currect_page)
  {
    $url_array =  explode('/', $_SERVER['REQUEST_URI']);
    $url = end($url_array);
    if ($currect_page == $url) {
      echo 'active'; //class name in css 
    }
  }
  ?>



  <div id='upload-video'>
    <div></div>
  </div>

  <nav class="navbar navbar-expand-xl fixed-top" id="mainNav">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php" data-aos="zoom-in">
        <img src="assets/img/logo.svg" class="img-fluid" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggle-font"> Menu</span>
        <span class="navbar-toggler-icon">
          <i class="fas fa-bars"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link px-xl-4 rounded <?php active('index.php'); ?>" href="index.php" data-aos="zoom-in">Home</a>
          </li>
          <!-- <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link px-xl-4 rounded  <?php active('ourprograms.php'); ?>" href="ourprograms.php" data-aos="zoom-in">Our Programs</a>
          </li> -->

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Our Programs
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="bean-yoga.php">Bean Yoga</a></li>
              <li><a class="dropdown-item" href="programme-details.php?id=2">Pod Yoga</a></li>
              <li><a class="dropdown-item" href="programme-details.php?id=3">Yoglings</a></li>
              <li><a class="dropdown-item" href="programme-details.php?id=4">Yoga Blossoms</a></li>
            </ul>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link px-xl-4 rounded <?php active('collab.php'); ?>" href="collab.php" data-aos="zoom-in"> Our Collaborations</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link px-xl-4 rounded <?php active('becometeacher.php'); ?>" href="becometeacher.php" data-aos="zoom-in">Become A Teacher</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link px-xl-4 rounded <?php active('aboutus.php'); ?>" href="aboutus.php" data-aos="zoom-in">Our Story</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link px-xl-4 rounded <?php active('shop.php'); ?>" href="shop.php" data-aos="zoom-in">Shop</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link px-xl-4 rounded <?php active('blog.php'); ?>" href="blog.php" data-aos="zoom-in">Blogs</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#studentRegisterModal">Register Now</button>
          </li>
          <!-- <li class="nav-item mx-0 mx-lg-1">
      <button class="btn btn-secondary px-5">Log in</button>
     </li> -->
        </ul>
      </div>
    </div>
  </nav>
  <!-- Modal -->
  <div class="modal fade custom-modal register-modal teacher-register-modal" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content bg-success">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <img src="assets/img/cross.svg" class="img-fluid" />
          </button>

        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div>
                <h1 class="main-heading" data-aos="zoom-in">
                  Become a teacher and work with us!
                </h1>
                <div class="curve-border" data-aos="zoom-in">
                  <img src="assets/img/line-curve.svg" class="img-fluid" />
                </div>
                <p class="main-content" data-aos="zoom-in">
                  lilyogis.sabz@gmail.com<br />
                  +91 98198 88881
                </p>

                <div class="footer__social-links pt-3 pt-lg-5">
                  <div>
                    <a href="https://www.instagram.com/lilyogis_sabz/" target="blank">
                      <img src="assets/img/socail-icon.svg" class="img-fluid" />
                    </a>
                  </div>
                  <div>
                    <a href="https://www.linkedin.com/company/li-l-yogis/" target="blank">
                      <img src="assets/img/linkedin.svg" class="img-fluid" />
                    </a>
                  </div>
                  <div>
                    <a href="https://www.youtube.com/channel/UCTFHM_8zoIUZVIvVG4dTdzw" target="blank">
                      <img src="assets/img/youtube.svg" class="img-fluid" />
                    </a>
                  </div>
                  <div>
                    <a href="https://www.facebook.com/lilyogis.sabz" target="blank">
                      <img src="assets/img/facebook.svg" class="img-fluid" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 register-modal__form-fields mt-5 mt-lg-0">
              <!-- <form action="https://formsubmit.co/lilyogis.sabz@gmail.com" method="POST"> -->
              <form id="thr_reg_form">
                <!-- <input type="hidden" name="_cc" value="ruchitadeshpande2023@gmail.com,yusufcardoz@gmail.com">
                <input type="hidden" name="_template" value="table">
                <input type="hidden" name="_subject" value="Become a teacher and work with us!"> -->

                <div>
                  <input required type="text" id="thr_name" class="form-control" name="Full Name" placeholder="Full Name" />
                </div>
                <div>
                  <input required type="tel" id="thr_phone" name="Phone Number" class="form-control" placeholder="Phone" />
                </div>
                <div>
                  <input required type="email" id="thr_email" name="Email" class="form-control" placeholder="E-mail" />
                </div>
                <div>
                  <input required type="text" id="thr_city" name="City" class="form-control" placeholder="City" />
                </div>
                <div>
                  <button type="submit" name="submit" class="btn btn-secondary">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="modal fade custom-modal register-modal student-register-modal" id="studentRegisterModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content bg-primary">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <img src="assets/img/cross.svg" class="img-fluid" />
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div>
                <h1 class="main-heading">
                  Register now
                  to become a member
                </h1>
                <div class="curve-border">
                  <img src="assets/img/line-curve.svg" class="img-fluid" />
                </div>
                <p class="main-content">
                  lilyogis.sabz@gmail.com<br />
                  +91 98198 88881
                </p>
                <div class="footer__social-links pt-3 pt-lg-5">
                  <div>
                    <a href="https://www.instagram.com/lilyogis_sabz/" target="blank">
                      <img src="assets/img/socail-icon.svg" class="img-fluid" />
                    </a>
                  </div>
                  <div>
                    <a href="https://www.linkedin.com/company/li-l-yogis/" target="blank">
                      <img src="assets/img/linkedin.svg" class="img-fluid" />
                    </a>
                  </div>
                  <div>
                    <a href="https://www.youtube.com/channel/UCTFHM_8zoIUZVIvVG4dTdzw" target="blank">
                      <img src="assets/img/youtube.svg" class="img-fluid" />
                    </a>
                  </div>
                  <div>
                    <a href="https://www.facebook.com/lilyogis.sabz" target="blank">
                      <img src="assets/img/facebook.svg" class="img-fluid" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 register-modal__form-fields mt-5 mt-lg-0">
              <!-- <form action="https://formsubmit.co/lilyogis.sabz@gmail.com" method="POST"> -->
              <form id="std_reg_form">

                <input type="hidden" name="_cc" value="ruchitadeshpande2023@gmail.com,yusufcardoz@gmail.com">
                <input type="hidden" name="_template" value="table">
                <input type="hidden" name="_subject" value=" Register now to become a member">

                <div>
                  <input required type="text" id="std_name" name="Full Name" class="form-control" placeholder="Full Name" />
                </div>
                <div>
                  <input required type="tel" id="std_phone" name="Phone Number" class="form-control" placeholder="Phone" />
                </div>
                <div>
                  <input required type="email" id="std_email" name="Email" class="form-control" placeholder="E-mail" />
                </div>
                <div>
                  <input required type="number" min="1" setp="1" id="std_age" name="Childs Age" class="form-control" placeholder="Childs age" />
                </div>
                <div>
                  <input required type="text" id="std_city" name="City" class="form-control" placeholder="City" />
                </div>
                <div>
                  <button required type="submit" class="btn btn-secondary">Register</button>
                </div>
              </form>
            </div>

          </div>


        </div>
      </div>
    </div>
  </div>

  <?php

  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://cms.lilyogis.co.in/api/free-trial-popup',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json',
      'Authorization: Bearer 681f5f732789be59ec4460457a7c25453f160aa3286fe95804a458d928d22f51f746709ed48f686bc450bf1bc0a3c9e36a9221ec9aa0d55b8c75f9506a39ce3067bf4df2bbc6c45e1b00c00b183b918a27d6b5cd067f1665172e614402de5b20922eb6e8cc97b2653732b848ff6f5fc619aec4f7a34ac4aed195398e76c89066'
    ),
  ));
  $response = curl_exec($curl);
  curl_close($curl);
  $data = json_decode($response);
  $ftd = $data->data;

  $heading = $ftd->attributes->Heading;
  $description = $ftd->attributes->Description;
  $button_Orange_1 = $ftd->attributes->Button_Orange_1;
  $button_2 = $ftd->attributes->Button_2;


  ?>

  <div data-aos="flip-left" class="modal custom-modal fade enjoy-free-trial-modal  yoga-day-modal" id="enjoyFreeTrialModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <img src="assets/img/black-cross.svg" class="img-fluid" />
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-center">

                <h1 class="main-heading primary-color">
                  <?php echo $heading; ?>
                </h1>
                <div class="curve-border justify-content-center">
                  <img src="assets/img/line-curve.svg" class="img-fluid" />
                </div>
                <p class="main-content light-color">
                  <?php echo $description; ?>
                </p>
              </div>
              <div class="d-flex justify-content-center align-items-center my-5">
                <button class="btn btn-secondary mr-3" onclick="window.location.href='https://forms.gle/MwebuepeURFr7nQu7'; return false;"><?php echo $button_Orange_1; ?></button>
                <button class="btn btn-secondary mr-3" onclick="window.location.href='https://forms.gle/MwebuepeURFr7nQu7'; return false;"><?php echo Wasif ?></button>
                <p role="button" id="noTrialPopup" class="blue-color"><?php echo $button_2; ?></p>
              </div>
            </div>

          </div>
          <!-- <div class="yoga-details-bg">
            <img src="assets/popup-bg.png" width="100%" />
            <div class="content">
              <img src="assets/popup-logo.png" width="10%" />
              <div>
                <p class="heading">Celebrating International Yoga Day<br />
                  with a family yoga session!</p>
                <p>Hosted by- Sabrina Merchant</p>
                <img src="assets/popup-img.png" width="60%" />
              </div>
            </div>
          </div> 
          <div class="yoga-details-content mt-4">
            <div class="details-location">
              <div class="bg-black py-1 d-flex align-items-center justify-content-center">
                <img src="assets/market-city-logo.jpeg" width="05%" />
                <h4 class="">PHOENIX MARKETCITY</h4>
              </div>
              <p>KURLA, MUMBAI</p>
            </div>
            <p class="heading">join us for Parent- Child Yoga Session on account of Father’s Day & International Yoga Day</p>
            <div class="grid-details">
              <div>
                <h6>Date</h6>
                <p>18th June 22</p>
              </div>
              <div>
                <h6>Time</h6>
                <p>5pm - 6pm</p>
              </div>
              <div>
                <h6>Ticket Price</h6>
                <p>₹99 Cover Charge</p>
              </div>
              <div>
                <h6>Venue</h6>
                <p>Dublin Square</p>
              </div>
            </div>
            <div>
            <a href="https://www.phoenixmarketcity.com/mumbai/event/International-Yoga-Day/156/open" target="blank" > 

            <button class="btn btn-secondary" >
            Click Here</button></a>
              </div>

            <p class="">Tickets are available at <a href="http://www.phoenixmarketcity.com">www.phoenixmarketcity.com</a></p>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- <div data-aos="flip-left" class="modal custom-modal  fade video-land-popup" id="videoLandPage" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body my-4">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-center" id="video-add">

                <video id="video-caption" width="100%" controls="true" height="100%"  muted autoplay loop playsInline>
                  <source src="assets/img/video.mp4" type="video/mp4">
                  <source src="movie.ogg" type="video/ogg">
                  Your browser does not support the video tag.
                </video>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
