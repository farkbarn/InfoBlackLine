<?php //session_start();?>
<?php include('var.php');?>
<script>
if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
else
    {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open("GET","<?php echo $_SESSION['dirtem']; ?>swid.php?s="+screen.width,true);
    xmlhttp.send();
</script>
<!DOCTYPE html>
<html lang="es">
	<head>
	    	<!--[if lt IE 8]><!-->
		<link href="<?php echo $_SESSION['dirtem'];?>css/ie7/ie7.css" rel="Stylesheet" type="text/css">
		<!--<![endif]-->
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<script>(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6&appId=1571453769778083";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		<script type="text/javascript">window.___gcfg = {lang: 'es'};(function() {var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = 'https://apis.google.com/js/platform.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();</script>
		<script async defer src="https://apis.google.com/js/platform.js"></script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<link href="http://fonts.googleapis.com/css?family=Roboto:700,400" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>css/reset.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>style.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>responsive.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>fonts.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>css/bjqs.css" rel="Stylesheet" type="text/css">
		<script src="<?php echo $_SESSION['dirtem'];?>js/bjqs.min.js"></script>
		<script async type="text/javascript">
		jQuery(document).ready(function($){
		    $('#ads1').bjqs({'height':90,'width':1100,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
		    $('#ads2').bjqs({'height':60,'width':1063,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
		    $('#ads3').bjqs({'height':60,'width':510,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
		    $('#ads4').bjqs({'height':60,'width':510,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
		    $('#ads5').bjqs({'height':60,'width':510,'responsive':true,'showcontrols':false,'showmarkers':false,'randomstart':true,'animspeed':15000});
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
	$('.menu_bar').click(function(){
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
	    <title><?php if (is_home()){echo 'El Informador - Diario Venezolano';}else{the_title();}?></title>
	</head>
	<body>
		<section class='contenedor' id='contenedor'>
		    <?php if ($_SESSION['ads']){include('ads1.php');}?>
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
				<div class="menu_bar"><a href="#" class="bt-menu"><span class="icon-menu"></span></a></div>
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
				    </ul>
				</nav>
			    </section>
			</header>
			<section class='centrador'>
