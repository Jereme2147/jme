<section>
            <div class="page-title-div">
                <div>
                    <h2><?php echo the_title(); ?></h2>
                </div>
                <div class="title-services">
                    <?php //$output = wp_list_pages( array( 'title' => '' ) ); 
                        $pages = get_pages();
                        foreach ($pages as $page) {
                        $parent_title = get_the_title( $page->post_parent );
                        if($parent_title == 'Services'){
                    ?>
                    <a href="<?php echo get_page_link( $page->ID );?>"> <h3><?php echo $page->post_title ?> </h3></a>  
                        <?php

                        }
                        }
                    ?>
                </div>
            </div>
           
</section>