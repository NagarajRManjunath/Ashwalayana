<?php
add_theme_support( 'menus' );
add_theme_support( 'custom-logo' );
add_theme_support( 'Event' );
add_theme_support( 'post-thumbnails' );
add_image_size('small-thambnail',400,189,true);
add_image_size('banner-thambnail',520,820,array('left','top'));
//set_post_thumbnail_size( 450, 200);

function register_currentsite_file_path()
{
  wp_enqueue_style('site-custom-css',get_template_directory_uri()."/css/custom.css");
  wp_enqueue_style('site-custom-css2',get_template_directory_uri()."/css/bootstrap.min.css");
  wp_enqueue_style('site-custom-css3',get_template_directory_uri()."/css/font-awesome.min.css");
  wp_enqueue_style('site-custom-css4',get_template_directory_uri()."/css/common.css");
  wp_enqueue_script('my_js', get_template_directory_uri() . '/js/jquery-3.5.1.min.js');
  wp_enqueue_script('my_bjs', get_template_directory_uri() . '/js/bootstrap.min.js');
  wp_enqueue_script('my_cjs', get_template_directory_uri() . '/js/custom.js');
  wp_enqueue_script('my_ujs', get_template_directory_uri() . '/js/ui/jquery-ui.min.js');
}

add_action('wp_enqueue_scripts','register_currentsite_file_path');

if( !defined('THEME_IMG_PATH')){
   define( 'THEME_IMG_PATH', get_template_directory_uri() . '/images/' );
  }

function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __('Primary Menu'),
      'footer' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_additional_class_on_a( $atts, $item, $args ) {
    $class = 'nav-link m-2 menu-item nav-active color-white'; 
    $atts['class'] = $class;
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_additional_class_on_a', 10, 3 );

add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );
 
function my_post_image_html( $html, $post_id, $post_image_id ) {
 
  $html = '<a href="' . get_permalink( $post_id ) . '">' . $html . '</a>';
  return $html;
 
}
?>