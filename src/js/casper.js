/**
 * Main JS file for Casper behaviours
 */

/*globals jQuery, document */
(function( window, $ ) {
    'use strict';

    /*
    // @name: Responsive-img.js
    // @version: 1.1
    //
    // Copyright 2013-2014 Koen Vendrik, http://kvendrik.com
    // Licensed under the MIT license
    */
    var makeImagesResponsive = function() {
        var e = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
            t = document.getElementsByTagName( 'body' )[0].getElementsByTagName( 'img' ),
            r = window.devicePixelRatio ? window.devicePixelRatio >= 1.2 ? 1 : 0 : 0,
            a, b, c, d, g, f, h, i, l, m, n, o, p, s, u, v, w, y, E, S;
        if ( 0 === t.length ) {
            return;
        }
        n = t[0].hasAttribute ? function( e, t ) {
            return e.hasAttribute( t );
        } : function( e, t ) {
            return null !== e.getAttribute( t );
        };
        for ( i = 0; i < t.length; i++ ) {
            s = t[i],
            o = r && n( s, 'data-src2x' ) ? 'data-src2x' : 'data-src',
            u = r && n( s, 'data-src-base2x' ) ? 'data-src-base2x' : 'data-src-base';
            s.onload = function() {
                this.style.opacity = '1';
            };
            if ( ! n( s, o ) ) {
 continue;
 }
            a = n( s, u ) ? s.getAttribute( u ) : '',
            f = s.getAttribute( o ),
            l = f.split( ',' );
            for ( c = 0; c < l.length; c++ ) {
                h = l[c].replace( ':', '||' ).split( '||' ),
                p = h[0],
                d = h[1];
                if ( p.indexOf( '<' ) !== -1 ) {
                    v = p.split( '<' );
                    if ( l[c - 1] ) {
                        g = l[c - 1].split( /:(.+)/ ),
                        y = g[0].split( '<' );
                        m = e <= v[1] && e > y[1];
                    } else {
                        m = e <= v[1];
                    }
                } else {
                    v = p.split( '>' );
                    if ( l[c + 1] ) {
                        b = l[c + 1].split( /:(.+)/ ),
                        w = b[0].split( '>' );
                        m = e >= v[1] && e < w[1];
                    } else {
                        m = e >= v[1];
                    }
                }
                if ( m ) {
                    E = d.indexOf( '//' ) !== -1 ? 1 : 0;
                    1 === E ? S = d : S = a + d;
                    s.src !== S && s.setAttribute( 'src', S );
                    break;
                }
            }
        }
    };

    var init = function() {
        $( '.post-content' ).fitVids();
        $( window ).load(function() {
            makeImagesResponsive();
        });
    };

    $( document ).ready(function() {
        init();
    });

    return {
    };

}( window, jQuery ) );
