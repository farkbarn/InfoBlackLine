<?php get_header();$idcat='-15,-1';$nnot=5;?>
				<section class='superior mxwi1'>
					<section class='principales mxwi1'>
						<section class='Slider' id='Slider'>
							<ul class='bjqs'>
							    <?php
								query_posts('cat='.$idcat.'&posts_per_page='.$nnot);
								$i=1;
								while ($i <= $nnot):the_post();
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
													    'srcset'=>wp_get_attachment_image_url(get_post_thumbnail_id().'psli').' 200w, '.wp_get_attachment_image_url(get_post_thumbnail_id().'ssli').' 400w',
													    'sizes'=>'(min-width:400px) 400px, 50vw'
													    );
												the_post_thumbnail('ssli',$param);
											    }else
											    {echo "<img class='img' src='http://ximg.es/680x340/3E000C/fff&text=Foto1++-++680+x+340'>";}?>
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
										<p class='txtnot'><?php echo get_the_excerpt();?></p>
									</article>
								</li>
							    <?php $i++; endwhile; ?>
							    <?php wp_reset_query(); ?>
							</ul>
						</section>
						<section class='Postslider' id='Postslider'>
							<?php
							    $i=1;$nnot=2;
							    query_posts('cat='.$idcat.'&posts_per_page='.$nnot);
							    while ($i <= $nnot):the_post();
							?>
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
											    'srcset'=>wp_get_attachment_image_url(get_post_thumbnail_id().'psli').' 200w, '.wp_get_attachment_image_url(get_post_thumbnail_id().'ssli').' 400w',
											    'sizes'=>'(min-width:400px) 400px, 50vw'
											    );
										the_post_thumbnail('psli',$param);
									    }else
									    {echo "<img class='img' src='http://ximg.es/680x340/3E000C/fff&text=Foto1++-++680+x+340'>";}?>
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
								<p class='txtnot'><?php echo get_the_excerpt();?></p>
							</article>
							<?php $i++; endwhile; ?>
							<?php wp_reset_query(); ?>
						</section>
					</section>
						<aside class='ads2 mxwiads6' id='ads2'>
						    <ul class='bjqs'>
							<li>
							    <aside class='C1 mxwiads6'>
								<?php //include('ads/C1.js');?>
							    </aside>
							</li>
							<li>
							    <aside class='C2 mxwiads6'>
								<?php //include('ads/C2.js');?>
							    </aside>
							</li>
						    </ul>
						</aside>
					<section class='notas'>
						<section class='block1'>							
						    <aside class='ads3 mxwiads' id='ads3'>
							<ul class='bjqs'>
							    <li>
								<aside class='D1 mxwiads'>
								    <?php //include('ads/D1.js');?>
								</aside>
							    </li>
							    <li>
								<aside class='D2 mxwiads'>
								    <?php //include('ads/D2.js');?>
								</aside>
								<aside class='D3 mxwiads'>
								    <?php //include('ads/D3.js');?>
								</aside>
							    </li>
							</ul>
						    </aside>
<!-- INICIO NOTA COL1 -->
						    <?php
							$i=1;$nnot=5;
							query_posts('cat='.$idcat.'&posts_per_page='.$nnot);
							while ($i <= $nnot):the_post();
						    ?>
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
											'srcset'=>wp_get_attachment_image_url(get_post_thumbnail_id().'psli').' 200w, '.wp_get_attachment_image_url(get_post_thumbnail_id().'ssli').' 400w',
											'sizes'=>'(min-width:400px) 400px, 50vw'
											);
									    the_post_thumbnail('psli',$param);
									}else
									{echo "<img class='img' src='http://ximg.es/680x340/3E000C/fff&text=Foto1++-++680+x+340'>";}?>
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
							    <p class='txtnot'><?php echo get_the_excerpt();?></p>
							    <a class='rrssnot colorfont5' href='<?php echo get_permalink();?>'><div class="flecha flecol5"></div>ver art&iacute;culo completo</a>
						    </article>
						    <?php $i++; endwhile; ?>
						    <?php wp_reset_query(); ?>
<!-- FIN NOTA COL1 -->
							<aside class='ads4 mxwiads' id='ads4'>
								<ul class='bjqs'>
									<li>
										<aside class='E1 mxwiads'>
										    <?php //include('ads/E1.js');?>
										</aside>
									</li>
									<li>
										<aside class='E2 mxwiads'>
										    <?php //include('ads/E2.js');?>
										</aside>
										<aside class='E3 mxwiads'>
										    <?php //include('ads/E3.js');?>
										</aside>
									</li>
								</ul>
							</aside>
<!-- INICIO NOTA COL1 -->
						    <?php
							$i=1;$nnot=5;
							query_posts('cat='.$idcat.'&posts_per_page='.$nnot);
							while ($i <= $nnot):the_post();
						    ?>
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
											'srcset'=>wp_get_attachment_image_url(get_post_thumbnail_id().'psli').' 200w, '.wp_get_attachment_image_url(get_post_thumbnail_id().'ssli').' 400w',
											'sizes'=>'(min-width:400px) 400px, 50vw'
											);
									    the_post_thumbnail('psli',$param);
									}else
									{echo "<img class='img' src='http://ximg.es/680x340/3E000C/fff&text=Foto1++-++680+x+340'>";}?>
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
							    <p class='txtnot'><?php echo get_the_excerpt();?></p>
							    <a class='rrssnot colorfont5' href='<?php echo get_permalink();?>'><div class="flecha flecol5"></div>ver art&iacute;culo completo</a>
						    </article>
						    <?php $i++; endwhile; ?>
						    <?php wp_reset_query(); ?>
<!-- FIN NOTA COL1 -->
							<aside class='ads5 mxwiads' id='ads5'>
								<ul class='bjqs'>
									<li>
										<aside class='F1 mxwiads'>
										    <?php //include('ads/F1.js');?>
										</aside>
									</li>
									<li>
										<aside class='F2 mxwiads'>
										    <?php //include('ads/F2.js');?>
										</aside>
										<aside class='F3 mxwiads'>
										    <?php //include('ads/F3.js');?>
										</aside>
									</li>
								</ul>
							</aside>
<!-- INICIO NOTA COL1 -->
						    <?php
							$i=1;$nnot=2;
							query_posts('cat='.$idcat.'&posts_per_page='.$nnot);
							while ($i <= $nnot):the_post();
						    ?>
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
											'srcset'=>wp_get_attachment_image_url(get_post_thumbnail_id().'psli').' 200w, '.wp_get_attachment_image_url(get_post_thumbnail_id().'ssli').' 400w',
											'sizes'=>'(min-width:400px) 400px, 50vw'
											);
									    the_post_thumbnail('psli',$param);
									}else
									{echo "<img class='img' src='http://ximg.es/680x340/3E000C/fff&text=Foto1++-++680+x+340'>";}?>
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
							    <p class='txtnot'><?php echo get_the_excerpt();?></p>
							    <a class='rrssnot colorfont5' href='<?php echo get_permalink();?>'><div class="flecha flecol5"></div>ver art&iacute;culo completo</a>
						    </article>
						    <?php $i++; endwhile; ?>
						    <?php wp_reset_query(); ?>
<!-- FIN NOTA COL1 -->
						</section>
						<?php include('col2.php');?>
						<section class='block3'>
							<aside class='ads8 mxwiads' id='ads8'>
								<ul class='bjqs'>
									<li>
										<aside class='I1 mxwiads'>
										    <?php //include('ads/I1.js');?>
										</aside>
									</li>
									<li>
										<aside class='I2 mxwiads'>
										    <?php //include('ads/I2.js');?>
										</aside>
									</li>
								</ul>
							</aside>
							<aside class='ads9 mxwiads' id='ads9'>
								<ul class='bjqs'>
									<li>
										<aside class='J1 mxwiads'>
										    <?php //include('ads/J1.js');?>
										</aside>
									</li>
									<li>
										<aside class='J2 mxwiads'>
										    <?php //include('ads/J2.js');?>
										</aside>
									</li>
								</ul>
							</aside>
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
							<aside class='ads10 mxwiads' id='ads10'>
								<ul class='bjqs'>
									<li><aside class='K1'><img class='img' src='http://ximg.es/250x250/10865E/fff&text=ADS++-++250+x+250' ></aside></li>
									<li><aside class='K2'><img class='img' src='http://ximg.es/250x250/10005E/fff&text=ADS++-++250+x+250' ></aside></li>
								</ul>
							</aside>
							<aside class='ads11 mxwiads' id='ads11'>
								<ul class='bjqs'>
									<li><aside class='L1'><img class='img' src='http://ximg.es/250x500/10865E/fff&text=ADS++-++250+x+500' ></aside></li>
									<li><aside class='L2'><img class='img' src='http://ximg.es/250x500/10005E/fff&text=ADS++-++250+x+500' ></aside></li>
								</ul>
							</aside>
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
