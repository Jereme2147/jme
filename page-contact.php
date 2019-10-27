<?php 
    get_header();
    require_once(plugin_dir_path(__FILE__) . '/assets/page-title-header.php');
?>

<?php 
     while(have_posts()) {
        the_post();
        ?> 
        <section>
            <div class="contact-container">
                <div class="contact-social">
                <?php
                    require_once(plugin_dir_path(__FILE__) . '/assets/social-anchors.php');
                ?>
                    
                </div>
                <div class="contact-form">
                    <h2>Quick Message Form</h2>
                     <?php
                        the_content();
                    ?>
                </div>
                <div class="contact-information">
                    <h2>Jared Munday Electric, inc.</h2>
                    <h2>828-355-9024</h2>
                    <h3>PO Box 2077</h3>
                    <h3>Boone, NC 28607</h3>
                    <a href="#"><h3>jaredmundayelectric@gmail.com</h3></a>
                </div>
            </div>
       
        </section>
        <?php
     }
?>
<?php 
    get_footer();
?>