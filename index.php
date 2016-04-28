<?php get_header();$idcat='-15,-1';$tnot=19;$nsli=5;$npsli=2;$nads=5;$arridpost='';?>
				<section class='superior mxwi1'>
				    <section class='principales mxwi1'>
					<section class='Slider' id='Slider'>
						<ul class='bjqs'>
						    <?php
							query_posts('cat='.$idcat.'&posts_per_page='.$tnot);
							$i=1;
							while ($i<=$nsli):the_post();
							$arridpost=$arridpost.get_the_id().',';
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
											'srcset'=>wp_get_attachment_image_url(get_post_thumbnail_id().'ssli').' 200w, '.wp_get_attachment_image_url(get_post_thumbnail_id().'ssli').' 400w',
											'sizes'=>'(min-width:400px) 400px, 50vw'
											);
									    the_post_thumbnail('ssli',$param);
									}else
									{echo "<img class='img' src='http://ximg.es/680x340/3E000C/fff&text=FOTO'>";}?>
									</a>
									<figcaption class='piefotnot'>
									    <section class='txtpie'><div class="flecha flecol2"></div><p class='catnot'><span><?php echo list_cat().' ';?></span><?php the_time('| g:i-a | d-m-y |');echo ' '.get_the_author();?></p></section>
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
					    <?php $arridpost=$arridpost.get_the_id().','; ?>
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
									'srcset'=>wp_get_attachment_image_url(get_post_thumbnail_id().'psli').' 200w, '.wp_get_attachment_image_url(get_post_thumbnail_id().'psli').' 400w',
									'sizes'=>'(min-width:400px) 400px, 50vw'
									);
							    the_post_thumbnail('psli',$param);
							}else
							{echo "<img class='img' src='http://ximg.es/360x180/3E000C/fff&text=FOTO'>";}?>
							</a>
							<figcaption class='piefotnot'>
							    <section class='txtpie'><div class="flecha flecol1"></div><p class='catnot'><span><?php echo list_cat().' ';?></span><?php the_time('| g:i-a | d-m-y |');echo ' '.get_the_author();?></p></section>
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
					    </article>
					    <?php $i++; endwhile; ?>
					</section>
				    </section>
					<?php include('ads2.php');?>
					<section class='notas'>
						<section class='block1'>							
						    <?php include('ads3.php');?>
<!-- INICIO NOTA COL1 -->
						    <?php while ($i<=$tnot):the_post(); ?>
						    <?php $arridpost=$arridpost.get_the_id().','; ?>
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
							<a class='rrssnot colorfont5' href='<?php echo get_permalink();?>'><div class="flecha flecol5"></div>ver art&iacute;culo completo</a>
						    </article>
						    <?php if ($i==($nsli+$npsli+$nads)){include('ads4.php');}?>
						    <?php if ($i==($nsli+$npsli+($nads*2))){include('ads5.php');}?>
						    <?php $i++; endwhile; ?>
						    <?php wp_reset_query(); ?>
<!-- FIN NOTA COL1 -->
						</section>
						<?php include('col2.php');?>
						<section class='block3'>
						    <?php include('ads8.php');?>
						    <?php include('ads9.php');?>
<!-- INICIO TAG LEIDO -->
						    <section class='tagsec'>
							<section class='recnar'></section>
							<section class='recneg'></section>
							<p class="txteti">Lo M&aacute;s Le&iacute;do</p>
						    </section>
<!-- FIN TAG LEIDO -->
<!-- INICIO MAS LEIDO -->
							<article class='maslei'>
							    <figure>
								    <a href='#'><img class='img' src='http://ximg.es/110x60/525252/fff&text=Foto++-++110+x+60'></a>
							    </figure>
							    <header>
								    <a href='#'><h4>T&iacute;tulo de Nota</h4></a>
							    </header>
							    <p>adipiscing elit. Duis eget metus tincidunt, porta massa vitae,</p>
							</article>
<!-- FIN MAS LEIDO -->
<!-- INICIO MAS LEIDO -->
							<article class='maslei'>
							    <figure>
								    <img class='img' src='http://ximg.es/110x60/525252/fff&text=Foto++-++110+x+60' >
							    </figure>
							    <header>
								    <h4>T&iacute;tulo de Nota</h4>
							    </header>
							    <p>adipiscing elit. Duis eget metus tincidunt, porta massa vitae,</p>
							</article>
<!-- FIN MAS LEIDO -->
<!-- INICIO MAS LEIDO -->
							<article class='maslei'>
							    <figure>
								    <img class='img' src='http://ximg.es/110x60/525252/fff&text=Foto++-++110+x+60' >
							    </figure>
							    <header>
								    <h4>T&iacute;tulo de Nota</h4>
							    </header>
							    <p>adipiscing elit. Duis eget metus tincidunt, porta massa vitae,</p>
							</article>
<!-- FIN MAS LEIDO -->
<!-- INICIO MAS LEIDO -->
							<article class='maslei'>
							    <figure>
								    <img class='img' src='http://ximg.es/110x60/525252/fff&text=Foto++-++110+x+60' >
							    </figure>
							    <header>
								    <h4>T&iacute;tulo de Nota</h4>
							    </header>
							    <p>adipiscing elit. Duis eget metus tincidunt, porta massa vitae,</p>
							</article>
<!-- FIN MAS LEIDO -->
<!-- INICIO MAS LEIDO -->
							<article class='maslei'>
							    <figure>
								    <img class='img' src='http://ximg.es/110x60/525252/fff&text=Foto++-++110+x+60' >
							    </figure>
							    <header>
								    <h4>T&iacute;tulo de Nota</h4>
							    </header>
							    <p>adipiscing elit. Duis eget metus tincidunt, porta massa vitae,</p>
							</article>
<!-- FIN MAS LEIDO -->
<!-- INICIO MAS LEIDO -->
							<article class='maslei'>
							    <figure>
								    <img class='img' src='http://ximg.es/110x60/525252/fff&text=Foto++-++110+x+60' >
							    </figure>
							    <header>
								    <h4>T&iacute;tulo de Nota</h4>
							    </header>
							    <p>adipiscing elit. Duis eget metus tincidunt, porta massa vitae,</p>
							</article>
<!-- FIN MAS LEIDO -->
<!-- INICIO MAS LEIDO -->
							<article class='maslei'>
							    <figure>
								    <img class='img' src='http://ximg.es/110x60/525252/fff&text=Foto++-++110+x+60' >
							    </figure>
							    <header>
								    <h4>T&iacute;tulo de Nota</h4>
							    </header>
							    <p>adipiscing elit. Duis eget metus tincidunt, porta massa vitae,</p>
							</article>
<!-- FIN MAS LEIDO -->
<!-- INICIO MAS LEIDO -->
							<article class='maslei'>
							    <figure>
								    <img class='img' src='http://ximg.es/110x60/525252/fff&text=Foto++-++110+x+60' >
							    </figure>
							    <header>
								    <h4>T&iacute;tulo de Nota</h4>
							    </header>
							    <p>adipiscing elit. Duis eget metus tincidunt, porta massa vitae,</p>
							</article>
<!-- FIN MAS LEIDO -->
<!-- INICIO MAS LEIDO -->
							<article class='maslei'>
							    <figure>
								    <img class='img' src='http://ximg.es/110x60/525252/fff&text=Foto++-++110+x+60' >
							    </figure>
							    <header>
								    <h4>T&iacute;tulo de Nota</h4>
							    </header>
							    <p>adipiscing elit. Duis eget metus tincidunt, porta massa vitae,</p>
							</article>
<!-- FIN MAS LEIDO -->
<!-- INICIO MAS LEIDO -->
							<article class='maslei'>
							    <figure>
								    <img class='img' src='http://ximg.es/110x60/525252/fff&text=Foto++-++110+x+60' >
							    </figure>
							    <header>
								    <h4>T&iacute;tulo de Nota</h4>
							    </header>
							    <p>adipiscing elit. Duis eget metus tincidunt, porta massa vitae,</p>
							</article>
<!-- FIN MAS LEIDO -->
						</section>
					</section>
					<aside class='col'>
						<section class='block4'>
						    <?php include('ads10.php');?>
						    <?php include('ads11.php');?>
<!-- INICIO COMUNISTA -->
						    <section class='tagsec'>
							<section class='recnar'></section>
							<section class='recneg'></section>
							<p class="txteti">Columnistas</p>
						    </section>
<!-- FIN COMUNISTA -->
<!-- INICIO COLUMNISTA -->
						    <article class='colum'>
							<figure>
							    <a href='#'><img class='img' src='http://ximg.es/260x100/525252/fff&text=Foto++-++260+x+100'></a>
							    <figcaption>Fulano de tal</figcaption>
							</figure>
						    </article>
<!-- FIN COLUMNISTA -->
<!-- INICIO COLUMNISTA -->
							<article class='colum'>
								<figure>
									<img class='img' src='http://ximg.es/260x100/525252/fff&text=Foto++-++260+x+100' >
									<figcaption>Fulano de tal</figcaption>
								</figure>
							</article>
<!-- FIN COLUMNISTA -->
<!-- INICIO COLUMNISTA -->
							<article class='colum'>
								<figure>
									<img class='img' src='http://ximg.es/260x100/525252/fff&text=Foto++-++260+x+100' >
									<figcaption>Fulano de tal</figcaption>
								</figure>
							</article>
<!-- FIN COLUMNISTA -->
<!-- INICIO COLUMNISTA -->
							<article class='colum'>
								<figure>
									<img class='img' src='http://ximg.es/260x100/525252/fff&text=Foto++-++260+x+100' >
									<figcaption>Fulano de tal</figcaption>
								</figure>
							</article>
<!-- FIN COLUMNISTA -->
<!-- INICIO COLUMNISTA -->
							<article class='colum'>
								<figure>
									<img class='img' src='http://ximg.es/260x100/525252/fff&text=Foto++-++260+x+100' >
									<figcaption>Fulano de tal</figcaption>
								</figure>
							</article>
<!-- FIN COLUMNISTA -->
			    
		
						</section>
						<section class='widget-home'>
							
						</section>



					</aside>
					
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
