<!-- This page is to dynamically load all services for the services section of landing page. -->

<?php //$output = wp_list_pages( array( 'title' => '' ) ); 
    $pages = get_pages();
    foreach ($pages as $page) {
        $parent_title = get_the_title( $page->post_parent );
        $image = get_the_post_thumbnail_url($page->ID);
        if($parent_title == 'Services'){
             ?>
            <div class="services-card services-card-not-selected">
                <!-- <img src="<?php //echo get_template_directory_uri();?>/images/services/Guardian_Generator_Application3.jpg" alt="service"> -->
                <img src="<?php echo $image ?>" alt="">
                <div class="service-heading">
                    <h2><?php echo $page->post_title?></h2>
                </div>
                <div class="service-description">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto doloribus minima sapiente exercitationem odio, possimus asperiores, illo tempora aliquam nemo maxime veritatis blanditiis illum voluptate culpa perferendis, itaque aspernatur voluptatum.</p>
                    <a href="www.jeremedaniels.com" target="_blank">READ MORE</a>
                </div>
            </div>
        <?php

        }
       
    }
?>

