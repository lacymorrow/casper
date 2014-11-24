/**
 * Main JS file for Casper behaviours
 */

/*globals jQuery, document */
var Casper = (function (window, $) {
    "use strict";

    /*
    // @name: Responsive-img.js
    // @version: 1.1
    // 
    // Copyright 2013-2014 Koen Vendrik, http://kvendrik.com
    // Licensed under the MIT license
    */
    var makeImagesResponsive = function () {
        var e = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
            t = document.getElementsByTagName("body")[0].getElementsByTagName("img"),
            r = window.devicePixelRatio ? window.devicePixelRatio >= 1.2 ? 1 : 0 : 0,
            i,
            n;
        if (t.length === 0) {
            return;
        }
        n = t[0].hasAttribute ? function (e, t) {
            return e.hasAttribute(t);
        } : function (e, t) {
            return e.getAttribute(t) !== null;
        };
        for (i = 0; i < t.length; i++) {
            var s = t[i],
                o = r && n(s, "data-src2x") ? "data-src2x" : "data-src",
                u = r && n(s, "data-src-base2x") ? "data-src-base2x" : "data-src-base";
            s.onload = function (q) {
                this.style.opacity = '1';
            };
            if (!n(s, o)) continue;
            var a = n(s, u) ? s.getAttribute(u) : "",
                f = s.getAttribute(o),
                l = f.split(",");
            for (var c = 0; c < l.length; c++) {
                var h = l[c].replace(":", "||").split("||"),
                    p = h[0],
                    d = h[1],
                    v, m;
                if (p.indexOf("<") !== -1) {
                    v = p.split("<");
                    if (l[c - 1]) {
                        var g = l[c - 1].split(/:(.+)/),
                            y = g[0].split("<");
                        m = e <= v[1] && e > y[1]
                    } else m = e <= v[1]
                } else {
                    v = p.split(">");
                    if (l[c + 1]) {
                        var b = l[c + 1].split(/:(.+)/),
                            w = b[0].split(">");
                        m = e >= v[1] && e < w[1]
                    } else m = e >= v[1]
                }
                if (m) {
                    var E = d.indexOf("//") !== -1 ? 1 : 0,
                        S;
                    E === 1 ? S = d : S = a + d;
                    s.src !== S && s.setAttribute("src", S);
                    break
                }
            }
        }
    }

    var init = function () {
        $(".post-content").fitVids();
        $(window).load(function () {
            makeImagesResponsive();
        });
    }

    $(document).ready(function() {
        init();
    });

    return {
    }

}(window, jQuery));