<?php

// Enqueu the Style
// function enqueue_styles(){
//     wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@100;300;400;500;700;900&family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap', false );
//     wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/css/reset.css', array(), null );
//     wp_enqueue_style( 'common', get_stylesheet_directory_uri() . '/css/common.css', array(), null );
//     wp_enqueue_style( 'base', get_stylesheet_directory_uri() . '/css/base.css', array(), null );    
//     wp_enqueue_style( 'header', get_stylesheet_directory_uri() . '/css/header.css', array(), null );
//     wp_enqueue_style( 'footer', get_stylesheet_directory_uri() . '/css/footer.css', array(), null );
//     wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css', array(), null );
// }
// add_action ('wp_enqueue_scripts', 'enqueue_styles');

// // Remove Default Wordpress Jquery
// function remove_jquery_enqueue() {
//     wp_deregister_script( 'jquery' );
// }
// add_action( 'wp_enqueue_scripts', 'remove_jquery_enqueue' );Z


// // post pagination
// function your_themes_pagination(){
//     global $wp_query; 
//     echo paginate_links();
// }

// // Menu
// function wp_menu() {

//     register_nav_menus(
//         array(
//             'primary_menu' => __( 'Primary Menu' ),
//         )
//     );
// }
// add_action( 'init', 'wp_menu' );

// // Menu Image
// add_filter( 'menu_image_default_sizes', function($sizes){
  
//     // remove the default 36x36 size
//     unset($sizes['menu-36x36']);
    
//     // add a new size
//     $sizes['menu-50x50'] = array(50,50);
    
//     // return $sizes (required)
//     return $sizes;
    
// });

// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
// function my_css_attributes_filter($var) {
//   return is_array($var) ? array() : '';
// }

// wp_link_pages( array(
//     'before'           => '',
//     'after'            => '',
//     'link_before'      => '',
//     'link_after'       => '',
//     'next_or_number'   => 'next',
//     'separator'        => ' ',
//     'nextpagelink'     => 'Next page',
//     'previouspagelink' => 'Previous page',
//     'pagelink'         => '%',
//     'echo'             => 1
//     )
// );

// // Add more-link text to excerpt 
// function new_excerpt_more( $excerpt ) { 
//     return $excerpt. '<a class="more-link" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'baskerville') . ' </a>'; 
// } 
// add_filter( 'get_the_excerpt', 'new_excerpt_more' );

