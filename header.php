<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('title'); ?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); echo '/style.css?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <?php wp_head(); ?>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="<?php if (is_page("about-us")){echo "white";} ?>">


  <div class="logo-container">
        <a href="http://localhost:81/bcheck/"><img class="logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo_bcheck_header<?php if (is_page('about-us')){echo '_color';} ?>.svg"  alt="logo" /></a>
  </div>
  
  <?php wp_nav_menu(array('menu_id' => 'menu_container','theme_location' => 'primary' )); ?>
  <button class="hamburger hamburger--slider" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
        <script>
          var hamburger = document.querySelector(".hamburger");
          var navigation = document.querySelector(".menu");
          hamburger.addEventListener("click", function() {
            hamburger.classList.toggle("is-active");
            navigation.classList.toggle("is-active");
          });
        </script>
  </button>
 

  <div class="faq_container">
    <a href="http://localhost:81/bcheck/faq"><p class="faq_container_item">FAQ</p></a>
    <a href="http://localhost:81/bcheck/faq"><img class="faq" src="<?php bloginfo('template_url'); ?>/assets/images/question.png" alt="intergogation"></a>
  </div>


</header>