<?php 
    $postCounter = 0;
    while (have_posts()) {
        the_post();
    if ($postCounter == 0 ){
    ?>
    <article>
        <a href="<?php echo the_permalink() ?>">
        <div class="landing-current-blog">
            <h3><?php echo get_the_date();?></h3>
            <h3>Posted by <?php echo get_the_author();?></h3>
            <h3><?php echo the_title();?></h3>
        </div>
        </a>
        <p><?php
            echo the_content();
         ?></p>
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

        