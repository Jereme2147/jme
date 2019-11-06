<?php 
    get_header();
?>

  <div class="page-banner">
        <img src="<?php echo get_template_directory_uri();?>/images/headers/vendors1900x1069.jpg" " alt="JME truck">
        <!-- <img class="large-photo"src="<?php //echo get_template_directory_uri();?>/images/headers/truck-1900x923.jpg" " alt="JME truck"> -->
    </div>
    <div class="page-banner-title">
        <h2 class="page-banner-text ">JME works with inudstry leading vendors</h2>
    </div>
    <!-- <section class="service-section"> -->
    <section>
    <?php 
        require_once(plugin_dir_path(__FILE__) . '/assets/vendors-page.php');
    ?>
    </section>
<?php 
    get_footer();
?>