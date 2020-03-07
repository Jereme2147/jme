

<?php 
    get_header();
?>
<div class="banner-image">
    <img class="large-photo"src="<?php echo get_template_directory_uri();?>/images/headers/brmc-1900x1069.jpg" alt="banner with lights">
    <img class="small-photo"src="<?php echo get_template_directory_uri();?>/images/headers/brmc-600x786.jpg" alt="banner with lights">
</div>
<?php 
    // require_once(plugin_dir_path(__FILE__) . '/assets/page-title-header.php');
?>
<div class="banner-text">
    <h1>We'd love to hear from you!</h1>
    <p>Connect with us below</p>
</div>
<?php 
     while(have_posts()) {
        the_post();
        ?> 
        <!-- <section> -->
            <div class="contact-container">
                <section>
                    <div class="contact-social">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/mundayelectric/"><img src="<?php echo get_template_directory_uri(); ?>/images/social/facebook.svg" alt=""> </a>
                            <a href="https://www.instagram.com/jaredmundayelectric/"><img src="<?php echo get_template_directory_uri(); ?>/images/social/instagram.svg" alt=""></a>
                        </div>
                        <div class="social-icons">
                            <a href="tel:123-456-7890"><img src="<?php echo get_template_directory_uri(); ?>/images/social/phone.svg" alt="social icon"></a>
                            <a href="mailto:jaredmundayelectric@gmail.com"><img src="<?php echo get_template_directory_uri(); ?>/images/social/mail.svg" alt=""></a>
                        </div>
                    </div>
                </section>
                <section class="section-contact">
                    <div class="contact-form">
                         <?php
                            the_content();
                        ?>
                    </div>
                    <div class="contact-information">
                        <div>
                            <h2>Jared Munday Electric, inc.</h2>
                            <h2>828-355-9024</h2>
                            <div class="contact-address-phone">
                                <div class="contact-address-phone-address">
                                    
                                    <h3>PO Box 2077</h3>
                                    <h3>Boone, NC 28607</h3>
                                </div>
                                <div class="contact-address-phone-icon">
                                    <a href="tel:123-456-7890"><img src="<?php echo get_template_directory_uri(); ?>/images/social/phone.svg" alt="direct call link"></a>
                                </div>

                            </div>
                            
                            <a href="#"><h3>jaredmundayelectric@gmail.com</h3></a>
                        </div>
                    </div>
                </section>
                <section>
                    <!-- <div class="contact-information">
                        <div>
                            <h2>Jared Munday Electric, inc.</h2>
                            <h2>828-355-9024</h2>
                            <div class="contact-address-phone">
                                <div class="contact-address-phone-address">
                                    
                                    <h3>PO Box 2077</h3>
                                    <h3>Boone, NC 28607</h3>
                                </div>
                                <div class="contact-address-phone-icon">
                                    <a href="#"><img src="<?php //echo get_template_directory_uri(); ?>/images/social/phone.svg" alt=""></a>
                                </div>

                            </div>
                            
                            <a href="#"><h3>jaredmundayelectric@gmail.com</h3></a>
                        </div>
                    </div> -->
                </section>
                <section>
                    <div class="map-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/best-of-best.jpg" alt="award">    
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pin.jpg" alt="location map">
                    </div>
                </section>
            </div>
       
        <!-- </section> -->
        <?php
     }
?>
<?php 
    get_footer();
?>