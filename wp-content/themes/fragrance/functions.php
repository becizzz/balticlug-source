<?php
/**
* Theme functions used by Fragrance.
*
* Authors: wpart
* Copyright: 2012
* {@link http://wpart.org/}
*
* Released under the terms of the GNU General Public License.
* You should have received a copy of the GNU General Public License,
* along with this software. In the main directory, see: /licensing/
* If not, see: {@link http://www.gnu.org/licenses/}.
*
* @package Fragrance.
* @since 1.0
*/

 ?>

<?php

function Fragrance_widgets_init() {   
	register_sidebar(array(
	    'id' => 'sidebar',
		'name' =>  'sidebar',
		'before_widget' => '<li id="%1$s" class="side widget %2$s">', 
		'after_widget' => '</li>',
		'before_title' => '<h3 class="title3">', 
		'after_title' => '</h3>' 
	));
 	register_sidebar(array(
	    'id' => 'bottombar',
		'name' =>  'bottombar',
		'before_widget' => '<li id="%1$s" class="bottomitem widget %2$s">', 
		'after_widget' => '</li>',
		'before_title' => '<h3 class="title3">', 
		'after_title' => '</h3>' 
	));

}

add_action( 'widgets_init', 'Fragrance_widgets_init');

if ( ! isset( $content_width ) )
	$content_width = 665;
	
	

function Fragrance_setup() {
	
	
		load_theme_textdomain( 'Fragrance', get_template_directory() . '/languages' );

	
	

	
	add_theme_support( 'post-thumbnails' ); 
	
	set_post_thumbnail_size( 300, 90, true );

	add_theme_support( 'automatic-feed-links' );
	
		register_nav_menus( array(
		'primary' =>'Primary Menu',
	) );		
	
	add_editor_style();
	add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );
	
	
	
	$custom_header_support = array(
	'default-image' =>get_template_directory_uri() . '/images/header.jpg',
	'width' => 960,
	'height' => 250,
	'header-text' => false,

	
	
	);
	
	add_theme_support( 'custom-header', $custom_header_support );



			$custom_backgound_support = array( 
				'default-image' => get_template_directory_uri() . '/images/bg1.jpg',
				'default-color' => 'E2DCCC',

			);
			
			add_theme_support( 'custom-background', $custom_backgound_support );









}
add_action( 'after_setup_theme', 'Fragrance_setup' );
	
	











function Fragrance_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'Fragrance_excerpt_length', 999 );


function Fragrance_excerpt_more($more) {
       global $post;
	return '<br /><a class="more" href="'. get_permalink($post->ID) . '">MORE</a>';
}
add_filter('excerpt_more', 'Fragrance_excerpt_more');



function Fragrance_comment_reply_script() {
	if ( comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'comment_form_before', 'Fragrance_comment_reply_script' );



function Fragrance_filter_wp_title( $title ) {
    // Get the Site Name
    $site_name = get_bloginfo( 'name' );
    // Prepend name
    $filtered_title = $site_name . $title;
    // If site front page, append description
    if ( is_front_page() ) {
        // Get the Site Description
        $site_description = get_bloginfo( 'description' );
        // Append Site Description to title
        $filtered_title .= $site_description;
    }
    // Return the modified title
    return $filtered_title;
}
// Hook into 'wp_title'
add_filter( 'wp_title', 'Fragrance_filter_wp_title' );

?>
