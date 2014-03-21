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
    // Circle logo
	wp.customize( 'casper_logo_circle', function( value ) {
        value.bind( function( to ) {
        	if (false == to){
	            $( '.blog-logo img' ).css( {'-webkit-border-radius' : '0',
	        								'-moz-border-radius' : '0',
	        								'border-radius' : '0'
	        	} );
        	} else {
	            $( '.blog-logo img' ).css( {'-webkit-border-radius' : '50%',
	        								'-moz-border-radius' : '50%',
	        								'border-radius' : '50%'
	        	} );
	        }
        } );
    });
    // Logo frame
	wp.customize( 'casper_logo_frame', function( value ) {
        value.bind( function( to ) {
        	if (false == to){
	            $( '.blog-logo img' ).css( {'border' : 'none',
											'-webkit-box-shadow' : 'none',
											'-moz-box-shadow' : 'none',
											'box-shadow' : 'none' 
	        	} );
        	} else {
	            $( '.blog-logo img' ).css( {'border' : '3px solid white',
	    									'-webkit-box-shadow' : '0 1px 1px rgba(0,0,0,0.3)',
	   										'-moz-box-shadow' : '0 1px 1px rgba(0,0,0,0.3)',
	   										'box-shadow' : '0 1px 1px rgba(0,0,0,0.3);} )' 
	        	} );
	        }
	    });
    });
    // Footer info
	wp.customize( 'casper_custom_footer', function( value ) {
        value.bind( function( to ) {
        	if (false == to){
	            $( '.copywright').html('<a href="#">Casper WP</a> &bull; Inspired by <a class="icon-ghost" href="#">Ghost</a>');
        	} else {
	            $( '.copywright').html(to);
	        }
        } );
} )( jQuery );
