<?php get_header();?>
<?php include('var.php');?>
				<section class='superior mxwi1'>
					<?php include('ads2.php');?>
					<section class='nota'>
						<section class='block1'>							
						    <?php include('ads3.php');?>
<!-- INICIO NOTA COL1 -->
						    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
										'srcset'=>wp_get_attachment_image_url(get_post_thumbnail_id().'col1').' 200w, '.wp_get_attachment_image_url(get_post_thumbnail_id().'col1').' 400w',
										'sizes'=>'(min-width:400px) 400px, 50vw'
										);
								    the_post_thumbnail('col1',$param);
								}else
								{echo "<img class='img' src='http://ximg.es/510x254/3E000C/fff&text=FOTO'>";}?>
								</a>
								<figcaption class='piefotnot'>
								    <section class='txtpie color2'><p class='catnot'><div class="flecha flecol1"></div><span><?php echo list_cat().' ';?></span><?php the_time('| g:i-a | d-m-y |');echo ' '.get_the_author();?></p></section>
								    <section class='redpie'>
									<ul>
									    <li class='tw' id='tw'><a href='#' alt='Twitter'><span class='icon-twitter3'></span></a></li>
									    <li class='fb' id='fb'><a href='#' alt='Facebook'><span class='icon-facebook3'></span></a></li>
									    <li class='gp' id='pg'><a href='#' alt='Google+'><span class='icon-google-plus3'></span></a></li>
									    <li class='in' id='in'><a href='#' alt='Instagram'><span class='icon-instagram'></span></a></li>
									</ul>
								    </section>
								</figcaption>
							    </figure>
							</section>
							<header class='titnot'>
							    <a href='<?php echo get_permalink();?>'><h2><?php echo get_the_title();?></h2></a>
							</header>
							<p class='txtnot'><?php echo the_excerpt_max(230);?></p>
							<?php the_content(); ?>
						    </article>
						    <?php include('ads4.php');?>
						    <div class="fb-comments" data-href="<?php echo get_permalink();?>" data-width="100%" data-numposts="10" data-mobile="Auto-detected" data-colorscheme="dark" data-order-by="social"></div>
						    <?php wp_reset_query(); ?>
<!-- FIN NOTA COL1 -->
						</section>
						<?php include('col2.php');?>
						<section class='block3'>
						    <?php include('ads8.php');?>
						    <?php include('ads9.php');?>
						</section>
					</section>
					<aside class='col'>
					    <section class='block4'>
						<?php include('ads10.php');?>
						<?php include('ads11.php');?>
						<?php include('columnistas.php');?>
					    </section>
					    <section class='widget-home'>
						<?php if (!dynamic_sidebar('Nota'));?>
					    </section>
					</aside>
				</section>
			</section>
<?php get_footer();?>
