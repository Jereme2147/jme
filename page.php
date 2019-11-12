<?php 
    get_header();
?>

 <?php 
        while(have_posts()) {
            the_post();
    ?>
    <div class="generic-page-title">
            <h2><?php echo the_title() ?></h2>
    </div>
<section>
    <div class="page-div">
       <?php
            echo the_content();
        }
    ?>
    </div>
    
</section>
<?php 
    get_footer();
?>