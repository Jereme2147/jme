<!-- This page is to dynamically load all services for the services section of landing page. -->

<?php //$output = wp_list_pages( array( 'title' => '' ) ); 
    $pages = get_pages( $args = array('sort_column' => 'menu_order') );
    foreach ($pages as $page) {
        $parent_title = get_the_title( $page->post_parent );
        $image = get_the_post_thumbnail_url($page->ID);
        $excerpt = get_the_excerpt($page->ID);
        if($parent_title == 'Services'){
             ?>
            <div class="services-card services-card-not-selected">
                <img src="<?php echo $image ?>" alt="">
                <div class="service-heading">
                    <h2><?php echo $page->post_title?></h2>
                </div>
                <div class="service-description">
                    <p><?php echo $excerpt ?></p>
                    <a href="<?php echo the_permalink($page->ID); ?>" target="_blank">READ MORE</a>
                </div>
            </div>
        <?php

        }
       
    }
?>
