<?php get_header() ?>
                <div id="sub-menu">
                    <div><a href="#"><h2>Generator Service</h2></a></div>
                    <div><a href="#"><h2>Alarms & Security</h2></a></div>
                    <div><a href="#"><h2>Res & Comm Electric</h2></a></div>
                </div>
                <section>
                    <!-- this section will be custom post -->
                    <div class="landing-section-services">
                        <div class="landing-top-image">
                            <img src="<?php echo get_template_directory_uri();?>/images/generac-gen-1900x1344.jpg" alt="">
                        </div>
                        <div class="landing-top-words">
                            <h1>Generator Service</h1>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum illo accusamus veritatis tenetur maxime reprehenderit voluptatibus, cupiditate nesciunt praesentium modi magnam atque velit odio, natus dolorum perferendis aperiam veniam eveniet?</p>
                            <a href="#"><h2>Read More</h2></a>
                        </div>
                    </div>
                   <!-- everything in landing section services should be loaded dynamically -->
                    <div class="landing-section-services">
                        <div class="landing-top-image landing-top-image-odd">
                            <img src="<?php echo get_template_directory_uri();?>/images/Fire-Alarm-Installation.jpg" alt="">
                        </div>
                        <div class="landing-top-words landing-top-words-odd">
                            <h1>Alarms and Security</h1>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum illo accusamus veritatis tenetur maxime reprehenderit voluptatibus, cupiditate nesciunt praesentium modi magnam atque velit odio, natus dolorum perferendis aperiam veniam eveniet?</p>
                            <a href="#"><h2>Read More</h2></a>
                        </div>
                    </div>
                    <div class="landing-section-services">
                        <div class="landing-top-image">
                            <img src="<?php echo get_template_directory_uri();?>/images/clean-panel.jpg" alt="">
                        </div>
                        <div class="landing-top-words">
                            <h1>Ressidential & Commercial Electric</h1>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum illo accusamus veritatis tenetur maxime reprehenderit voluptatibus, cupiditate nesciunt praesentium modi magnam atque velit odio, natus dolorum perferendis aperiam veniam eveniet?</p>
                            <a href="#"><h2>Read More</h2></a>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="services-title">
                        <h2>-SERVICES-</h2>
                    </div>
                   <!-- *****will be dynamically loaded  -->
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