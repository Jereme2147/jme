<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154969187-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-154969187-2');
</script>
    <!-- <title>Document</title> -->
    <meta name="description" content="Electrician | Licensed | Insured | Experienced | Guaranteed">
</head>
<body id="body">
    <div id="container">
            <nav>
                <button class="hamburger hamburger--arrowalt " type="button" aria-label="menu toggle">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                <div class="top-phone-number">
                        <h3>(828) 355-9024</h3>
                </div>
                <div id="logo-div">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo500x161.png" alt="">
                </div>

                <div id="menu-open">
                    <div id="black-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo500x161.png" alt="">
                    </div>
                    <?php
                        //loads main menu -- edited within WP-ADMIN
                        require_once(plugin_dir_path(__FILE__) .'/assets/header-menu.php');
                    ?>
                </div>
            </nav>
            <main>