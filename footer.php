		    <a id='up' class='up' href='#contenedor'><span class="icon-chevron-up"></span>subir</a>
		    <footer id='footer'>
			<section class='pie'>
			    <a href="<?php echo get_site_url();?>"><p class='infopie colorfont1' id='Informador'>El Informador</p></a>
			    <section class='redpie'>
				<ul class='contactos'>
				    <li class='tg' id='tg'><a target='_blank' href='https://telegram.me/elinformadorve' alt='Telegram'><span class="icon-telegram"></span></a></li>
				    <li class='tw' id='tw'><a target='_blank' href='https://twitter.com/elinformadorve' alt='Twitter'><span class='icon-twitter'></span></a></li>
				    <li class='fb' id='fb'><a target='_blank' href='https://www.facebook.com/elinformadorve/' alt='Facebook'><span class='icon-facebook'></span></a></li>
				    <li class='yt' id='yt'><a target='_blank' href='https://www.youtube.com/channel/UCPb4vjcbn4j0BQ_RQ-72X6Q/' alt='YouTube'><span class='icon-youtube2'></span></a></li>
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
	</body>
		<script>
		    if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
		    window.onmousewheel = document.onmousewheel = wheel;
		    function wheel(event) {
			    var delta = 0;
			    if (event.wheelDelta) delta = event.wheelDelta / 120;
			    else if (event.detail) delta = -event.detail / 3;

			    handle(delta);
			    if (event.preventDefault) event.preventDefault();
			    event.returnValue = false;
		    }
		    function handle(delta) {
			    var time = 500;
			    var distance = 250;

			    $('html, body').stop().animate({
				    scrollTop: $(window).scrollTop() - (distance * delta)
			    }, time );
		    }
		</script>
		<script>
		    $(function() {
		      $('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
			    $('html, body').animate({
			      scrollTop: target.offset().top
			    }, 1000);
			    return false;
			  }
			}
		      });
		    });
		</script>
		<!--[if lt IE 8]><!-->
		<link href="<?php echo $_SESSION['dirtem'];?>css/ie7/ie7.css.min" rel="Stylesheet" type="text/css">
		<!--<![endif]-->
</html>
