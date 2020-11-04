<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KRB-Constructions</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri() ; ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri() ; ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo get_template_directory_uri() ; ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ; ?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ; ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ; ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ; ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ; ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ; ?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ; ?>/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo get_template_directory_uri() ; ?>/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container d-flex align-items-center">
      <div class="contact-info mr-auto">
        <ul>
          <li><i class="icofont-envelope"></i><a href="mailto:contact@example.com"><?php echo bloginfo('admin_email') ; ?></a></li>
          <li><a href="tel:+919646469737"><i class="icofont-phone"></i> +919646469737</a></li>
          <li><i class="icofont-clock-time icofont-flip-horizontal"></i> Mon-Fri 9am - 8pm</li>
        </ul>
      </div>
      <div class="cta">
        <a href="#contact" class="scrollto">Get Started</a> <a href="tel:+919646469737" class="scrollto">Call Us</a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="#header" class="scrollto"><?php echo bloginfo('name') ; ?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!--  <a href="#header" class="logo mr-auto scrollto"><img src="assets/img/logo.png" alt="not available" class="img-fluid"></a> -->

      <nav class="nav-menu d-none d-lg-block">
         <?= wp_nav_menu(array('container'=>false,''=>'')) ?>
        <!-- <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li class="drop-down"><a href="#services">
            services
          </a>
            <ul>
              <li><a href="#">services 1</a></li>
              <li><a href="#">serices 2</a></li>
              <li><a href="#">services 3</a></li>
              <li><a href="#">services 4</a></li>
            </ul>
          </li>
          <li><a href="#about">About Us </a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
           <li><a href="#team">Team</a></li>

        </ul> -->
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
