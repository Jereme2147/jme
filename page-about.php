<?php 
    get_header();
?>
<div class="banner-image">
    <img class="large-photo"src="<?php echo get_template_directory_uri();?>/images/headers/about-truck-1900x1425.jpg" alt="banner with JME truck">
    <img class="small-photo"src="<?php echo get_template_directory_uri();?>/images/headers/about-truck-900x872.jpg" alt="banner with JME truck">
</div>
<?php 
    // require_once(plugin_dir_path(__FILE__) . '/assets/page-title-header.php');
?>
<div class="about-banner-text">
    <h1>Jared Munday Electric</h1>
    <p>For every electrical need</p>
</div>
    <section class="page-div">
<?php 
     while(have_posts()) {
        the_post();
        echo the_content();
        ?> 
    </section>
        <?php
     }
?>
<?php 
    get_footer();
?>