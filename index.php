<?php get_header() ?>
    <!-- <div class="landing-banner-image">
        <img class="large-photo"src="<?php// echo get_template_directory_uri();?>/images/headers/landingtruck2-1900x761.jpg" alt="banner with JME truck">
        <img class="small-photo"src="<?php// echo get_template_directory_uri();?>/images/headers/landing-truck-900x558.jpg" alt="banner with JME truck">
    </div> -->
    <!-- <div style="height: 25vh"></div> -->
    <!-- <div class="landing-page-spacer"></div> -->
    <div>
        <img class="landing-large-photo"src="<?php echo get_template_directory_uri();?>/images/headers/landingtruck2-1900x761.jpg" alt="banner with JME truck">
        <img class="landing-small-photo"src="<?php echo get_template_directory_uri();?>/images/headers/landing-truck-900x558.jpg" alt="banner with JME truck">
    </div>

    <section>
         <div class="services-title">
             <h2>-SERVICES-</h2>
         </div>
        <!-- *****All services loaded from parent of "services"  -->
         <?php 
             require_once(plugin_dir_path(__FILE__) . '/assets/services.php');
         ?>
     </section>
     <!-- <div id="sub-menu">
          <?php
            //  require_once(plugin_dir_path(__FILE__) . '/assets/landing-sub-menu.php');
         ?>
     </div> -->
    <section  class="landing-blog-highlight">
     <?php 
         require_once(plugin_dir_path(__FILE__) . '/assets/landing-blog.php');
     ?>
    </section>
         <section>
         <!-- Highlight services X 3 or however many are chosen -->
         <?php
             require_once(plugin_dir_path(__FILE__) . '/assets/landing-highlight.php');
         ?>
     </section>
    


     
    <!-- Blog section -->
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