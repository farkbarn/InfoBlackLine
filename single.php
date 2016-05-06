<?php get_header();?>
    <?php include('var.php');?>
				<section class='superior'>
					<?php include('ads2.php');?>
					<section class='nota'>
						<section class='block1'>							
						    <?php if ($ads){include('ads3.php');}?>
<!-- INICIO NOTA COL1 -->
						    <?php if (have_posts()) :
							while (have_posts()) :
							    the_post(); ?>
						    <?php $arridpost[]=get_the_id();?>
						    <article class='col1'>
							<header class='titnot interno'>
							    <a href='<?php echo get_permalink();?>'><h2><?php echo get_the_title();?></h2></a>
							</header>
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
										    wp_get_attachment_image_url(get_post_thumbnail_id(),'large').' 800w, '.
										    wp_get_attachment_image_url(get_post_thumbnail_id(),'ssli').' 700w, '.
										    wp_get_attachment_image_url(get_post_thumbnail_id(),'col1').' 500w, '.
										    wp_get_attachment_image_url(get_post_thumbnail_id(),'medium').' 400w, '.
										    wp_get_attachment_image_url(get_post_thumbnail_id(),'psli').' 300w, '.
										    wp_get_attachment_image_url(get_post_thumbnail_id(),'col2').' 200w, '.
										    wp_get_attachment_image_url(get_post_thumbnail_id(),'thumbnail').' 150w, ',
										    wp_get_attachment_image_url(get_post_thumbnail_id(),'mlei').' 100w, ',
										'sizes'=>'
										    (max-width:1500px) 800px,
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
								<figcaption class='piefotnot'>
								    <section class='txtpie color2'><p class='catnot'><div class="flecha flecol1"></div><span><?php echo list_cat().' | ';?></span><?php the_time('g:i-a | d-m-y |');echo ' '.get_the_author();?></p></section>
								    <?php include('redpie.php');?>
								</figcaption>
							    </figure>
							</section>
							<?php the_content(); endwhile; endif;?>
						    </article>
						    <?php include('ads4.php');?>
						    <div class="fb-comments" data-href="<?php echo get_permalink();?>" data-width="100%" data-numposts="10" data-mobile="Auto-detected" data-colorscheme="dark" data-order-by="social"></div>
						    <?php wp_reset_query(); ?>
<!-- FIN NOTA COL1 -->
						</section>
						<?php include('col2.php');?>
						<section class='block3'>
						    <?php if ($ads){include('ads8.php');}?>
						    <?php if ($ads){include('ads9.php');}?>
						</section>
					</section>
					<aside class='col'>
					    <section class='block4'>
						<?php if ($ads){include('ads10.php');}?>
						<?php if ($ads){include('ads11.php');}?>
						<?php include('columnistas.php');?>
					    </section>
					    <section class='widget-home'>
						<?php if (!dynamic_sidebar('Nota'));?>
					    </section>
					</aside>
				</section>
			</section>
<?php get_footer();?>
