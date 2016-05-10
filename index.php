<?php get_header();?>
<?php include('var.php');?>
<script async type="text/javascript">jQuery(document).ready(function($){$('#Slider').bjqs({'prevtext':'<span class="icon-circle-left"></span>','nexttext':'<span class="icon-circle-right"></span>','keyboardnav':true,'animtype':'fade','height':515,'width':710,'responsive':true,'showcontrols':true,'showmarkers':false,'randomstart':true,'animspeed':10000});});</script>
				<section class='superior'>
				    <?php query_posts(array('posts_per_page'=>$_SESSION['tnot'],'post__not_in'=>$arridpost,'category__not_in' => $_SESSION['no_idcathome'])); ?>
					<?php if ($_SESSION['wid'] > 1000){include('principales.php');}?>
					<?php if ($_SESSION['ads']){include('ads2.php');}?>
					<section class='notas'>
						<section class='block1'>							
						    <?php if ($_SESSION['ads']){include('ads3.php');}?>
<!-- INICIO NOTA COL1 -->
						    <?php while ($i<=$_SESSION['tnot']):the_post();?>
						    <?php $arridpost[]=get_the_id();?>
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
								    the_post_thumbnail('col1',$param);
								}else
								{echo "<img class='img' src='http://ximg.es/680x340/f29f76ff/fff&text=cargando im&aacute;gen . . .'>";}
								?>
								</a>
								<?php include('redpie.php');?>
								<figcaption class='piefotnot'>
								    <section class='txtpie color2'><p class='catnot'><div class="flecha flecol1"></div><span><?php echo list_cat().' | ';?></span><?php the_time('g:i-a | d-m-y |');echo ' '.get_the_author();?></p></section>
								</figcaption>
							    </figure>
							</section>
							<header class='titnot'>
							    <a href='<?php echo get_permalink();?>'><h2><?php echo get_the_title();?></h2></a>
							</header>
							<p class='txtnot'><?php echo the_excerpt_max(230);?></p>
							<a class='rrssnot colorfont5' href='<?php echo get_permalink();?>'><div class="flecha flecol5"></div>ver art&iacute;culo completo</a>
						    </article>
						    <?php if ($i==($_SESSION['nsli']+$_SESSION['npsli']+$nads)){if ($_SESSION['ads']){include('ads4.php');}}?>
						    <?php if ($i==($_SESSION['nsli']+$_SESSION['npsli']+($nads*2))){if ($_SESSION['ads']){include('ads5.php');}}?>
						    <?php $i++; endwhile; ?>
						    <?php wp_reset_query(); ?>
<!-- FIN NOTA COL1 -->
						</section>
						<?php include('col2.php');?>
					</section>
				</section>
				<section class='inferior'>
				    <section class='block5'>
					<section class='tagsec'>
					    <section class='recnar'></section>
					    <section class='recneg'></section>
					    <p class="txteti">Galer&iacute;a de Videos</p>
					</section>
					<section class="video_pie widget_pie">
					    <?php if (!dynamic_sidebar('Youtube'));?>
					</section>
				    </section>
				</section>
			</section>
<?php get_footer();?>
