						<section class='block2'>
						    <?php include('ads6.php');?>
						    <?php include('ads7.php');?>
<!-- INICIO NOTA COL2 -->
							<?php
							    $i=1;$ncol2=16;
							    query_posts(array('posts_per_page'=>$ncol2,'post__not_in'=>array(substr($arridpost, 0, -2))));
							    while ($i <= $ncol2):the_post();
							?>
							<article class='col2'>
								<figure>
									<a href="<?php echo get_permalink();?>">
									<?php
									if (has_post_thumbnail()){
									    $param=array(
											'class'=>'img',
											'alt'=>get_the_title(),
											'title'=>get_the_title(),
											'srcset'=>wp_get_attachment_image_url(get_post_thumbnail_id().'col2').' 200w, '.wp_get_attachment_image_url(get_post_thumbnail_id().'col2').' 400w',
											'sizes'=>'(min-width:400px) 400px, 50vw'
											);
									    the_post_thumbnail('col2',$param);
									}else
									{echo "<img class='img' src='http://ximg.es/266x133/3E000C/fff&text=sin-foto'>";}?>
									</a>
									<figcaption class='piefotnot'>
										<section class='txtpie color2'><p class='catnot'><div class="flecha flecol1"></div><span><?php echo list_cat().' ';?></span><?php the_time('| g:i-a | d-m-y |');echo ' '.get_the_author();?></p></section>
									</figcaption>
								</figure>
								<header class='titnot'>
									<a href='<?php echo get_permalink();?>'><h3><?php echo get_the_title();?></h3></a>
								</header>
								<p class='txtnot'><?php echo the_excerpt_max(75);?></p>
								<a class='rrssnot colorfont5' href='<?php echo get_permalink();?>'><div class="flecha flecol5"></div>ver art&iacute;culo completo</a>
							</article>
							<?php $i++; endwhile; ?>
							<?php wp_reset_query(); ?>
<!-- FIN NOTA COL2 -->
						</section>
