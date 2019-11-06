<?php 
    get_header();
?>

<section>
    <?php 
     while(have_posts()) {
        the_post();
        echo the_content();
     }
    ?>
</section>
<?php 
    get_footer();
?>