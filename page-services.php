<?php 
    get_header();
?>
    <div class="service-banner">
        <img src="<?php echo get_template_directory_uri();?>/images/headers/truck-sky1900x1219.jpg" " alt="JME truck">
        <!-- <img class="large-photo"src="<?php //echo get_template_directory_uri();?>/images/headers/truck-1900x923.jpg" " alt="JME truck"> -->
    </div>
    <div class="service-title banner-title">
        <h2 class="service-banner-text ">We provide a comprehensive list of services.</h2>
    </div>
    <section class="service-section">
<?php
    require_once(plugin_dir_path(__FILE__) . '/assets/services-page.php');
?>
    </section>
<?php 
    get_footer();
?>