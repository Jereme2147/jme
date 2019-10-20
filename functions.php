<?php 

function jme_setup() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Martel|Muli|Nunito+Sans&display=swap' );
     $located = locate_template( 'style.min.css' );
     if ($located != '' ) {
          echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/style.min.css" />';
     } else {
          echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/style.css" />';
     }
    //version must change every time we change css, change microtime to 
    //version number after finished developement. 
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css');
    // wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
    wp_enqueue_script("jquery");
    wp_register_script( 'main', get_theme_file_uri('/js/main.js') );
    wp_enqueue_script( 'main' );
    $translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
    //after wp_enqueue_script
    wp_localize_script( 'main', 'object_name', $translation_array );
    

}

add_action('wp_enqueue_scripts', 'jme_setup');

function theme_prefix_register_menus() {
    register_nav_menus(
        array(
            'primary_menu' => __( 'Primary Menu', 'jme' ),
        )
    );
}
add_action( 'init', 'theme_prefix_register_menus' );

?>