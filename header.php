<?php
$button_href = "login.php";
$button_href_name = "Log in";
$button_main_page = "index.php";
session_start();
require("connect_db.php");
$mysqli = connect_db();
if (isset($_SESSION['user_id']))
    if ($_SESSION['user_id'] == 'admin') {
        $button_href = "exit.php";
        $button_href_name = "Log out";
        $button_main_page = "admin_index.php";
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Artificial News</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/elegant-font/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cormorant:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="styles/bootstrap.css" />
    <link rel="stylesheet" href="styles/main.css" />
  </head>
  <body>
	  <div id="js-preloader" class="js-preloader">
      <div class="cp-preloader cp-preloader_type1">
        <span class="cp-preloader__letter" data-preloader="L">L</span>
        <span class="cp-preloader__letter" data-preloader="O">O</span>
        <span class="cp-preloader__letter" data-preloader="A">A</span>
        <span class="cp-preloader__letter" data-preloader="D">D</span>
        <span class="cp-preloader__letter" data-preloader="I">I</span>
        <span class="cp-preloader__letter" data-preloader="N">N</span>
        <span class="cp-preloader__letter" data-preloader="G">G</span>
      </div>
    </div>
	  
    <section class="above-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 align-self-center">
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-4 align-self-center">
            <div class="logo">
              <a href="index.php"><img src="Images/logo.PNG" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 align-self-center">
            <ul class="search-item">
              <li class="menu-item menu-search">
                <a href="#search" id="menu-search-btn">
                  <i class="icon_search"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Header -->
    <header class="site-header fixed-header">
      <div class="container expanded">
        <div class="header-wrap">
          <div class="header-logo">
            <a href="index.php"><img src="Images/logo.PNG" alt=""></a>
          </div>
          <div class="header-nav">
              <ul class="main-menu">
                <li class="menu-item-has-children active"><a href="<?=$button_main_page?>">Home</a>
                </li>
                <li><a href="#">About</a></li>
                <li><a href="<?=$button_href?>"><?=$button_href_name?></a></li>
              </ul>    
          </div>
          <div class="header-widgets">
            <ul class="right-menu">
              <li class="menu-item menu-mobile-nav">
                <a href="#" class="menu-bar" id="menu-show-mobile-nav">
                  <span class="hamburger"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <!-- /Header -->

    <!-- change class -->
    <div class="change-class"></div>

    <div id="search">
      <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="Search..." />
            <button type="submit" class="primary-button"><i class="icon_search"></i></button>
        </form>
    </div>