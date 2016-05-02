<?php include('var.php');?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="http://fonts.googleapis.com/css?family=Roboto:700,400" rel="stylesheet" type="text/css" media="screen">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script>(function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6&appId=1571453769778083";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
		<link href="<?php echo $dirtem;?>css/reset.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $dirtem;?>style.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $dirtem;?>responsive.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $dirtem;?>fonts.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $dirtem;?>css/bjqs.css" rel="Stylesheet" type="text/css">
		<script src="<?php echo $dirtem;?>js/bjqs.min.js"></script>
		<script src="<?php echo $dirtem;?>js/delay.js"></script>
		<script async type="text/javascript">
		jQuery(document).ready(function($){
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
		<script >
$(window).scroll(function(){
    if (window.pageYOffset >=200){
	$('#cabezal').addClass('cabezalfix');
	$('#infotit').addClass('infotitfix');
	$('#logo').addClass('logofix');
	$('#menu').addClass('menufix');
	$('ul.menugrupo').addClass('menugrupofix');
	$('.centrador').addClass('centradorfix');
	} else {
	$('#cabezal').removeClass('cabezalfix');
	$('#infotit').removeClass('infotitfix');
	$('#logo').removeClass('logofix');
	$('#menu').removeClass('menufix');
	$('ul.menugrupo').removeClass('menugrupofix');
	$('.centrador').removeClass('centradorfix');
	}
});
		</script>
		<title><?php if (is_home()){echo 'El Informador - Diario Venezolano';}else{wp_title();}?></title>
	</head>
	<body>
		<section class='contenedor' id='contenedor'>
		    <?php include('ads1.php');?>
			<header class='cabezal' id='cabezal'>
			    <section class='encabezado'>
				<section class="contlogo">
				    <section class='txtlogo' id='txtlogo'>
					<h1><a href="#" class='infotit colorfont4' id='infotit' >El Informador<span>.com.ve</span></a></h1>
				    </section>
				    <section>
					<script src='<?php echo $dirtem;?>js/fecha.js'></script>
				    </section>
				</section>
				<section>
				    <object class="logo" type="image/svg+xml" id='logo' data="<?php echo $dirtem;?>img/logo.svg">
					<img class="logo" src="<?php echo $dirtem;?>img/logo.png" alt="El Informador" title="El Informador">
				    </object>
				</section>
				<section class='menu color2' id='menu'>
				    <nav>
					<ul class='menugrupo' id='menugrupo'>
					    <li id="item-ini" class='<?php if (is_home()){echo 'mark-ini';}?>'><a class="" href="<?php echo get_site_url();?>">Inicio</a><div class="item-pie-ini bgini"></div></li>
					    <li id="item-lar" class='<?php if (is_category('Lara')){echo 'mark-lar';}?>'><a class="" href="<?php echo $dircat;?>lara">Lara</a><div class="item-pie-lar bglar"></li>
					    <li id="item-nac" class='<?php if (is_category('Nacionales')){echo 'mark-nac';}?>'><a class="" href="<?php echo $dircat;?>nacionales">Nacionales</a><div class="item-pie-ini bgnac"></li>
					    <li id="item-int" class='<?php if (is_category('Internacionales')){echo 'mark-int';}?>'><a class="" href="<?php echo $dircat;?>internacionales">Internacionales</a><div class="item-pie-ini bgint"></li>
					    <li id="item-dep" class='<?php if (is_category('Deportes')){echo 'mark-dep';}?>'><a class="" href="<?php echo $dircat;?>deportes">Deportes</a><div class="item-pie-ini bgdep"></li>
					    <li id="item-suc" class='<?php if (is_category('Sucesos')){echo 'mark-suc';}?>'><a class="" href="<?php echo $dircat;?>sucesos">Sucesos</a><div class="item-pie-ini bgsuc"></li>
					    <li id="item-act" class='<?php if (is_category('Actualidad')){echo 'mark-act';}?>'><a class="" href="<?php echo $dircat;?>actualidad">Actualidad</a><div class="item-pie-ini bgact"></li>
					    <li id="item-eco" class='<?php if (is_category('Economía')){echo 'mark-eco';}?>'><a class="" href="<?php echo $dircat;?>economia">Econom&iacute;a</a><div class="item-pie-ini bgeco"></li>
					    <li id="item-tec" class='<?php if (is_category('Salud y Belleza')){echo 'mark-tec';}?>'><a class="" href="<?php echo $dircat;?>salud_y_belleza">Salud y Belleza</a><div class="item-pie-ini bgtec">
					</ul>
				    </nav>
				</section>
			    </section>
			</header>
			<section class='centrador'>
