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
            <h2><?php echo the_title();?></h2>
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
    } else if($postCounter < 3){
            ?>
            <a href="<?php echo the_permalink() ?>">
               <div class="previous-blogs">
                   <h2><?php echo the_title() ?></h2>
               </div>
            </a>
            
            <?php
            $postCounter = $postCounter + 1;
    }else {
            ?>
            <a href="<?php echo get_home_url()?>/blog">
               <h2>More Posts</h2>
            </a>
            
            <?php
            break;
    }
    
}
    ?>   
    </div>     

        