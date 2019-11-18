
<?php
 $the_query = new WP_Query( array(
                                // 'posts_per_page'=>10,
                                'post_type'=>'landing',
                                // 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
 )); 
 $landingPostCount = 2;
 $landingImageOdd = 'landing-top-image-odd ';
 $landingWordsOdd = 'landing-top-words-odd';
                            ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <div class="landing-section-services">
                <div class="landing-top-image <?php
                    if ($landingPostCount % 2) {
                        echo $landingImageOdd;
                    }
                ?>">
                    <img src="<?php echo the_post_thumbnail_url();?>" alt="service image">
                </div>
                <div class="landing-top-words <?php 
                    if ($landingPostCount % 2) {
                        echo $landingWordsOdd;
                    }
                    ?>">
                    <h1><?php echo the_title() ?></h1>
                    <?php echo the_excerpt() ?>
                    <a href="<?php echo the_permalink();?>"><h2>Read More</h2></a>
                </div>
            </div>

<?php
$landingPostCount = $landingPostCount + 1;
endwhile;
?>