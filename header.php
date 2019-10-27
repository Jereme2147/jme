<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body id="body">
    <div id="container">
            <nav>
                <div class="hamburger" onclick="burger('menu-open')">
                    <i class="fas fa-bars"></i>
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/hamburger200x180.svg" alt="menu-button"> -->
                </div>
                <div id="logo-div">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo500x161.png" alt="">
                </div>
                <div id="menu-open">
                    <div id="black-logo">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/jme-bw-406x142.svg" alt=""> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo500x161.png" alt="">
                    </div>
                    <?php
                        //loads main menu -- edited within WP-ADMIN
                        require_once(plugin_dir_path(__FILE__) .'/assets/header-menu.php');
                    ?>
                </div>
            </nav>
            <main>