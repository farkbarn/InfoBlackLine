/* A polyfill for browsers that don't support ligatures. */
/* The script tag referring to this file must be placed before the ending body tag. */

/* To provide support for elements dynamically added, this script adds
   method 'icomoonLiga' to the window object. You can pass element references to this method.
*/
(function () {
    'use strict';
    function supportsProperty(p) {
        var prefixes = ['Webkit', 'Moz', 'O', 'ms'],
            i,
            div = document.createElement('div'),
            ret = p in div.style;
        if (!ret) {
            p = p.charAt(0).toUpperCase() + p.substr(1);
            for (i = 0; i < prefixes.length; i += 1) {
                ret = prefixes[i] + p in div.style;
                if (ret) {
                    break;
                }
            }
        }
        return ret;
    }
    var icons;
    if (!supportsProperty('fontFeatureSettings')) {
        icons = {
            'home': '&#xe900;',
            'house': '&#xe900;',
            'home2': '&#xe901;',
            'house2': '&#xe901;',
            'home3': '&#xe902;',
            'house3': '&#xe902;',
            'newspaper': '&#xe904;',
            'news': '&#xe904;',
            'price-tag': '&#xe935;',
            'price-tags': '&#xe936;',
            'display': '&#xe956;',
            'screen': '&#xe956;',
            'mobile': '&#xe958;',
            'cell-phone': '&#xe958;',
            'tablet': '&#xe95a;',
            'mobile3': '&#xe95a;',
            'spinner9': '&#xe982;',
            'loading10': '&#xe982;',
            'spinner10': '&#xe983;',
            'loading11': '&#xe983;',
            'search': '&#xe986;',
            'magnifier': '&#xe986;',
            'zoom-in': '&#xe987;',
            'magnifier2': '&#xe987;',
            'zoom-out': '&#xe988;',
            'magnifier3': '&#xe988;',
            'menu': '&#xe9bd;',
            'list3': '&#xe9bd;',
            'menu2': '&#xe9be;',
            'options2': '&#xe9be;',
            'menu3': '&#xe9bf;',
            'options3': '&#xe9bf;',
            'menu4': '&#xe9c0;',
            'options4': '&#xe9c0;',
            'plus': '&#xea0a;',
            'add': '&#xea0a;',
            'minus': '&#xea0b;',
            'subtract': '&#xea0b;',
            'font-size': '&#xea61;',
            'wysiwyg3': '&#xea61;',
            'google': '&#xea88;',
            'brand2': '&#xea88;',
            'google2': '&#xea89;',
            'brand3': '&#xea89;',
            'google3': '&#xea8a;',
            'brand4': '&#xea8a;',
            'google-plus': '&#xea8b;',
            'brand5': '&#xea8b;',
            'google-plus2': '&#xea8c;',
            'brand6': '&#xea8c;',
            'google-plus3': '&#xea8d;',
            'brand7': '&#xea8d;',
            'hangouts': '&#xea8e;',
            'brand8': '&#xea8e;',
            'facebook': '&#xea90;',
            'brand10': '&#xea90;',
            'facebook2': '&#xea91;',
            'brand11': '&#xea91;',
            'instagram': '&#xea92;',
            'brand12': '&#xea92;',
            'whatsapp': '&#xea93;',
            'brand13': '&#xea93;',
            'spotify': '&#xea94;',
            'brand14': '&#xea94;',
            'telegram': '&#xea95;',
            'brand15': '&#xea95;',
            'twitter': '&#xea96;',
            'brand16': '&#xea96;',
            'vine': '&#xea97;',
            'brand17': '&#xea97;',
            'vk': '&#xea98;',
            'brand18': '&#xea98;',
            'renren': '&#xea99;',
            'brand19': '&#xea99;',
            'sina-weibo': '&#xea9a;',
            'brand20': '&#xea9a;',
            'feed2': '&#xea9b;',
            'rss': '&#xea9b;',
            'feed3': '&#xea9c;',
            'rss2': '&#xea9c;',
            'youtube': '&#xea9d;',
            'brand21': '&#xea9d;',
            'youtube2': '&#xea9e;',
            'brand22': '&#xea9e;',
            'html-five': '&#xeae4;',
            'w3c': '&#xeae4;',
            'html-five2': '&#xeae5;',
            'w3c2': '&#xeae5;',
            'css3': '&#xeae6;',
            'w3c3': '&#xeae6;',
          '0': 0
        };
        delete icons['0'];
        window.icomoonLiga = function (els) {
            var classes,
                el,
                i,
                innerHTML,
                key;
            els = els || document.getElementsByTagName('*');
            if (!els.length) {
                els = [els];
            }
            for (i = 0; ; i += 1) {
                el = els[i];
                if (!el) {
                    break;
                }
                classes = el.className;
                if (/icon-/.test(classes)) {
                    innerHTML = el.innerHTML;
                    if (innerHTML && innerHTML.length > 1) {
                        for (key in icons) {
                            if (icons.hasOwnProperty(key)) {
                                innerHTML = innerHTML.replace(new RegExp(key, 'g'), icons[key]);
                            }
                        }
                        el.innerHTML = innerHTML;
                    }
                }
            }
        };
        window.icomoonLiga();
    }
}());
