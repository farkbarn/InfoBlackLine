<?php include('var.php');if(session_status() == PHP_SESSION_NONE){session_start();}?>
<!DOCTYPE html>
<html lang="es">
	<head id='head'>
<!-- Meta Informador -->
<meta name="keywords" content="<?php if (is_single()) {$posttags = get_the_tags();if ($posttags) {foreach($posttags as $tag){echo $tag->name.', ';}}} ?>noticias, última hora, actualidad, internacional, América, Europa, Ásia, África, Oceanía, política, economía, deportes, cultura, sociedad, tecnología, opinión, vídeos, fotos, audios, servicios, news, diario, venezuela" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="subject" content="diario online">
<meta name="copyright" content="Diario El Informador C.A.">
<meta name="language" content="ES">
<meta name="robots" content="index, follow" >
<meta name="googlebot" content="all" >
<meta name="generator" content="wordpress" >
<meta name="Author" content="El Informador - @elinformadorve">
<meta name="Author" content="Frank Barrera - @farkbarn">
<meta name="Description" content ='<?php if(is_single()){the_title();}else{echo'Noticias de actualidad internacional, política, economía, deportes, cultura, sociedad, tecnología, opinión, moda, vídeos, fotos, audios, entrevistas';}?>'>
<!-- Meta Twitter -->
<meta name="twitter:card" content="summary" >
<meta name="twitter:title" content="<?php if(is_single()){the_title();}else{echo'El Informador - Diario Venezolano';}?>">
<meta name="twitter:site" content="@elinformadorve" >
<meta name="twitter:creator" content="@elinformadorve" >
<meta name="twitter:description" content="<?php if(is_single()){the_title();}else{echo'El Informador - Diario Venezolano';}?>" >
<meta name="twitter:image:alt" content="<?php if(is_single()){the_title();}else{echo'El Informador - Diario Venezolano';}?>" >
<meta name="twitter:image" content="<?php if(is_single()){the_post_thumbnail_url( 'col2' );}else{echo $_SESSION['dirtem'].'img/icon/favicon-96x96.png';}?>" >
<!-- Meta Fb-OG -->
<meta property="og:title" content="<?php if(is_single()){the_title();}else{echo'El Informador - Diario Venezolano';}?>">
<meta property="og:description" content="<?php if(is_single()){the_title();}else{echo'El Informador - Diario Venezolano';}?>" >
<meta property="og:image" content="<?php if(is_single()){the_post_thumbnail_url( 'col2' );}else{echo $_SESSION['dirtem'].'img/icon/favicon-96x96.png';}?>" >
<meta property="og:url" content="<?php if (is_single()){ echo get_permalink();}else{echo get_site_url();} ?>" >
<meta property="og:type" content="<?php if(is_single()){echo'article';}else{echo'website';} ?>" >
<meta property="og:site_name" content="El Informador" >
<meta property="og:locale" content="es_VE">
<meta property="fb:app_id" content="1571453769778083">
<meta property="fb:app_id" content="1178151972248072">
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
		<section class='contenedor' id='contenedor'>
			<header class='cabezal' id='cabezal'>
			    <section class='encabezado'>
				<section class="contlogo">
				    <section class='txtlogo' id='txtlogo'>
					<h1 itemprop="name" ><a itemprop="url" href="<?php echo get_site_url();?>" class='infotit' id='infotit' >El Informador</a></h1>
				    </section>
				    <?php if ($_SESSION['wid']>=$_SESSION['pc']){?>
						<section id='tiempo' class='tiempo'></section>
				    <?php }?>
				</section>
				<section id='seclogo' class='seclogo'></section>
				<section class="menu_bar"><a class="bt-menu"><span class="icon-menu"></span></a> <?php include('buscar.php');?> <h6><a href="<?php echo get_site_url();?>" class='infotit2' id='infotit2' >El Informador</a></h6></section>
				<section class='imp impreso'><a class='impreso' href='impresos/' target='_blank' rel='Impreso'>Impreso</a></section>
				<nav itemscope itemtype="http://schema.org/ListItem" class='nav_men'>
				    <ul class='menugrupo' id='menugrupo'>
						<li> <?php include('buscar.php'); ?></li>
						<li itemprop="item" itemprop="name" id='imp_men' class='impreso'>
							<a itemprop="url" class='impreso' href='impresos/' target='_blank' rel='Impreso'>
								<span itemprop="name">Impreso</span>
							</a>
							<meta itemprop="position" content="10" >
						</li>
						<li itemprop="item" id="item-ini" class='<?php if (is_home()){echo 'mark-ini';}?>'>
							<a itemprop="url" class="cat ini" href="<?php echo get_site_url();?>">
								<span itemprop="name">Inicio</span>
							</a>
							<meta itemprop="position" content="1" >
						</li>
						<li itemprop="item" id="item-lar" class='<?php if (is_category('Lara')){echo 'mark-lar';}?>'>
							<a itemprop="url" class="cat lar" href="<?php echo $_SESSION['dircat'];?>lara">
								<span itemprop="name">Lara</span>
							</a>
							<meta itemprop="position" content="2" >
						</li>
						<li itemprop="item" id="item-nac" class='<?php if (is_category('Nacionales')){echo 'mark-nac';}?>'>
							<a itemprop="url" class="cat nac" href="<?php echo $_SESSION['dircat'];?>nacionales">
								<span itemprop="name">Nacionales</span>
							</a>
							<meta itemprop="position" content="3" >
						</li>
						<li itemprop="item" id="item-int" class='<?php if (is_category('Internacionales')){echo 'mark-int';}?>'>
							<a itemprop="url" class="cat int" href="<?php echo $_SESSION['dircat'];?>internacionales">
								<span itemprop="name">Internacionales</span>
							</a>
							<meta itemprop="position" content="4" />
						</li>
						<li itemprop="item" id="item-dep" class='<?php if (is_category('Deportes')){echo 'mark-dep';}?>'>
							<a itemprop="url" class="cat dep" href="<?php echo $_SESSION['dircat'];?>deportes">
								<span itemprop="name">Deportes</span>
							</a>
							<meta itemprop="position" content="5" />
						</li>
						<li itemprop="item" id="item-suc" class='<?php if (is_category('Sucesos')){echo 'mark-suc';}?>'>
							<a itemprop="url" class="cat suc" href="<?php echo $_SESSION['dircat'];?>sucesos">
								<span itemprop="name">Sucesos</span>
							</a>
							<meta itemprop="position" content="6" />
						</li>
						<li itemprop="item" id="item-act" class='<?php if (is_category('Actualidad')){echo 'mark-act';}?>'>
							<a itemprop="url" class="cat act" href="<?php echo $_SESSION['dircat'];?>actualidad">
								<span itemprop="name">Actualidad</span>
							</a>
							<meta itemprop="position" content="7" />
						</li>
						<li itemprop="item" id="item-eco" class='<?php if (is_category('Economía')){echo 'mark-eco';}?>'>
							<a itemprop="url" class="cat eco" href="<?php echo $_SESSION['dircat'];?>economia">
								<span itemprop="name">Econom&iacute;a</span>
							</a>
							<meta itemprop="position" content="8" />
						</li>
						<li itemprop="item" id="item-sal" class='<?php if (is_category('Salud')){echo 'mark-sal';}?>'>
							<a itemprop="url" class="cat sal" href="<?php echo $_SESSION['dircat'];?>salud">
								<span itemprop="name">Salud</span>
							</a>
							<meta itemprop="position" content="9" />
						</li>
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
