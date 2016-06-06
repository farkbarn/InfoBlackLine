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
	</body>
		<!--[if lt IE 8]><!-->
		<link href="<?php echo $_SESSION['dirtem'];?>css/ie7/ie7.css" rel="Stylesheet" type="text/css">
		<!--<![endif]-->
</html>
