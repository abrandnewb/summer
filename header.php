<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon">

  <title>Summer by Biniyam</title>

  <!-- bootstrap core css -->
  <!-- <link rel="stylesheet" type="text/css" href="<?php //echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" /> -->

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <!-- <link href="<?php //echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" /> -->
  <!-- responsive style -->
  <!-- <link href="<?php //echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet" /> -->
  <?php wp_head(); ?>
</head>

<body class="<?php echo is_front_page() ? "" : "sub_page"; ?>">
  
<div class="hero_area">
    <!-- header section strats -->
    <div class="hero_bg_box">
      <div class="img-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg" alt="">
      </div>
    </div>
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_link-container">
            <a href="" class="contact_link1">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Lorem ipsum dolor sit amet,
              </span>
            </a>
            <a href="" class="contact_link2">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 1234567890
              </span>
            </a>
            <a href="" class="contact_link3">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
              <span>
                Summer
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""></span>
            </button>
                <?php 
                  if(has_nav_menu( 'primary_menu' )) {
                  wp_nav_menu( array(
                    'theme_location'    => 'primary_menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbarSupportedContent',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                }
              ?>
          </nav>       
      </div>
    </header>
 
    <?php echo is_front_page() ? "" : "</div>"; ?>