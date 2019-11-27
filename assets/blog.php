<?php 
    $postCounter = 0;
    while (have_posts()) {
        the_post();
    if ($postCounter == 0 ){
    ?>
    <article>
        <a href="<?php echo the_permalink() ?>">
        <div class="landing-current-blog">
            <h6><?php echo get_the_date();?></h6>
            <h5>Posted by <?php echo get_the_author();?></h5>
            <h3><?php echo the_title();?></h3>
        </div>
        </a>
        <div>
            <p><?php
                echo wp_trim_words(get_the_excerpt(), 40);
            ?></p>
            <div class="landing-blog-button">
                <a href="<?php echo the_permalink() ?>">
                    <h4>READ MORE</h4>
                </a>
            </div>
        </div>
        
    </article>
    <div class="previous-blogs-container">
    <?php
    $postCounter = $postCounter + 1;
    } else {
            ?>
            <a href="<?php echo the_permalink() ?>">
               <div class="previous-blogs">
                   <h4><?php echo the_title() ?></h4>
               </div>
            </a>
            
            <?php
            $postCounter = $postCounter + 1;
    }
    
}
    ?>   
    </div>     
    <div class="pagination">
        <?php echo paginate_links(); ?>
    </div>

        