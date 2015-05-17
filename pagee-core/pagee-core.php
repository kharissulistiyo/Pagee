<?php
/**
 * Core function for theme development
 *
 * function prefix is with pagee_
 *
 * @package pagee
 */


/**
 * Defining libraries directory.
 */

define('PAGEEPREFIX_VER_THEME', '1.0.0');
define('PAGEEPREFIX_CORE', get_template_directory_uri() . '/pagee-core');

/**
 * Defining vendor versions.
 */

define('PAGEEPREFIX_VER_BOOTSTRAP', '3.3.2');
define('PAGEEPREFIX_VER_FLEXSLIDER', '2.0');


/*
 * Custom image size
*/


if ( function_exists( 'add_image_size' ) ) {
  add_image_size( 'fullsize', 9999, 9999);
  add_image_size( 'post-thumbnail-featured', 745, 500, true );
  add_image_size( 'wide-thumb', 1190, 245, true );
}


/**
 * Post Class
 */

if ( ! function_exists( 'pagee_post_class' ) ) :

add_filter('post_class', 'pagee_post_class');
function pagee_post_class($classes){

  $classes[] = 'pagee_card-post pagee_card-post-excerpt';


  if(is_sticky() && is_front_page()){
    $classes[] = 'has-thumbnail thumb-right';
  }

  return $classes;

}

endif;



/**
 * Custom post excerpt lenght
 */

if ( ! function_exists( 'pagee_dev_post_excerpt' ) ) :

  function pagee_dev_post_excerpt($limit){
    $excerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
		      array_pop($excerpt);
		      $excerpt = implode(" ",$excerpt);
		} else {
		      $excerpt = implode(" ",$excerpt);
		}
		$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
		return $excerpt.'...';
  }

endif;
