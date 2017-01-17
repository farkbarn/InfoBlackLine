<?php include('var.php');if(session_status() == PHP_SESSION_NONE){session_start();}?>
<!DOCTYPE html>
<html lang="es">
	<head id='head'>

<!-- Meta Twitter -->
<meta name="twitter:card" content="summary" >
<meta name="twitter:title" content="El Informador" >
<meta name="twitter:site" content="@elinformadorve" >
<meta name="twitter:creator" content="@elinformadorve" >
<meta name="twitter:description" content="Diario El Informador - Venezuela" >
<meta name="twitter:image" content="<?php echo $_SESSION['dirtem'];?>img/icon/favicon-96x96.png" >
<meta name="twitter:image:alt" content="Diario El Informador" >

<!-- Meta Fb-OG -->
<meta property="og:title" content="El Informador">
<meta property="og:description" content="Diario El Informador - Venezuela" >
<meta property="og:image" content="<?php echo $_SESSION['dirtem'];?>img/icon/favicon-96x96.png" >
<meta property="og:url" content="http://www.elinformador.com.ve" >
<meta property="og:type" content="website" >
<meta property="og:site_name" content="El Informador" >
<meta property="fb:pages" content="251006560062">

<!-- Meta Informador -->
<meta name="subject" content="diario online">
<meta name="copyright" content="Diario El Informador C.A.">
<meta name="language" content="ES">
<meta name="robots" content="index, follow" >
<meta name="googlebot" content="all" />
<meta name="generator" content="wordpress" >
<meta name="Author" content="El Informador - @elinformadorve">
<meta name="Author" content="Frank Barrera - @farkbarn">
<meta name="Description" content ='Diario El Informador - Venezuela'>
<meta name="keywords" content="noticias, última hora, actualidad, internacional, América, Europa, Ásia, África, Oceanía, política, economía, deportes, cultura, sociedad, tecnología, gente, opinión, viajes, moda, televisión, blogs, firmas, especiales, vídeos, fotos, audios, gráficos, entrevistas, servicios, news, diario, venezuela, barquisimeto, lara, psuv, mud, " >
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo $_SESSION['dirtem'];?>img/icon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

		<?php if (is_single()){ ?><link rel='amphtml' href='<?php echo get_permalink();?>amp'><?php }?>

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

		<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i" rel="stylesheet">
		<link href="<?php echo $_SESSION['dirtem'];?>css/font.serifabc.min.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo $_SESSION['dirtem'];?>css/layout.css?v=<?php echo $_SESSION['versioncssjs']; ?>" rel="stylesheet" type="text/css" media="screen">
		<?php if ($_SESSION['wid']<=$_SESSION['tablet']){ ?>
		<link href="<?php echo $_SESSION['dirtem'];?>css/responsive.css?v=<?php echo $_SESSION['versioncssjs']; ?>" rel="stylesheet" type="text/css" media="screen">
		<?php }?>
		<?php if ($_SESSION['wid']<=$_SESSION['tablet']){include('ads/pglevel.js');}?>
	    <title><?php if (is_home() || is_search() || is_page()){echo 'El Informador - Diario Venezolano';} if(is_category()){wp_title(' - El Informador', true, 'right');} if(is_single()){the_title();}?></title>
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-40942673-1', 'auto');
		ga('send', 'pageview');
	    </script>
	</head>
	<body itemscope itemtype="http://schema.org/Blog" >
		<section class='contenedor' id='contenedor'><h3></h3>
			<header class='cabezal' id='cabezal'><h3></h3>
			    <section class='encabezado'><h3></h3>
				<section class="contlogo"> <h6></h6>
				    <section class='txtlogo' id='txtlogo'>
					<h1 itemprop="name" ><a itemprop="url" href="<?php echo get_site_url();?>" class='infotit' id='infotit' >El Informador<span>.com.ve</span></a></h1>
				    </section>
				    <?php if ($_SESSION['wid']>=$_SESSION['pc']){?>
						<section id='tiempo'> <h6></h6> </section>
				    <?php }?>
				</section>
				<section id='seclogo' class='seclogo'> <h6></h6> </section>
				<section class="menu_bar"><h6></h6><a class="bt-menu"><span class="icon-menu"></span></a> <?php include('buscar.php');?> <h2><a href="<?php echo get_site_url();?>" class='infotit2' id='infotit2' >El Informador<span>.com.ve</span></a></h2></section>
				<section class='imp impreso'><h6></h6><a class='impreso' href='https://app.box.com/embed_widget/s/4na8kx0eowfk82rcp5xy2w4k1kcjadf0?view=expanded&sort=name&direction=ASC&theme=gray' target='_blank' rel='Impreso'>Impreso</a></section>
				<nav class='nav_men'>
				    <ul class='menugrupo' id='menugrupo'>
					<li> <?php include('buscar.php'); ?></li>
					<li id='imp_men' class='impreso'><h6></h6><a class='impreso' href='https://app.box.com/embed_widget/s/4na8kx0eowfk82rcp5xy2w4k1kcjadf0?view=expanded&sort=name&direction=ASC&theme=gray' target='_blank' rel='Impreso'>Impreso</a></li>
					<li id="item-ini" class='<?php if (is_home()){echo 'mark-ini';}?>'><a class="cat ini" href="<?php echo get_site_url();?>">Inicio<div class="item-pie-ini bgini"></div></a></li>
					<li id="item-lar" class='<?php if (is_category('Lara')){echo 'mark-lar';}?>'><a class="cat lar" href="<?php echo $_SESSION['dircat'];?>lara">Lara<div class="item-pie-lar bglar"></div></a></li>
					<li id="item-nac" class='<?php if (is_category('Nacionales')){echo 'mark-nac';}?>'><a class="cat nac" href="<?php echo $_SESSION['dircat'];?>nacionales">Nacionales<div class="item-pie-ini bgnac"></div></a></li>
					<li id="item-int" class='<?php if (is_category('Internacionales')){echo 'mark-int';}?>'><a class="cat int" href="<?php echo $_SESSION['dircat'];?>internacionales">Internacionales<div class="item-pie-ini bgint"></div></a></li>
					<li id="item-dep" class='<?php if (is_category('Deportes')){echo 'mark-dep';}?>'><a class="cat dep" href="<?php echo $_SESSION['dircat'];?>deportes">Deportes<div class="item-pie-ini bgdep"></div></a></li>
					<li id="item-suc" class='<?php if (is_category('Sucesos')){echo 'mark-suc';}?>'><a class="cat suc" href="<?php echo $_SESSION['dircat'];?>sucesos">Sucesos<div class="item-pie-ini bgsuc"></div></a></li>
					<li id="item-act" class='<?php if (is_category('Actualidad')){echo 'mark-act';}?>'><a class="cat act" href="<?php echo $_SESSION['dircat'];?>actualidad">Actualidad<div class="item-pie-ini bgact"></div></a></li>
					<li id="item-eco" class='<?php if (is_category('Economía')){echo 'mark-eco';}?>'><a class="cat eco" href="<?php echo $_SESSION['dircat'];?>economia">Econom&iacute;a<div class="item-pie-ini bgeco"></div></a></li>
					<li id="item-sal" class='<?php if (is_category('Salud')){echo 'mark-sal';}?>'><a class="cat sal" href="<?php echo $_SESSION['dircat'];?>salud">Salud<div class="item-pie-ini bgsal"></div></a></li>
				    </ul>
				</nav>
			    </section>
			</header>
			<section class='centrador'><h3></h3>
			    <section class='superior'><h3></h3>
				<?php
				if (is_single() || is_search() || is_category()){
				    if ($_SESSION['wid']>=$_SESSION['ads1']){include('ads1.php');}
				}?>