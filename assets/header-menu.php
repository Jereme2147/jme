<!-- <ul> -->
<!-- <div class="mobile-menu-open" id="mobile-menu-open"> -->
    <!-- <ul> -->
     <?php 
        wp_nav_menu( array ( 'theme_location' => 'primary_menu' ) );
    ?>
        <ul> <!--I'm New -->
            <li id=menu-social>
            <a href="https://www.facebook.com/mundayelectric/"><img src="<?php echo get_template_directory_uri(); ?>/images/social/facebook.svg" alt="social icon"> </a>
            <a href="https://www.instagram.com/jaredmundayelectric/"><img src="<?php echo get_template_directory_uri(); ?>/images/social/instagram.svg" alt="social icon"></a>
            <!-- <a href="#"><img src="<?php //echo get_template_directory_uri(); ?>/images/social/linkedin.svg" alt="social icon"></a> -->
            <a href="mailto:jaredmundayelectric@gmail.com"><img src="<?php echo get_template_directory_uri(); ?>/images/social/mail.svg" alt="social icon"></a>
            <a href="tel:123-456-7890"><img src="<?php echo get_template_directory_uri(); ?>/images/social/phone.svg" alt="social icon"></a>
            </li>
            <li onclick="burger()">Close Menu</li>
        </ul> <!--I'm New -->
        
    <!-- </ul> -->
<!-- </div> -->