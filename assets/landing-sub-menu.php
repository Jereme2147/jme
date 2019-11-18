<?php
 $the_query = new WP_Query( array(
                                'post_type'=>'landing',
 )); 
                            ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<div><a href="<?php echo the_permalink();?>">
<?php //this information is in custom fields for landing-items
    $custom_field_keys = get_post_custom_keys();
        foreach ( $custom_field_keys as $key => $value ) {
            $valuet = $value;
            if ( '_' == $valuet{0} )
                continue;
            if ($value == 'short'){
                $my_value = get_post_custom_values($valuet);
                echo '<h2>'.$my_value{0}.'</h2></a>';
                };
            }
?>
</div>
<?php
endwhile;
?>