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
	// Header text color
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to || '' === to || false === to) {
				$( '.page header .blog-title a, .page header .blog-description' ).css( {
					'color' : 'inherit'
				} );
			} else {
				$( '.page header .blog-title a, .page header .blog-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
	// Home Header text color
	wp.customize( 'casper_header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to || '' === to || false === to) {
				$( '.home header .blog-title a, .home header .blog-description' ).css( {
					'color' : 'inherit'
				} );
			} else {
				$( '.home header .blog-title a, .home header .blog-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
	// Header Color
	wp.customize( 'casper_header_color', function( value ) {
        value.bind( function( to ) {
            $( '.site-head' ).css( 'background-color', to );
        } );
    });
	// Link color
	wp.customize( 'casper_link_color', function( value ) {
        value.bind( function( to ) {
            $( 'section a' ).css( 'color', to );
        } );
    });
    // Hover color
	wp.customize( 'casper_hover_color', function( value ) {
        value.bind( function( to ) {
            $( 'a:hover' ).css( 'color', to );
        } );
    });
} )( jQuery );
