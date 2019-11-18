<?php 
    get_header();
?>
<div class="banner-image">
    <img class="large-photo"src="<?php echo get_template_directory_uri();?>/images/headers/landing-post-1900x1059.jpg" alt="beautiful cathedral ceiling lights">
    <img class="small-photo"src="<?php echo get_template_directory_uri();?>/images/headers/landing-post-1303x1420.jpg" alt="beautiful cathedral ceiling lights">
</div>

<?php 
     while(have_posts()) {
        the_post();
        ?> 
        <div class="post-banner-text">
             <h1><?php echo the_title() ?></h1>
        </div>
        <article class="custom-single-article">
            <div class="custom-post-content">
                <?php
                    the_content();
                ?>
            </div>
        </article>
                         
    <?php }
     ?>
<?php 
    get_footer();
?>