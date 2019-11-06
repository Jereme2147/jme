<ul>
<div class="mobile-menu-open" id="mobile-menu-open">
    <ul>
     <?php 
        wp_nav_menu( array ( 'theme_location' => 'primary_menu' ) );
    ?>
        <li id=menu-social>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/social/facebook.svg" alt=""> </a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/social/instagram.svg" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/social/linkedin.svg" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/social/mail.svg" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/social/phone.svg" alt=""></a>
        </li>
        <li onclick="burger()">Close</li>
    </ul>
</div>