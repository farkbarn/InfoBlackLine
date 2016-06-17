<?php include('var.php');if(session_status() == PHP_SESSION_NONE){session_start();}?>
<!DOCTYPE html>
<html lang="es">
	<head id='head'>
		<meta name="Description" content ='El Informador es un portal de noticias que entrega informaci&oacute;n veraz y confiable en el mundo del acontecer diario. Las noticias son tratadas con neutralidad y adquieren la misma importancia a nivel nacional e internacional.'>
		<meta name="Author" content="Frank Barrera - @farkbarn">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo $_SESSION['dirtem'];?>img/icon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $_SESSION['dirtem'];?>img/icon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $_SESSION['dirtem'];?>img/icon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_SESSION['dirtem'];?>img/icon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $_SESSION['dirtem'];?>img/icon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_SESSION['dirtem'];?>img/icon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $_SESSION['dirtem'];?>img/icon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $_SESSION['dirtem'];?>img/icon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $_SESSION['dirtem'];?>img/icon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_SESSION['dirtem'];?>img/icon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $_SESSION['dirtem'];?>img/icon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_SESSION['dirtem'];?>img/icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $_SESSION['dirtem'];?>img/icon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $_SESSION['dirtem'];?>img/icon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo $_SESSION['dirtem'];?>img/icon/manifest.json">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href="<?php echo $_SESSION['dirtem'];?>css/reset.min.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>layout.min.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>responsive.min.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>fonts.min.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>css/bjqs.min.css" rel="stylesheet" type="text/css">
		<?php if ($_SESSION['wid']<=$_SESSION['tablet']){include('ads/pglevel.js');}?>
	    <title><?php if (is_home() || is_search() || is_page()){echo 'El Informador - Diario Venezolano';} if(is_category()){wp_title(' - El Informador', true, 'right');} if(is_single()){the_title();}?></title>
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
					<section id='tiempo'></section>
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
					<li id="item-ini" class='<?php if (is_home()){echo 'mark-ini';}?>'><a class="cat ini" href="<?php echo get_site_url();?>">Inicio<div class="item-pie-ini bgini"></div></a></li>
					<li id="item-lar" class='<?php if (is_category('Lara')){echo 'mark-lar';}?>'><a class="cat lar" href="<?php echo $_SESSION['dircat'];?>lara">Lara<div class="item-pie-lar bglar"></div></a></li>
					<li id="item-nac" class='<?php if (is_category('Nacionales')){echo 'mark-nac';}?>'><a class="cat nac" href="<?php echo $_SESSION['dircat'];?>nacionales">Nacionales<div class="item-pie-ini bgnac"></div></a></li>
					<li id="item-int" class='<?php if (is_category('Internacionales')){echo 'mark-int';}?>'><a class="cat int" href="<?php echo $_SESSION['dircat'];?>internacionales">Internacionales<div class="item-pie-ini bgint"></div></a></li>
					<li id="item-dep" class='<?php if (is_category('Deportes')){echo 'mark-dep';}?>'><a class="cat dep" href="<?php echo $_SESSION['dircat'];?>deportes">Deportes<div class="item-pie-ini bgdep"></div></a></li>
					<li id="item-suc" class='<?php if (is_category('Sucesos')){echo 'mark-suc';}?>'><a class="cat suc" href="<?php echo $_SESSION['dircat'];?>sucesos">Sucesos<div class="item-pie-ini bgsuc"></div></a></li>
					<li id="item-act" class='<?php if (is_category('Actualidad')){echo 'mark-act';}?>'><a class="cat act" href="<?php echo $_SESSION['dircat'];?>actualidad">Actualidad<div class="item-pie-ini bgact"></div></a></li>
					<li id="item-eco" class='<?php if (is_category('Economía')){echo 'mark-eco';}?>'><a class="cat eco" href="<?php echo $_SESSION['dircat'];?>economia">Econom&iacute;a<div class="item-pie-ini bgeco"></div></a></li>
					<li id="item-sal" class='<?php if (is_category('Salud y Belleza')){echo 'mark-sal';}?>'><a class="cat sal" href="<?php echo $_SESSION['dircat'];?>salud_y_belleza">Salud<div class="item-pie-ini bgtec"></div></a></li>
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
