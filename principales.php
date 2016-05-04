				    <section class='principales'>
					<section class='Slider' id='Slider'>
						<ul class='bjqs'>
						    <?php 
							$i=1;
							while ($i<=$nsli):the_post();
							$arridpost[]=get_the_id();
						    ?>
							<li class='li_sli'>
							    <article class='art_sli'>
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
											    (max-width:1000px) 800px,
											    (max-width:800px) 700px,
											    (max-width:600px) 500px,
											    (max-width:500px) 400px,
											    (max-width:400px) 300px,
											    (max-width:300px) 200px,
											    (max-width:200px) 150px,
											    (max-width:1000px) 100px'
											);
									    the_post_thumbnail('ssli',$param);
									}else
									{echo "<img class='img' src='http://ximg.es/680x340/f29f76ff/fff&text=cargando imagen . . .'>";}
									?>
									</a>
									<figcaption class='piefotnot'>
									    <section class='txtpie'><div class="flecha flecol2"></div><p class='catnot'><span><?php echo list_cat().' ';?></span><?php the_time('| g:i-a | d-m-y |');echo ' '.get_the_author();?></p></section>
									</figcaption>
								    </figure>
								</section>
								<header class='titnot'>
								    <a href='<?php echo get_permalink();?>' rev=''><h2><?php echo get_the_title();?></h2></a>
								</header>
								<p class='txtnot'><?php echo the_excerpt_max(280);?></p>
							    </article>
							</li>
						    <?php $i++; endwhile; ?>
						</ul>
					</section>
					<section class='Postslider' id='Postslider'>
					    <?php while ($i<=($nsli+$npsli)):the_post(); ?>
					    <?php $arridpost[]=get_the_id();?>
					    <article class='art_sli'>
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
									    (max-width:1000px) 800px,
									    (max-width:800px) 700px,
									    (max-width:600px) 500px,
									    (max-width:500px) 400px,
									    (max-width:400px) 300px,
									    (max-width:300px) 200px,
									    (max-width:200px) 150px,
									    (max-width:100px) 100px'
									);
							    the_post_thumbnail('psli',$param);
							}else
							{echo "<img class='img' src='http://ximg.es/680x340/f29f76ff/fff&text=cargando imagen . . .'>";}
							?>
							</a>
							<figcaption class='piefotnot'>
							    <section class='txtpie'><div class="flecha flecol1"></div><p class='catnot'><span><?php echo list_cat().' ';?></span><?php the_time('| g:i-a | d-m-y |');echo ' '.get_the_author();?></p></section>
								<section class='redpie'>
								    <ul>
									<li class='tw' id='tw'><a alt='Twitter' href="javascript:void(0);" onclick='<?php echo 'window.open("https://twitter.com/intent/tweet?url='; echo bitly().'&text='.get_the_title().'&related=&via=elinformadorve&original_referer='.get_permalink(); ?>","ventanacompartir", "toolbar=0, status=0, width=650, height=450");'><span class='icon-twitter3'></span></a></li>
									<li class='fb' id='fb'><a alt='Facebook' href="javascript:void(0);" onclick='<?php echo 'window.open("https://www.facebook.com/sharer.php?u='.get_permalink().'?t='.get_the_title(); ?>","ventanacompartir", "toolbar=0, status=0, width=650, height=450");'><span class='icon-facebook3'></span></a></li>
									<li class='fb' id='fb'><a alt='Facebook' href="javascript:void(0);" onclick='<?php echo 'window.open("https://www.facebook.com/sharer/sharer.php?sdk=joey&u='.get_permalink().'&t='.get_the_title().'&display=popup&ref=web&src=button'; ?>","ventanacompartir", "toolbar=0, status=0, width=650, height=450");'><span class='icon-facebook3'></span></a></li>
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
					    </article>
					    <?php $i++; endwhile; ?>
					</section>
				    </section>
