		    <a id='up' class='up' href='#contenedor'><span class="icon-chevron-up"></span>subir</a>
		    <footer id='footer'>
			<section class='pie'>
			    <a href="<?php echo get_site_url();?>"><p class='infopie colorfont1' id='Informador'>El Informador</p></a>
			    <section class='redpie'>
				<ul class='contactos'>
				    <li class='tg' id='tg'><a target='_blank' href='https://telegram.me/elinformadorve' alt='Telegram'><span class="icon-telegram"></span></a></li>
				    <li class='tw' id='tw'><a target='_blank' href='https://twitter.com/elinformadorve' alt='Twitter'><span class='icon-twitter'></span></a></li>
				    <li class='fb' id='fb'><a target='_blank' href='https://www.facebook.com/elinformadorvzla/' alt='Facebook'><span class='icon-facebook'></span></a></li>
				    <li class='yt' id='yt'><a target='_blank' href='https://www.youtube.com/c/ElinformadorVe' alt='YouTube'><span class='icon-youtube2'></span></a></li>
				    <li class='gp' id='gp'><a target='_blank' href='https://plus.google.com/b/107602064440905060759/+ElinformadorVe/' alt='Google+'><span class='icon-google-plus3'></span></a></li>
				    <li class='in' id='in'><a target='_blank' href='https://instagram.com/elinformadorve' alt='Instagram'><span class='icon-instagram'></span></a></li>
				    <li class='rs' id='rs'><a target='_blank' href='http://www.elinformador.com.ve/feed' alt='RSS'><span class='icon-rss'></span></a></li>
				</ul>
			    </section>
			    <p class="colorfont1 txtcentro creditos">RIF.-J08500641-9 <br> © 2016 - EL INFORMADOR C.A.<br>  Todos los derechos reservados. <br> <span>PROHIBIDA LA REPRODUCCIÓN TOTAL O PARCIAL DE CUALQUIER MATERIAL <br> DE ESTE DIARIO SIN LA AUTORIZACION EXPRESA DE LOS EDITORES.  </span><br></p>
			    <ul class='contact-pie'>
				<li><a href="https://app.box.com/embed_widget/s/izkt2aza54hy36vbkcjdamha19qbpxcn?view=expanded&sort=name&direction=ASC&theme=gray" target='_blank' alt='Impreso'>Edici&oacute;n Impresa</a></li>
				<li><a href="/contacto">Contacto</a></li>
				<li><a href="/tarifas">Tarifas</a></li>
				<li><a href="/nosotros">Nosotros</a></li>
				<li><a href="mailto:webmaster@elinformador.com.ve">WEBMASTER</a></li>
			    </ul>
			</section>
		    </footer>
		</section>
		<?php if ($_SESSION['wid']>=$_SESSION['ads13']){include('ads13.php');}?>
		<?php if ($_SESSION['wid']>=$_SESSION['ads14']){include('ads14.php');}?>
		<?php if ($_SESSION['wid']>=$_SESSION['ads15']){include('ads15.php');}?>
		<div id="google_translate_element"></div><script type="text/javascript">function googleTranslateElementInit() {new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT, multilanguagePage: true, gaTrack: true, gaId: 'UA-40942673-1'}, 'google_translate_element');}</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
function downloadJSAtOnload(){
    var element = document.createElement("script");
    element.src = "<?php echo $_SESSION['dirtem'];?>js/defer.min.js";
    document.body.appendChild(element);
    }
    if (window.addEventListener)
	window.addEventListener("load", downloadJSAtOnload, false);
    else if (window.attachEvent)
	window.attachEvent("onload", downloadJSAtOnload);
    else window.onload = downloadJSAtOnload;
</script>
	</body>
	    <link href="<?php echo $_SESSION['dirtem'];?>css/responsive.min.css" rel="stylesheet" type="text/css" media="screen">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	    <script async >(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6&appId=1571453769778083";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
	    <script async >!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	    <script async type="text/javascript">window.___gcfg = {lang: 'es'};(function() {var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = 'https://apis.google.com/js/platform.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();</script>
	    <script type='text/javascript'><!--// <![CDATA[var OA_source = 'www.elinformador.com.ve';// ]]> --></script>
	    <script type='text/javascript' src='http://ads.elinformador.com.ve/www/delivery/spcjs.php?id=1&amp;block=1&amp;blockcampaign=1&amp;charset=UTF-8'></script>
	    <script async src='<?php echo $_SESSION['dirtem'];?>js/bjqs.min.js'></script>
	    <script async src='<?php echo $_SESSION['dirtem'];?>js/liga.min.js'></script>
	    <script async type="text/javascript">jQuery(document).ready(function($){$('#Slider').bjqs({'prevtext':'<span id="prevsli" class="icon-chevron-left"></span>','nexttext':'<span id="nextsli" class="icon-chevron-right"></span>','keyboardnav':true,'animtype':'fade','height':515,'width':710,'responsive':true,'showcontrols':true,'showmarkers':false,'randomstart':true,'animspeed':10000});});</script>
	    <script async type="text/javascript">
	    jQuery(document).ready(function($){
		<?php if ($_SESSION['wid']>=$_SESSION['ads1']){echo "$('#ads1').bjqs({'width':1100,'height':90,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		<?php if ($_SESSION['wid']>=$_SESSION['ads3']){/*echo "$('#ads3').bjqs({'width':550,'height':60,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':60000});";*/}?>
		<?php if ($_SESSION['wid']>=$_SESSION['ads4']){/*echo "$('#ads4').bjqs({'width':550,'height':60,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':60000});";*/}?>
		<?php if ($_SESSION['wid']>=$_SESSION['ads5']){/*echo "$('#ads5').bjqs({'width':550,'height':60,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':60000});";*/}?>
		<?php if ($_SESSION['wid']>=$_SESSION['ads6']){/*echo "$('#ads6').bjqs({'width':230,'height':100,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':60000});";*/}?>
		<?php if ($_SESSION['wid']>=$_SESSION['ads7']){/*echo "$('#ads7').bjqs({'width':230,'height':200,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':60000});";*/}?>
		<?php if ($_SESSION['wid']>=$_SESSION['ads8']){/*echo "$('#ads8').bjqs({'width':230,'height':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':60000});";*/}?>
		<?php if ($_SESSION['wid']>=$_SESSION['ads9']){/*echo "$('#ads9').bjqs({'width':230,'height':300,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':60000});";*/}?>
		<?php if ($_SESSION['wid']>=$_SESSION['ads10']){/*echo "$('#ads10').bjqs({'width':300,'height':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':60000});";*/}?>
		<?php if ($_SESSION['wid']>=$_SESSION['ads11']){/*echo "$('#ads11').bjqs({'width':300,'height':600,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':60000});";*/}?>
		<?php if ($_SESSION['wid']>=$_SESSION['ads12']){/*echo "$('#ads12').bjqs({'width':300,'height':600,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':60000});";*/}?>
		<?php if ($_SESSION['wid']>=$_SESSION['ads13']){/*echo "$('#ads13').bjqs({'width':120,'height':600,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':60000});";*/}?>
		<?php if ($_SESSION['wid']>=$_SESSION['ads14']){/*echo "$('#ads14').bjqs({'width':120,'height':600,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':60000});";*/}?>
	    });
	    </script>
	    <!--[if lt IE 8]><!--> <link href="<?php echo $_SESSION['dirtem'];?>css/ie7/ie7.min.css" rel="Stylesheet" type="text/css"> <!--<![endif]-->
	    <script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-40942673-1', 'auto');
		ga('send', 'pageview');
	    </script>
	    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MPP3R8"
	    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	    })(window,document,'script','dataLayer','GTM-MPP3R8');</script>
	    <script>
		$(function() {
		    $.post('<?php echo $_SESSION['dirtem'];?>wid.php',{width:screen.width,height:screen.height},function(json){
			if(json.val) {
			    console.log(json.wid+'x'+json.hei);
			} else {
			    console.log('error');
			}
		    },'json');
		});
	    </script>
</html>
