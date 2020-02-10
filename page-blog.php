<?php get_header() ?>
     <div id="sub-menu">
          <?php
             require_once(plugin_dir_path(__FILE__) . '/assets/landing-sub-menu.php');
         ?>
     </div>


    <h2 class="blog-page-title">Jared Munday Electric News and Information</h2>
    <section class="blog-page-section">
    <?php
         $the_query = new WP_Query( array(
                                        'posts_per_page'=>3,
                                        'post_type'=>'post',
                                        // 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
         )); 
                                    ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
       
            <article>
                <a href="<?php echo the_permalink() ?>">
                <div>
                    <h6><?php echo get_the_date();?></h6>
                    <h2><?php echo the_title();?></h2>
                </div>
                </a>
                <div>
                    <p><?php
                        echo the_content();
                    ?></p>
                </div> 
            </article>
        <?php
        endwhile;
        ?>
        <div class="pagination">
            <?php
            $big = 999999999; // need an unlikely integer
             echo paginate_links( array(
                'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $the_query->max_num_pages
            ) );
            
            wp_reset_postdata();
            ?>
        </div>

    </section>
    <section>
         <div class="services-title">
             <h2>-SERVICES-</h2>
         </div>
        <!-- *****All services loaded from parent of "services"  -->
         <?php 
             require_once(plugin_dir_path(__FILE__) . '/assets/services.php');
         ?>
     </section>
     <section>
         <div class="landing-vendors-section">
             <div class="landing-vendors-title">
                 <h2>Some of our vendors</h2>
             </div>
             <div class="landing-vendors-logos">
             <?php 
                 require_once(plugin_dir_path(__FILE__) . '/assets/vendors.php');
             ?>
             </div>
         </div>
     </section>
     
<?php get_footer(); ?>