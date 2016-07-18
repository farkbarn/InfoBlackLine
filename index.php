<?php get_header();?>
				    <?php query_posts(array('posts_per_page'=>$_SESSION['tnot'],'post__not_in'=>$_SESSION['arridpost'],'category__not_in' => $_SESSION['no_idcathome'])); ?>
					<?php if ($_SESSION['wid']>$_SESSION['wsli']){include('principales.php');}?>
					<?php if ($_SESSION['wid']>=$_SESSION['adA']){include('adA.php');}?>
					<?php if(!$_SESSION['boolsli']){$_SESSION['tnot']=$_SESSION['tnot']-7;$_SESSION['ncol2']=11;}else{$_SESSION['boolsli']=false;};?>
					<section class='notas'>
						<section class='block1'>
<?php // INICIO NOTA COL1 ?>
						    <?php while ($_SESSION['i']<=$_SESSION['tnot']):the_post();?>
						    <?php $_SESSION['arridpost'][]=get_the_id();?>
						    <article class='col1'>
							<section>
							    <figure class='imgnota'>
								<a href="<?php echo get_permalink();?>">
								<?php include('img_col1.php');?>
								</a>
								<?php include('redpie.php');?>
								<?php include('fechanota.php')?>
							    </figure>
							</section>
							<header class='titnot'>
							    <a href='<?php echo get_permalink();?>'><h2><?php echo get_the_title();?></h2></a>
							</header>
							<p class='txtnot'><?php if ($_SESSION['wid'] < 400){echo the_excerpt_max(75);}else{echo the_excerpt_max(230);}?></p>
							<a class='rrssnot' href='<?php echo get_permalink();?>'>ver art&iacute;culo completo</a>
						    </article>
						    <?php
						    if($_SESSION['wid'] > $_SESSION['wsli']){
							if($_SESSION['i']==($_SESSION['nads']+$_SESSION['nsli']+$_SESSION['npsli']) && $_SESSION['wid'] >= $_SESSION['adB']){include('adB.php');}
							if($_SESSION['i']==(($_SESSION['nads']*2)+$_SESSION['nsli']+$_SESSION['npsli']) && $_SESSION['wid'] >= $_SESSION['adC']){include('adC.php');}
							if($_SESSION['i']==(($_SESSION['nads']*3)+$_SESSION['nsli']+$_SESSION['npsli']) && $_SESSION['wid'] >= $_SESSION['ads5']){include('ads5.php');}
						    }
						    else{
							$_SESSION['nads']=5;
							if($_SESSION['i']==($_SESSION['nads']) && $_SESSION['wid'] >= $_SESSION['adB']){include('adB.php');}
							if($_SESSION['i']==(($_SESSION['nads']*2)) && $_SESSION['wid'] >= $_SESSION['adC']){include('adC.php');}
							if($_SESSION['i']==(($_SESSION['nads']*3)) && $_SESSION['wid'] >= $_SESSION['ads5']){include('ads5.php');}
						    }
						    $_SESSION['i']++; endwhile;
						    wp_reset_query(); ?>
<?php // FIN NOTA COL1 ?>
						</section>
						<?php include('col2.php');?>
					</section>
				</section>
				<?php if ($_SESSION['wid']>=$_SESSION['tablet']){include('inferior.php');}?>
			</section>
<?php get_footer();?>
