<?php 
    get_header();
?>
<div class="banner-image">
    <img class="large-photo"src="<?php echo get_template_directory_uri();?>/images/headers/blog-1900x2006.jpg" alt="beautiful cathedral ceiling lights">
    <img class="small-photo"src="<?php echo get_template_directory_uri();?>/images/headers/blog-900x1184.jpg" alt="beautiful cathedral ceiling lights">
</div>
<div class="banner-text">
    <h1>JME Blog</h1>
    <p>Information we'd like you to have</p>
</div>
<?php 
     while(have_posts()) {
        the_post();
        ?> 
        <article class="blog-single-article">
        <div class="blog-single-meta">
            <h2 class="single-post-title">
                <?php echo the_title() ?>
            </h2>
            <!-- <h3 class="single-post-author">
                Posted By: 
                <?php //echo get_the_author() ?>
            </h3> -->
            <h4 class="single-post-date">
                On: 
                <?php echo get_the_date() ?>
            </h4>
        </div>
        <div class="single-post-content">
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