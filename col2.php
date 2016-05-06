						<section class='block2'>
						    <?php if ($ads){include('ads6.php');}?>
						    <?php if ($ads){include('ads7.php');}?>
<!-- INICIO NOTA COL2 -->
							<?php
							    $i=1;$ncol2=16;
							    query_posts(array('posts_per_page'=>$ncol2,'post__not_in'=>$arridpost,'category__not_in' => $no_idcatcol2));
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
										    @media only screen and (max-width:15000px) 1500px,
										    @media only screen and (max-width:1000px) 700px,
										    @media only screen and (max-width:600px) 500px,
										    @media only screen and (max-width:500px) 400px,
										    @media only screen and (max-width:400px) 300px,
										    @media only screen and (max-width:300px) 200px,
										    @media only screen and (max-width:200px) 150px,
										    @media only screen and (max-width:100px) 100px'
										);
								    the_post_thumbnail('col2',$param);
									}else
									{echo "<img class='img' src='http://ximg.es/680x340/f29f76ff/fff&text=cargando im&aacute;gen . . .'>";}
									?>
									</a>
									<?php include('redpie.php');?>
									<figcaption class='piefotnot'>
									    <section class='txtpie color2'><p class='catnot'><span><?php echo list_cat().' | ';?></span><?php the_time('g:i-a | d-m-y |');echo ' '.get_the_author();?></p></section>
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
						<?php include('masleido.php');?>
						</section>
