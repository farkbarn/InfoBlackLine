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
		'icon-zoomout': '&#xe903;',
		'icon-zoomin': '&#xe905;',
		'icon-arrow-left': '&#xf040;',
		'icon-arrow-right': '&#xf03e;',
		'icon-chevron-left': '&#xf0a4;',
		'icon-chevron-right': '&#xf078;',
		'icon-cloud-download2': '&#xf00b;',
		'icon-jump-left': '&#xf0a5;',
		'icon-jump-right': '&#xf0a6;',
		'icon-playback-fast-forward': '&#xf0bd;',
		'icon-playback-rewind': '&#xf0bc;',
		'icon-rss3': '&#xf034;',
		'icon-three-bars': '&#xf05e;',
		'icon-triangle-left': '&#xf044;',
		'icon-triangle-right': '&#xf05a;',
		'icon-home': '&#xe900;',
		'icon-home2': '&#xe901;',
		'icon-home3': '&#xe902;',
		'icon-newspaper': '&#xe904;',
		'icon-price-tag': '&#xe935;',
		'icon-price-tags': '&#xe936;',
		'icon-display': '&#xe956;',
		'icon-mobile': '&#xe958;',
		'icon-tablet': '&#xe95a;',
		'icon-spinner': '&#xe97a;',
		'icon-spinner2': '&#xe97b;',
		'icon-spinner3': '&#xe97c;',
		'icon-spinner4': '&#xe97d;',
		'icon-spinner5': '&#xe97e;',
		'icon-spinner6': '&#xe97f;',
		'icon-spinner7': '&#xe980;',
		'icon-spinner8': '&#xe981;',
		'icon-spinner9': '&#xe982;',
		'icon-spinner10': '&#xe983;',
		'icon-search': '&#xe986;',
		'icon-zoom-in': '&#xe987;',
		'icon-zoom-out': '&#xe988;',
		'icon-list': '&#xe9ba;',
		'icon-list2': '&#xe9bb;',
		'icon-menu': '&#xe9bd;',
		'icon-menu2': '&#xe9be;',
		'icon-menu3': '&#xe9bf;',
		'icon-menu4': '&#xe9c0;',
		'icon-cloud-download': '&#xe9c2;',
		'icon-sun': '&#xe9d4;',
		'icon-brightness-contrast': '&#xe9d6;',
		'icon-backward2': '&#xea1f;',
		'icon-forward3': '&#xea20;',
		'icon-previous2': '&#xea23;',
		'icon-next2': '&#xea24;',
		'icon-text-height': '&#xea5f;',
		'icon-text-width': '&#xea60;',
		'icon-font-size': '&#xea61;',
		'icon-text-color': '&#xea6d;',
		'icon-google': '&#xea88;',
		'icon-google2': '&#xea89;',
		'icon-google3': '&#xea8a;',
		'icon-google-plus': '&#xea8b;',
		'icon-google-plus2': '&#xea8c;',
		'icon-google-plus3': '&#xea8d;',
		'icon-hangouts': '&#xea8e;',
		'icon-google-drive': '&#xea8f;',
		'icon-facebook': '&#xea90;',
		'icon-facebook2': '&#xea91;',
		'icon-instagram': '&#xea92;',
		'icon-whatsapp': '&#xea93;',
		'icon-spotify': '&#xea94;',
		'icon-telegram': '&#xea95;',
		'icon-twitter': '&#xea96;',
		'icon-vine': '&#xea97;',
		'icon-rss': '&#xea9b;',
		'icon-rss2': '&#xea9c;',
		'icon-youtube': '&#xea9d;',
		'icon-youtube2': '&#xea9e;',
		'icon-tumblr': '&#xeab9;',
		'icon-tumblr2': '&#xeaba;',
		'icon-skype': '&#xeac5;',
		'icon-linkedin': '&#xeac9;',
		'icon-linkedin2': '&#xeaca;',
		'icon-html-five': '&#xeae4;',
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
