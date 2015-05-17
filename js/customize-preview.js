/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 * Things like site title and description changes.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '#masthead .site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '#masthead .site-description' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			$( '#masthead .site-title a, #masthead .site-description' ).css( {
				'clip': 'auto',
				'color': to,
				'position': 'relative'
			} );
		} );
	} );

	/*
	// Header background color.
	api( 'header_background_color', function( value ) {
		value.bind( function( to ) {
			$( '#masthead.site-header' ).css( {
				'background-color': to
			} );
		}
	} );

	// Color Scheme CSS.
	api.bind( 'preview-ready', function() {
		api.preview.bind( 'update-color-scheme-css', function( css ) {
			$style.html( css );
		} );
	} );
	*/

} )( jQuery );
