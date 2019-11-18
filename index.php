<?php get_header() ?>
                <div id="sub-menu">
                    <div><a href="#"><h2>Generators</h2></a></div>
                    <div><a href="#"><h2>Security</h2></a></div>
                    <div><a href="#"><h2>Electric</h2></a></div>
                </div>
                <section>
                    <!-- Highlight services X 3 or however many are chosen -->
                    <?php
                        require_once(plugin_dir_path(__FILE__) . '/assets/landing-highlight.php');
                    ?>
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
               <!-- Blog section -->
            <section  class="landing-blog-highlight">
             <?php 
                require_once(plugin_dir_path(__FILE__) . '/assets/blog.php');
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