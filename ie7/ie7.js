/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'ico_info_BL\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-home': '&#xe900;',
		'icon-home2': '&#xe901;',
		'icon-home3': '&#xe902;',
		'icon-newspaper': '&#xe904;',
		'icon-price-tag': '&#xe935;',
		'icon-price-tags': '&#xe936;',
		'icon-display': '&#xe956;',
		'icon-mobile': '&#xe958;',
		'icon-tablet': '&#xe95a;',
		'icon-spinner9': '&#xe982;',
		'icon-spinner10': '&#xe983;',
		'icon-search': '&#xe986;',
		'icon-zoom-in': '&#xe987;',
		'icon-zoom-out': '&#xe988;',
		'icon-menu': '&#xe9bd;',
		'icon-menu2': '&#xe9be;',
		'icon-menu3': '&#xe9bf;',
		'icon-menu4': '&#xe9c0;',
		'icon-plus': '&#xea0a;',
		'icon-minus': '&#xea0b;',
		'icon-font-size': '&#xea61;',
		'icon-google': '&#xea88;',
		'icon-google2': '&#xea89;',
		'icon-google3': '&#xea8a;',
		'icon-google-plus': '&#xea8b;',
		'icon-google-plus2': '&#xea8c;',
		'icon-google-plus3': '&#xea8d;',
		'icon-hangouts': '&#xea8e;',
		'icon-facebook': '&#xea90;',
		'icon-facebook2': '&#xea91;',
		'icon-instagram': '&#xea92;',
		'icon-whatsapp': '&#xea93;',
		'icon-spotify': '&#xea94;',
		'icon-telegram': '&#xea95;',
		'icon-twitter': '&#xea96;',
		'icon-vine': '&#xea97;',
		'icon-vk': '&#xea98;',
		'icon-renren': '&#xea99;',
		'icon-sina-weibo': '&#xea9a;',
		'icon-rss': '&#xea9b;',
		'icon-rss2': '&#xea9c;',
		'icon-youtube': '&#xea9d;',
		'icon-youtube2': '&#xea9e;',
		'icon-html-five': '&#xeae4;',
		'icon-html-five2': '&#xeae5;',
		'icon-css3': '&#xeae6;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
