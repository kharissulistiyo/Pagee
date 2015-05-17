<?php

/**
 * Color scheme
 * Generated from customizer
 * @since   1.0.0
 */


if ( ! function_exists( 'pagee_header_background_color_css' ) ) :
/**
* Enqueues front-end CSS for the header background color.
*
* @since 	1.0
*
* @see wp_add_inline_style()
*/
function pagee_header_background_color_css() {

  $default = array(
    'header_background_color' => '#ffffff',
    'border_color'            => '#E6E8E4',
    'text_color'              => '#4F5151',
    'secondary_color'         => '#A8AAAA',
    'link_color'              => '#21A2E0',
    'link_color_hover'        => '#A0D16C',
    'metadata_background'     => '#F4FDF0'
  );

	$header_background_color = get_theme_mod( 'header_background_color', $default['header_background_color'] );
  $border_color = get_theme_mod( 'border_color', $default['border_color'] );
  $text_color = get_theme_mod( 'text_color', $default['text_color'] );
  $seconday_color = get_theme_mod( 'secondary_color', $default['secondary_color']  );
  $link_color = get_theme_mod( 'link_color', $default['link_color'] );
  $link_color_hover = get_theme_mod( 'link_color_hover', $default['link_color_hover'] );
  $metadata_background = get_theme_mod( 'metadata_background', $default['metadata_background'] );

  $css = '';

  if( $header_background_color != '' && $header_background_color != $default['header_background_color'] ) {
  	$css .= '
  		/* Custom Header Background Color */
  		#masthead.site-header,
      #colophon {
  			background-color: '.esc_attr($header_background_color).';
  		}
  	';
  }

  if( $border_color != '' && $border_color != $default['border_color'] ){
    $css .= '
      /* Custom Border Color */
      #masthead,
      #masthead .site-branding,
      #secondary,
      #colophon,
      table td,
      table th,
      .pagee_card-post-excerpt,
      .page-header h1.page-title::before,
      .page-header h1.page-title::after{
        border-color: '.esc_attr($border_color).';
      }
      hr,
      #masthead .site-branding:hover{
        background-color: '.esc_attr($border_color).';
      }
    ';
  }

  if( $text_color != '' && $text_color != $default['text_color']  ) {
    $css .= '
      /* Custom Text Color */
      body,
      button,
      input,
      select,
      textarea,
      blockquote,
      h1, h2, h3, h4, h5, h6,
      .pagee_card-post-excerpt h1.entry-title a,
      .pagee_card-widget.widget_recent_entries ul li a,
      .pagee_card-widget.widget_recent_comments ul li a,
      .pagee_card-widget.widget_archive ul li a,
      .pagee_card-widget.widget_categories ul li a,
      .pagee_card-widget.widget_meta ul li a,
      .pagee_card-widget.widget_pages ul li a,
      .pagee_card-widget.widget_nav_menu ul li a,
      .pagee_card-widget.widget_rss ul li a,
      .pagee_card-widget ul.widget-links li a,
      .pagee_card-widget.widget_tag_cloud a,
      .pagee_card-widget .widget-title a {
        color: '.esc_attr($text_color).';
      }
    ';
  }

  if( $seconday_color != '' && $seconday_color != $default['secondary_color'] ){
    $css .= '
      /* Custom Secondary Color */
      .comment-metadata,
      .pagee_card-metadata,
      .comment-metadata a,
      .pagee_card-metadata a,
      .comment-metadata a:visited,
      .pagee_card-metadata a:visited,
      .taxonomy-description,
      #colophon,
      #colophon a,
      #colophon a:visited,
      #masthead #site-navigation ul > li > a {
        color: '.esc_attr($seconday_color).';
      }

      @media only screen and (max-width: 782px){
        #masthead #site-navigation ul ul.sub-menu li a{
          color: '.esc_attr($seconday_color).';
        }
      }

    ';
  }

  if( $link_color != '' && $link_color != $default['link_color'] ){
    $css .= '
      /* Custom Link Color */
      a,
      a:visited,
      .cat-links a,
      .menu-toggle,
      .tags-links a:visited,
      .edit-link a:visited,
      .cat-links a:visited,
      .tags-links a:visited,
      .edit-link a:visited,
      .cat-links:before,
      .tags-links:before,
      .edit-link:before,
      .wp-caption .wp-caption-text,
      h1.site-title a:hover{
        color: '.esc_attr($link_color).';
      }
      .button,
      button,
      input[type="button"],
      input[type="reset"],
      input[type="submit"],
      .pagee_card-post-excerpt h1.entry-title.has-post-label span.post-label{
        background-color: '.esc_attr($link_color).';
      }
      .section-heading, .widget-title{
        border-color: '.esc_attr($link_color).';
      }

      @media only screen and (min-width: 783px){
        ul.nav-menu .sub-menu a{
          background-color: '.esc_attr($link_color).';
        }
      }
    ';
  }

  if( $link_color_hover != '' && $link_color_hover != $default['link_color_hover'] ){
    $css .= '
      /* Custom Hovered Link and Button Color */
      a:hover,
      a:focus,
      a:active,
      .site-title a:hover,
      .comment-metadata a:hover,
      .pagee_card-metadata a:hover,
      #masthead #site-navigation ul > li > a:hover{
        color: '.esc_attr($link_color_hover).';
      }
      .button:hover,
      button:hover,
      input[type="button"]:hover,
      input[type="reset"]:hover,
      input[type="submit"]:hover,
      .menu-toggle:hover {
        background-color: '.esc_attr($link_color_hover).';
      }

      @media only screen and (min-width: 783px){
        ul.nav-menu .sub-menu a:hover{
          background-color: '.esc_attr($link_color_hover).';
        }
      }

      @media only screen and (max-width: 782px){
        #masthead #site-navigation ul ul.sub-menu li a:hover{
          color: '.esc_attr($link_color_hover).';
        }
      }
    ';
  }

  if( $metadata_background != '' && $metadata_background != $default['metadata_background'] ){
    $css .= '
      /* Custom Metadata Background Color */
      .cat-links, .tags-links, .edit-link,
      .wp-caption .wp-caption-text {
        background-color: '.esc_attr($metadata_background).';
      }
    ';
  }

	wp_add_inline_style( 'pagee-style', sprintf( $css ) );

}
endif;

add_action( 'wp_enqueue_scripts', 'pagee_header_background_color_css', 11 );



/**
 * Register color schemes for Pagee.
 *
 * Can be filtered with {@see 'pagee_color_schemes'}.
 *
 * The order of colors in a colors array:
 *
 * @since   1.0.0
 *
 * @return array An associative array of color scheme options.
 */
function pagee_get_color_schemes() {
	return apply_filters( 'pagee_color_schemes', array(
		'header_background_color' => array(
			'label'  => __( 'Header Background Color', 'pagee' ),
			'color' => '#000'
		),
	) );
}



/**
 * Returns CSS for the color schemes.
 *
 * @since   1.0.0
 *
 * @param array $colors Color scheme colors.
 * @return string Color scheme CSS.
 */
function pagee_get_color_scheme_css( $colors ) {
	$colors = wp_parse_args( $colors, array(
		'header_background_color'     => '',
	) );

  $css = <<<CSS

	/* Header Background */

  #masthead.site-header,
  #colophon, {
    background-color: {$colors['header_background_color']};
  }

CSS;

  return $css;

}




/**
 * Output an Underscore template for generating CSS for the color scheme.
 *
 * The template generates the css dynamically for instant display in the Customizer
 * preview.
 *
 * @since   1.0.0
 */
function pagee_color_scheme_css_template() {
	$colors = array(
		'header_background_color'     => '{{ data.header_background_color }}'
	);
	?>
	<script type="text/html" id="tmpl-pagee-color-scheme">
		<?php echo pagee_get_color_scheme_css( $colors ); ?>
	</script>
	<?php
}
add_action( 'customize_controls_print_footer_scripts', 'pagee_color_scheme_css_template' );
