<?php
function simple_theme_setup(){
    //Featured Image Support

    add_theme_support('post-thumbnails');
    // Menu
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}

add_action('after_setup_theme','simple_theme_setup');

//excerpt length

 function set_excerpt_length(){
     return 60;
 }

 add_filter('excerpt_length','set_excerpt_length');


 /**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Widget Location

function init_widgets($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>',
        'after_title' =>'<h4>',
        'after_title' =>'</h4>'
    ));
}
add_action('widgets_init','init_widgets');

?>