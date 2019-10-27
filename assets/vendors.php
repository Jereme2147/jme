<!-- page to itterate through all vendors for landing page. -->
<?php
 $the_query = new WP_Query( array(
                                // 'posts_per_page'=>10,
                                'post_type'=>'vendor',
                                // 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
 )); 
                            ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <a href="<?php echo the_permalink();?>" class="vendor-scroll"><img src="<?php echo the_post_thumbnail_url();?>"" alt="vendor logo"></a>
<?php
endwhile;
?>

