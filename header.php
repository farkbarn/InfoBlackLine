<?php include('var.php');session_start();?>
<!DOCTYPE html>
<html lang="es">
	<head>
	    	<!--[if lt IE 8]><!-->
		<link href="<?php echo $_SESSION['dirtem'];?>css/ie7/ie7.css" rel="Stylesheet" type="text/css">
		<!--<![endif]-->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script async defer>(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6&appId=1571453769778083";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
		<script async defer>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		<script async defer type="text/javascript">window.___gcfg = {lang: 'es'};(function() {var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = 'https://apis.google.com/js/platform.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();</script>
		<script async defer src="https://apis.google.com/js/platform.js"></script>
		<script src="<?php echo $_SESSION['dirtem'];?>js/bjqs.min.js"></script>
		<script async defer src='<?php echo $_SESSION['dirtem'];?>js/liga.js'></script>
		
		<link href="http://fonts.googleapis.com/css?family=Roboto:700,400" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>css/reset.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>style.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>responsive.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>fonts.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>css/bjqs.css" rel="Stylesheet" type="text/css">
		
		<script type='text/javascript'><!--// <![CDATA[
    var OA_source = 'www.elinformador.com.ve';
// ]]> --></script>
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
		    <?php if ($_SESSION['wid']>=$_SESSION['ads1']){echo "$('#ads1').bjqs({'width':1100,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads2']){echo "$('#ads2').bjqs({'width':1050,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads3']){echo "$('#ads3').bjqs({'width':510,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads4']){echo "$('#ads4').bjqs({'width':510,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads5']){echo "$('#ads5').bjqs({'width':510,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads6']){echo "$('#ads6').bjqs({'height':100,'width':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads7']){echo "$('#ads7').bjqs({'height':200,'width':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads8']){echo "$('#ads8').bjqs({'height':250,'width':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads9']){echo "$('#ads9').bjqs({'height':300,'width':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads10']){echo "$('#ads10').bjqs({'height':250,'width':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads11']){echo "$('#ads11').bjqs({'height':500,'width':250,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});";}?>
		});
		</script>
<script async defer >
$(window).scroll(function(){
    if (window.pageYOffset >=600){
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

<script>
    $(document).ready(main);
    var contador = 1;
    function main(){
	$('.bt-menu').click(function(){
	    if(contador == 1){
		$('nav.nav_men').animate({left: '0'});
		$('nav.nav_men').animate({position: 'relative'});
		contador = 0;
	    } else {
		contador = 1;
		$('nav.nav_men').animate({left: '-100%'});
		$('nav.nav_men').animate({position: 'relative'});
	    }
	});
    };
</script>
	    <title><?php if (is_home()){echo 'El Informador - Diario Venezolano';} if(is_category()){the_category();} if(is_single()){the_title();}?></title>
	</head>
	<body>
		<section class='contenedor' id='contenedor'>
		    <?php if ($_SESSION['wid']>=$_SESSION['ads1']){include('ads1.php');}?>
			<header class='cabezal' id='cabezal'>
			    <section class='encabezado'>
				<section class="contlogo">
				    <section class='txtlogo' id='txtlogo'>
					<h1><a href="<?php echo get_site_url();?>" class='infotit colorfont4' id='infotit' >El Informador<span>.com.ve</span></a></h1>
				    </section>
				    <section>
					<script src='<?php echo $_SESSION['dirtem'];?>js/fecha.js'></script>
				    </section>
				</section>
				<section>
				    <object class="logo" type="image/svg+xml" id='logo' data="<?php echo $_SESSION['dirtem'];?>img/logo.svg">
					<img class="logo" src="<?php echo $_SESSION['dirtem'];?>img/logo.png" alt="El Informador" title="El Informador">
				    </object>
				</section>
				<section class="menu_bar"><a class="bt-menu"><span class="icon-menu"></span></a> <?php include('buscar.php');?> </section>
				<nav class='nav_men'>
				    <ul class='menugrupo' id='menugrupo'>
					<li id="item-ini" class='<?php if (is_home()){echo 'mark-ini';}?>'><a class="" href="<?php echo get_site_url();?>">Inicio<div class="item-pie-ini bgini"></div></a></li>
					<li id="item-lar" class='<?php if (is_category('Lara')){echo 'mark-lar';}?>'><a class="" href="<?php echo $_SESSION['dircat'];?>lara">Lara<div class="item-pie-lar bglar"></div></a></li>
					<li id="item-nac" class='<?php if (is_category('Nacionales')){echo 'mark-nac';}?>'><a class="" href="<?php echo $_SESSION['dircat'];?>nacionales">Nacionales<div class="item-pie-ini bgnac"></div></a></li>
					<li id="item-int" class='<?php if (is_category('Internacionales')){echo 'mark-int';}?>'><a class="" href="<?php echo $_SESSION['dircat'];?>internacionales">Internacionales<div class="item-pie-ini bgint"></div></a></li>
					<li id="item-dep" class='<?php if (is_category('Deportes')){echo 'mark-dep';}?>'><a class="" href="<?php echo $_SESSION['dircat'];?>deportes">Deportes<div class="item-pie-ini bgdep"></div></a></li>
					<li id="item-suc" class='<?php if (is_category('Sucesos')){echo 'mark-suc';}?>'><a class="" href="<?php echo $_SESSION['dircat'];?>sucesos">Sucesos<div class="item-pie-ini bgsuc"></div></a></li>
					<li id="item-act" class='<?php if (is_category('Actualidad')){echo 'mark-act';}?>'><a class="" href="<?php echo $_SESSION['dircat'];?>actualidad">Actualidad<div class="item-pie-ini bgact"></div></a></li>
					<li id="item-eco" class='<?php if (is_category('Economía')){echo 'mark-eco';}?>'><a class="" href="<?php echo $_SESSION['dircat'];?>economia">Econom&iacute;a<div class="item-pie-ini bgeco"></div></a></li>
					<li id="item-tec" class='<?php if (is_category('Salud y Belleza')){echo 'mark-tec';}?>'><a class="" href="<?php echo $_SESSION['dircat'];?>salud_y_belleza">Salud<div class="item-pie-ini bgtec"></div></a></li>
					<li> <?php include('buscar.php'); ?></li>
				    </ul>
				</nav>
			    </section>
			</header>
			<section class='centrador'>
