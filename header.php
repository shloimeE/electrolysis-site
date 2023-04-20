<?
require_once 'helper_functions.php';
require_once 'configs.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Electrolysis Clinic</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon1.png"/>


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- My Stylesheet -->
    <link href="assets/css/my-stylesheet.css" rel="stylesheet">

    <!--Fontawesome stylesheet-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Other styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

</head>

<body id="page-top">

<div class="header-container">
    <div class="header-left">
        <a href="<?=BASE_PATH?>index.php">
            <img src="assets/img/electrolysis_logo_with_name.jpg" height="150" width="250">
        </a>
    </div>
    
    <div class="header-right">
        <span style="padding-bottom: 5px;">
            <i class="fas fa-phone-square fa-lg" style="color:<?=$main_color?>"></i>&nbsp;&nbsp; 
            <span><span class='label'>Call:</span> <?=$phone_number?></span>
        </span>
        <span style="padding-top: 5px;">
            <i class="fas fa-envelope fa-lg" style="color:<?=$main_color?>"></i>&nbsp;&nbsp; 
            <span><span class="label">Email:</span> <?=$email?></span>
        </span>
    </div>
</div>
<div style="clear: both;"></div>

<nav class="navbar navbar-expand-lg navbar-light nav" style="background-color: <?=$main_color?>;" id="mainNav"> 
    <div class="container">
        <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
            <ul class="navbar-nav reg-navs">
                <?foreach($header_links as $key => $data):?>
                    <li class="nav-item">
                        <a class="nav-link <?=$this_page==$key?'active-nav':''?>" href="<?=BASE_PATH.$data['link']?>"><?=$data['display_name']?></a>
                    </li>    
                <?endforeach;?>
            </ul>
            <ul class="navbar-nav ml-auto grow" style="background: #1565c0">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" style="color:white;" href="<?=BASE_PATH?>contact_us.php?book=1">Book Now!</a>
                </li>
            </ul>
        </div>
    </div>
    <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
    </button>  
</nav>
