<!doctype html>
<html lang="en">
<?php include 'const.php' ?>
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="SMS Social Media Token">
    <meta name="keywords" content="SMS Social Media Token">
    <meta name="author" content="SMS Social Media Token">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS - Social Media Token</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- Goole Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,400&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">  -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/assets/bootstrap.min.css">
    <!-- Font awsome CSS -->
    <link rel="stylesheet" href="css/assets/font-awesome.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/flaticon.css">
    <!-- popup-->
    <link rel="stylesheet" href="css/assets/magnific-popup.css">
    <link rel="stylesheet" href="css/assets/owl.carousel.css">
    <link rel="stylesheet" href="css/assets/owl.theme.css">
    <link rel="stylesheet" href="css/assets/jquery.countdown.css">
    <link rel="stylesheet" href="css/assets/animate.css">
    <!-- preloader css-->    
    <link rel="stylesheet" href="css/assets/preloader.css">
    <!-- main style-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cryptonio.css">
    <link rel="stylesheet" href="css/responsive.css">

    <script src="js/assets/jquery-3.2.1.min.js"></script>
                            
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="body_06">
<!-- Preloader -->
<!-- <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div> -->
<header id="header-06" class="header">
    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-md navbar-light bg-faded cripto_nav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand"  data-scroll  href="<?= BASEURL ?>"><img src="images/bounce/Blue-logo.png" alt="logo"></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="<?= BASEURL ?>about-us.php" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="<?= BASEURL ?>development-timeline.php" class="nav-link">Development Timline</a></li>
                    <li class="nav-item"><a href="<?= BASEURL ?>future-map.php" class="nav-link">Our Future Map</a></li>
                    <li class="nav-item"><a href="<?= BASEURL ?>project-vision.php" class="nav-link">Project Vision</a></li>
                    <li class="nav-item"><a role="button" class="nav-link">White Paper</a></li>                    
                </ul>
            </div>
            <div class="language">
                <?php if(PAGE == 'buy') { ?>
                <a role="button" class="token metamask-connected" onclick="checkConnection();">Connect</a>
                <?php } else { ?>
                <a href="<?= BASEURL ?>buy.php" class="token">Buy SMS</a>
                <?php } ?>
            </div>
        </div>
    </nav><!-- END NAVBAR -->

    <?php
        if(PAGE === 'index'): 
    ?>
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">   
            

            <div class="col-12 col-md-12 col-lg-6">
                <div class="intro-text">
                    <h1>Our plan is to make SMS the cryptocurrency of modern e-commerce platforms</h1>
                    <ul>
                        <li class="btn_video_wrapper">
                            <a href="<?= BASEURL ?>exchange.php" class="btn btn-default btn-default-style">Exchange
                                <img class="blue-btn-img" src="images/icons/button-icon.png" alt="Blue Logo">
                            </a>
                        </li>
                        <li class="btn_video_wrapper">
                            <a href="<?= BASEURL ?>about-smt.php" class="btn btn-default btn-default-style">About SMS
                                <img class="blue-btn-img" src="images/icons/button-icon.png" alt="Blue Logo">
                            </a>
                        </li>
                        <li class="btn_video_wrapper">
                            <a href="<?= BASEURL ?>instant-swap.php" class="btn btn-default btn-default-style">Instant Swap
                                <img class="blue-btn-img" src="images/icons/button-icon.png" alt="Blue Logo">
                            </a>
                        </li>
                        <li class="btn_video_wrapper">
                            <a href="<?= BASEURL ?>trusted-supporters.php" class="btn btn-default btn-default-style">Trusted Supporters
                                <img class="blue-btn-img" src="images/icons/button-icon.png" alt="Blue Logo">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-6 col-md-12 col-lg-6 img-wrapper">

                <div class="intro-img">
                    <div class="bounce_wrapper">
                        <img src="images/section-1.png" alt="">
                    </div>
                </div>

                <!-- <div class="intro-left about-cryptonic-sm-devices">
                    <div class="intro-branch-1">
                        <p>Your Own Social Bank</p>
                    </div>
                    <div class="intro-branch-2">
                        <p>Statistics Information</p>
                    </div>
                    <div class="intro-branch-3">
                        <p>Connecting peer to peer</p>
                    </div>
                    <div class="intro-branch-4">
                        <p>Staking/Farming Profit</p>
                    </div>
                </div>
                <div class="intro-img about-cryptonic-sm-devices">
                    <div class="bounce_wrapper">
                        <img src="images/bounce/Blue.png" alt="">
                    </div>
                </div>
                <div class="intro-right about-cryptonic-sm-devices">
                    <div class="intro-branch-5">
                        <p>Socially Connected</p>
                    </div>
                    <div class="intro-branch-6">
                        <p>Connecting peer to peer</p>
                    </div>
                    <div class="intro-branch-7">
                        <p>Socially Ecosystem</p>
                    </div>
                    <div class="intro-branch-8">
                        <p>Social Media Crypto Exchange</p>
                    </div>
                </div>
                <div class="about-cryptonic-sm-devices">
                    <ul class="it-has-ul">
                        <li>Your Own Social Bank</li>
                        <li>Statistics Information</li>
                        <li>Connecting peer to peer</li>
                        <li>Staking/Farming Profit</li>
                        <li>Social Media Crypto Exchange</li>
                        <li>Socially Connected</li>
                        <li>Connecting peer to peer</li>
                        <li>You don't need to read a lot</li>
                    </ul>
                </div> -->
            </div> 
                          
        </div>  
    </div>
    <!-- <span class="shape1 header-shape"><img src="images/shape/home_6/header6_shape_1.png" alt=""></span>
    <span class="shape2 header-shape"><img src="images/shape/home_6/header6_shape_2.png" alt=""></span>
    <span class="shape3 header-shape"><img src="images/shape/home_6/header6_shape_3.png" alt=""></span>   
    <span class="shape4 header-shape "><img src="images/shape/home_6/header6_shape_4.png" alt=""></span>   
    <span class="shape5 header-shape"><img src="images/shape/home_6/header6_shape_5.png" alt=""></span>     --> 
    <!-- <span class="shape6 header-shape"><img src="images/shape/home_6/header6_shape_6.png" alt=""></span>      -->

    <div id="particles1-js" class="particles"></div> 
    <?php endif; ?>

</header> <!-- End Header -->