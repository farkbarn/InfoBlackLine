<?php include('var.php');if(session_status() == PHP_SESSION_NONE){session_start();}?>
<!DOCTYPE html>
<html lang="es">
	<head id='head'>
		<meta name="Author" content="Frank Barrera - @farkbarn">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script async defer>(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6&appId=1571453769778083";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
		<script async defer>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		<script async defer type="text/javascript">window.___gcfg = {lang: 'es'};(function() {var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = 'https://apis.google.com/js/platform.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();</script>
		<script src="<?php echo $_SESSION['dirtem'];?>js/bjqs.min.js"></script>
		<script async defer src='<?php echo $_SESSION['dirtem'];?>js/liga.js'></script>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href="<?php echo $_SESSION['dirtem'];?>css/reset.css.min" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>layout.css.min" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>responsive.css.min" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>fonts.css.min" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>css/bjqs.css.min" rel="stylesheet" type="text/css">
		<script type='text/javascript'><!--// <![CDATA[var OA_source = 'www.elinformador.com.ve';// ]]> --></script>
		<script type='text/javascript' src='http://ads.elinformador.com.ve/www/delivery/spcjs.php?id=1&amp;block=1&amp;blockcampaign=1&amp;charset=UTF-8'></script>
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
		<script async defer type="text/javascript">
		jQuery(document).ready(function($){
		    <?php if ($_SESSION['wid']>=$_SESSION['ads1']){echo "$('#ads1').bjqs({'width':1100,'height':90,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads3']){echo "$('#ads3').bjqs({'width':550,'height':60,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads4']){echo "$('#ads4').bjqs({'width':550,'height':60,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads5']){echo "$('#ads5').bjqs({'width':550,'height':60,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads6']){echo "$('#ads6').bjqs({'width':230,'height':100,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads7']){echo "$('#ads7').bjqs({'width':230,'height':200,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads8']){echo "$('#ads8').bjqs({'width':230,'height':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads9']){echo "$('#ads9').bjqs({'width':230,'height':300,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads10']){echo "$('#ads10').bjqs({'width':300,'height':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads11']){echo "$('#ads11').bjqs({'width':300,'height':600,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads12']){echo "$('#ads12').bjqs({'width':300,'height':600,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads13']){echo "$('#ads13').bjqs({'width':120,'height':600,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads14']){echo "$('#ads14').bjqs({'width':120,'height':600,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		});
		</script>
		<script async defer >
		$(window).scroll(function(){
		    if ((window.pageYOffset >=600)&&(window.innerWidth>791)) {
			$('#cabezal').addClass('cabezalfix');
			$('#infotit').addClass('infotitfix');
			$('#logo').addClass('logofix');
			$('ul.menugrupo').addClass('menugrupofix');
			$('.centrador').addClass('centradorfix');
			} else {
			$('#cabezal').removeClass('cabezalfix');
			$('#infotit').removeClass('infotitfix');
			$('#logo').removeClass('logofix');
			$('ul.menugrupo').removeClass('menugrupofix');
			$('.centrador').removeClass('centradorfix');
			}
		});
		</script>
		<script async defer >
		$(window).scroll(function(){
		    if ((window.pageYOffset >=1000)) {
			$('.up').addClass('upfix');
		    } else {
			$('.up').removeClass('upfix');
		    }
		});
		</script>
		<script async defer >
		$(window).scroll(function(){
		    if ((window.pageYOffset >=100)&&(window.innerWidth<792)) {
			$('.infotit2').addClass('infotitfix2');
			} else {
			$('.infotit2').removeClass('infotitfix2');
			}
		});
		</script>
		<script async defer >
		$(window).scroll(function(){
		    if ((window.pageYOffset >=610)) {
			$('.imp').addClass('impfix');
			} else {
			$('.imp').removeClass('impfix');
			}
		});
		</script>
		<script>
		    $(document).ready(main);
		    function main()
		    {
			$('section.imp').animate({left:'-28px'});
		    }
		</script>
		<script>
		    $(document).ready(main);
		    var contador = 1;
		    function main(){
			$('.bt-menu').click(function(){
			    if(contador == 1){
				$('nav.nav_men').animate({left:'0'});
				$('nav.nav_men').animate({position:'relative'});
				contador = 0;
			    } else {
				contador = 1;
				$('nav.nav_men').animate({left:'-100%'});
				$('nav.nav_men').animate({position:'relative'});
			    }
			});
		    };
		</script>
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


	    <title><?php if (is_home() || is_search() || is_page()){echo 'El Informador - Diario Venezolano';} if(is_category()){wp_title(' - El Informador', true, 'right');} if(is_single()){the_title();}?></title>
	    <meta name="keywords" lang="es" content="noticias, venezuela, nacionales, salud, politica, negocios, informador">
	    <meta name="keywords" lang="us" content="news, venezuela, national, heald, politics, business, informer">
	</head>
	<body>
		<section class='contenedor' id='contenedor'>
			<header class='cabezal' id='cabezal'>
			    <section class='encabezado'>
				<section class="contlogo">
				    <section class='txtlogo' id='txtlogo'>
					<h1><a href="<?php echo get_site_url();?>" class='infotit colorfont4' id='infotit' >El Informador<span>.com.ve</span></a></h1>
				    </section>
				    <?php if ($_SESSION['wid']>=$_SESSION['pc']){?>
				    <script src='<?php echo $_SESSION['dirtem'];?>js/fecha.js'></script>
				    <?php }?>
				</section>
				<section>
				    <object class="logo" type="image/svg+xml" id='logo' data="<?php echo $_SESSION['dirtem'];?>img/logo.svg">
					<img class="logo" src="<?php echo $_SESSION['dirtem'];?>img/logo.png" alt="El Informador" title="El Informador">
				    </object>
				</section>
				<section class="menu_bar"><a class="bt-menu"><span class="icon-menu"></span></a> <?php include('buscar.php');?> <h1><a href="<?php echo get_site_url();?>" class='infotit2 colorfont4' id='infotit2' >El Informador<span>.com.ve</span></a></h1></section>
				<section class='imp impreso'><a class='impreso' href='https://app.box.com/embed_widget/s/izkt2aza54hy36vbkcjdamha19qbpxcn?view=expanded&sort=name&direction=ASC&theme=gray' target='_blank' alt='Impreso'>Impreso</a></section>
				<nav class='nav_men'>
				    <ul class='menugrupo' id='menugrupo'>
					<li> <?php include('buscar.php'); ?></li>
					<li id='imp_men' class='impreso'><a class='impreso' href='https://app.box.com/embed_widget/s/izkt2aza54hy36vbkcjdamha19qbpxcn?view=expanded&sort=name&direction=ASC&theme=gray' target='_blank' alt='Impreso'>Impreso</a></li>
					<li id="item-ini" class='<?php if (is_home()){echo 'mark-ini';}?>'><a class="" href="<?php echo get_site_url();?>">Inicio<div class="item-pie-ini bgini"></div></a></li>
					<li id="item-lar" class='<?php if (is_category('Lara')){echo 'mark-lar';}?>'><a class="" href="<?php echo $_SESSION['dircat'];?>lara">Lara<div class="item-pie-lar bglar"></div></a></li>
					<li id="item-nac" class='<?php if (is_category('Nacionales')){echo 'mark-nac';}?>'><a class="" href="<?php echo $_SESSION['dircat'];?>nacionales">Nacionales<div class="item-pie-ini bgnac"></div></a></li>
					<li id="item-int" class='<?php if (is_category('Internacionales')){echo 'mark-int';}?>'><a class="" href="<?php echo $_SESSION['dircat'];?>internacionales">Internacionales<div class="item-pie-ini bgint"></div></a></li>
					<li id="item-dep" class='<?php if (is_category('Deportes')){echo 'mark-dep';}?>'><a class="" href="<?php echo $_SESSION['dircat'];?>deportes">Deportes<div class="item-pie-ini bgdep"></div></a></li>
					<li id="item-suc" class='<?php if (is_category('Sucesos')){echo 'mark-suc';}?>'><a class="" href="<?php echo $_SESSION['dircat'];?>sucesos">Sucesos<div class="item-pie-ini bgsuc"></div></a></li>
					<li id="item-act" class='<?php if (is_category('Actualidad')){echo 'mark-act';}?>'><a class="" href="<?php echo $_SESSION['dircat'];?>actualidad">Actualidad<div class="item-pie-ini bgact"></div></a></li>
					<li id="item-eco" class='<?php if (is_category('Economía')){echo 'mark-eco';}?>'><a class="" href="<?php echo $_SESSION['dircat'];?>economia">Econom&iacute;a<div class="item-pie-ini bgeco"></div></a></li>
					<li id="item-sal" class='<?php if (is_category('Salud y Belleza')){echo 'mark-sal';}?>'><a class="" href="<?php echo $_SESSION['dircat'];?>salud_y_belleza">Salud<div class="item-pie-ini bgtec"></div></a></li>
				    </ul>
				</nav>
			    </section>
			</header>
			<section class='centrador'>
			    <section class='superior'>
				<?php
				if (is_single() || is_search() || is_category()){
				    if ($_SESSION['wid']>=$_SESSION['ads1']){include('ads1.php');}
				}?>
