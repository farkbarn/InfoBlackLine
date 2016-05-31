<?php get_header();?>
				<section class='superior'>
				    <?php query_posts(array('posts_per_page'=>$_SESSION['tnot'],'post__not_in'=>$_SESSION['arridpost'],'category__not_in' => $_SESSION['no_idcathome'])); ?>
					<?php if ($_SESSION['wid'] > $_SESSION['wsli']){include('principales.php');}?>
					<?php if ($_SESSION['wid']>=$_SESSION['ads2']){include('ads2.php');}?>
					<section class='notas'>
						<section class='block1'>
<!-- INICIO NOTA COL1 -->
						    <?php while ($_SESSION['i']<=$_SESSION['tnot']):the_post();?>
						    <?php $_SESSION['arridpost'][]=get_the_id();?>
						    <article class='col1'>
							<section>
							    <figure class='imgnota'>
								<a href="<?php echo get_permalink();?>">
								<?php
								if (has_post_thumbnail()){
								    $param=array(
										'class'=>'img',
										'alt'=>get_the_title(),
										'title'=>get_the_title(),
										'srcset'=>
										    wp_get_attachment_image_url(get_post_thumbnail_id(),'col1').' 800w, '.
										    wp_get_attachment_image_url(get_post_thumbnail_id(),'col1').' 700w, '.
										    wp_get_attachment_image_url(get_post_thumbnail_id(),'col1').' 500w, '.
										    wp_get_attachment_image_url(get_post_thumbnail_id(),'medium').' 400w, '.
										    wp_get_attachment_image_url(get_post_thumbnail_id(),'psli').' 300w, '.
										    wp_get_attachment_image_url(get_post_thumbnail_id(),'col2').' 200w, '.
										    wp_get_attachment_image_url(get_post_thumbnail_id(),'thumbnail').' 150w, ',
										    wp_get_attachment_image_url(get_post_thumbnail_id(),'mlei').' 100w, ',
										'sizes'=>'
										    (max-width:1000px) 800px,
										    (max-width:800px) 700px,
										    (max-width:600px) 500px,
										    (max-width:500px) 400px,
										    (max-width:400px) 300px,
										    (max-width:300px) 200px,
										    (max-width:200px) 150px,
										    (max-width:100px) 100px'
										);
								    $img='col1';
								    if (($_SESSION['wid']>200)and($_SESSION['wid']<300)){$img='thumbnail';}
								    if (($_SESSION['wid']>300)and($_SESSION['wid']<400)){$img='col2';}
								    if (($_SESSION['wid']>400)and($_SESSION['wid']<500)){$img='medium';}
								    the_post_thumbnail($img,$param);
								}else
								{echo "<img class='img' src='http://ximg.es/680x340/f29f76ff/fff&text=cargando im&aacute;gen . . .'>";}
								?>
								</a>
								<?php include('redpie.php');?>
								<?php include('fechanota.php')?>
							    </figure>
							</section>
							<header class='titnot'>
							    <a href='<?php echo get_permalink();?>'><h2><?php echo get_the_title();?></h2></a>
							</header>
							<p class='txtnot'><?php if ($_SESSION['wid']<400){echo the_excerpt_max(75);}else{echo the_excerpt_max(230);}?></p>
							<a class='rrssnot colorfont5' href='<?php echo get_permalink();?>'><div class="flecha flecol5"></div>ver art&iacute;culo completo</a>
						    </article>
						    <?php if ($_SESSION['wid'] > $_SESSION['wsli']){ ?>
						    <?php if ($_SESSION['i']==($_SESSION['nsli']+$_SESSION['npsli']+$_SESSION['nads'])){if ($_SESSION['wid']>=$_SESSION['ads3']){include('ads3.php');}}?>
						    <?php if ($_SESSION['i']==($_SESSION['nsli']+$_SESSION['npsli']+($_SESSION['nads']*2)){if ($_SESSION['wid']>=$_SESSION['ads4']){include('ads4.php');}}?>
						    <?php if ($_SESSION['i']==($_SESSION['nsli']+$_SESSION['npsli']+($_SESSION['nads']*3))){if ($_SESSION['wid']>=$_SESSION['ads5']){include('ads5.php');}}?>
						    <?php }else{ $_SESSION['nads']=5; ?>
							<?php if ($_SESSION['i']==$_SESSION['nads']){if ($_SESSION['wid']>=$_SESSION['ads3']){include('ads3.php');}}?>
						    <?php if ($_SESSION['i']==(($_SESSION['nads']*2))){if ($_SESSION['wid']>=$_SESSION['ads4']){include('ads4.php');}}?>
						    <?php if ($_SESSION['i']==(($_SESSION['nads']*3))){if ($_SESSION['wid']>=$_SESSION['ads5']){include('ads5.php');}}?>
							<?php }?>
						    <?php $_SESSION['i']++; endwhile; ?>
						    <?php wp_reset_query(); ?>
<!-- FIN NOTA COL1 -->
						</section>
						<?php include('col2.php');?>
					</section>
				</section>
				<?php if ($_SESSION['wid']>=$_SESSION['tablet']){include('inferior.php');}?>
			</section>
<?php get_footer();?>
