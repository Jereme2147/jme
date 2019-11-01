<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );

	foreach( $mypages as $page ) {		
		$content = $page->post_content;
		if ( ! $content ) // Check for empty page
			continue;

		$content = apply_filters( 'the_content', $content );
    ?>
        <div class="service-item-card">
            <h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
		    <div>
                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($page->ID) );?>
                <img src="<?php echo $url;?>" alt="<?php echo $page->post_title; ?> photo">
            </div>
        </div>
		
	<?php
	}	


?>