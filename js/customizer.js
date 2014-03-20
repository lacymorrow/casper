/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// blog title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.blog-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.blog-description' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to || '' === to || false === to) {
				$( 'header .blog-title a, header .blog-description' ).css( {
					'color' : 'inherit'
				} );
			} else {
				$( 'header .blog-title a, header .blog-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
	// Header Color
	wp.customize( 'tcx_header_color', function( value ) {
        value.bind( function( to ) {
            $( '.site-head' ).css( 'color', to );
        } );
    });
	// Link color
	wp.customize( 'tcx_link_color', function( value ) {
        value.bind( function( to ) {
            $( 'section a' ).css( 'color', to );
        } );
    });
} )( jQuery );
