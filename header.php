<?php
$dirtem=get_template_directory_uri().'/';
$dircat=get_site_url().'/temas/';
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="http://fonts.googleapis.com/css?family=Roboto:700,400" rel="stylesheet" type="text/css" media="screen">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<link href="<?php echo $dirtem;?>css/reset.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $dirtem;?>style.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $dirtem;?>responsive.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $dirtem;?>fonts.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $dirtem;?>css/bjqs.css" rel="Stylesheet" type="text/css">
		<script src="<?php echo $dirtem;?>js/bjqs.min.js"></script>
		<script src="<?php echo $dirtem;?>js/delay.js"></script>
		<script async type="text/javascript">
		jQuery(document).ready(function($){
			$('#Slider').bjqs({'prevtext':'<span class="icon-circle-left"></span>','nexttext':'<span class="icon-circle-right"></span>','keyboardnav':true,'animtype':'fade','height':480,'width':710,'responsive':true,'showcontrols':true,'showmarkers':false,'randomstart':true,'animspeed':10000});
			$('#ads1').bjqs({'height':90,'width':1000,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
			$('#ads2').bjqs({'height':60,'width':1000,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
			$('#ads3').bjqs({'height':60,'width':468,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
			$('#ads4').bjqs({'height':60,'width':468,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
			$('#ads5').bjqs({'height':60,'width':468,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
			$('#ads6').bjqs({'height':100,'width':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
			$('#ads7').bjqs({'height':200,'width':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
			$('#ads8').bjqs({'height':250,'width':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
			$('#ads9').bjqs({'height':300,'width':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
			$('#ads10').bjqs({'height':250,'width':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
			$('#ads11').bjqs({'height':500,'width':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
			$('#ads13').bjqs({'height':60,'width':234,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
			$('#ads14').bjqs({'height':250,'width':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
			$('#ads15').bjqs({'height':500,'width':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
		});
		</script>
		
		<title><?php if (is_home()){echo 'El Informador - Diario Venezolano';}else{wp_title();}?></title>
	</head>
	<body>
		<section class='contenedor' id='contenedor'>
			<aside class='ads1 mxwiads1' id='ads1'>
				<ul class='bjqs'>
					<li>
						<aside class='A1 mxwiads1'>
						    <?php //include('ads/A1.js');?>
						</aside>
					</li>
					<li>
						<aside class='A2 mxwiads2'>
						    <?php //include('ads/A2.js');?>
						</aside>
						<aside class='A3 mxwiads3'>
						    <?php //include('ads/A3.js');?>
						</aside>
					</li>
					<li>
						<aside class='B1 mxwiads4'>
						    <?php //include('ads/B1.js');?>
						</aside>
						<aside class='B2 mxwiads5'>
						    <?php //include('ads/B2.js');?>
						</aside>
					</li>
				</ul>
			</aside>
			<header class='cabezal' id='cabezal'>
				<section class='encabezado'>
					<section class="contlogo">
						<section class='txtlogo' id='txtlogo'>
							<h1><a href="#" class='infotit colorfont4' id='Informador' >El Informador<span>.com.ve</span></a></h1>
						</section>
						<section>
							<script src='<?php echo $dirtem;?>js/fecha.js'></script>
						</section>
					</section>
					<section>
						<object class="logo" type="image/svg+xml" data="<?php echo $dirtem;?>img/logo.svg">
							<img class="logo" src="<?php echo $dirtem;?>img/logo.png" alt="El Informador" title="El Informador">
						</object>
					</section>
					<section class='menu color2'>
						<nav>
							<ul class='menugrupo'>
								<li id="item-ini"><a class="" href="<?php echo get_site_url();?>">Inicio</a><div class="item-pie-ini bgini"></div></li>
								<li id="item-lar"><a class="" href="<?php echo $dircat;?>lara">Lara</a><div class="item-pie-lar bglar"></li>
								<li id="item-nac"><a class="" href="<?php echo $dircat;?>nacionales">Nacionales</a><div class="item-pie-ini bgnac"></li>
								<li id="item-int"><a class="" href="<?php echo $dircat;?>internacionales">Internacionales</a><div class="item-pie-ini bgint"></li>
								<li id="item-dep"><a class="" href="<?php echo $dircat;?>deportes">Deportes</a><div class="item-pie-ini bgdep"></li>
								<li id="item-suc"><a class="" href="<?php echo $dircat;?>sucesos">Sucesos</a><div class="item-pie-ini bgsuc"></li>
								<li id="item-act"><a class="" href="<?php echo $dircat;?>actualidad">Actualidad</a><div class="item-pie-ini bgact"></li>
								<li id="item-eco"><a class="" href="<?php echo $dircat;?>economia">Econom&iacute;a</a><div class="item-pie-ini bgeco"></li>
								<li id="item-tec"><a class="" href="<?php echo $dircat;?>salud_y_belleza">Salud y Belleza</a><div class="item-pie-ini bgtec">
							</ul>
						</nav>
					</section>
				</section>
			</header>
			<section class='centrador'>
