<?php //session_start();?>
						<section class='block2'>
						    <section class='block3'>
<?php // INICIO NOTA COL2 ?>
							<?php
							    $j=4;
							    if(is_single()){$j=2;$_SESSION['ncol2']=8;}
							    if((is_archive()) || (is_category()) || (is_search())){$j=3;$_SESSION['ncol2']=15;}
							    if(is_category('Deportes')){
								query_posts(array('posts_per_page'=>$_SESSION['ncol2'],'post__not_in'=>$_SESSION['arridpost'],'category__not_in' => $_SESSION['SOLO-DEP'],'category__in' => '3702,6'));
							    }else{
								query_posts(array('posts_per_page'=>$_SESSION['ncol2'],'post__not_in'=>$_SESSION['arridpost'],'category__not_in' => $_SESSION['no_idcatcol2']));
							    }
							    $_SESSION['i']=1;
							    while ($_SESSION['i'] <= $_SESSION['ncol2']):the_post();
							?>
							<article itemscope itemtype="http://schema.org/Article" class='col2'>
								<figure class='imgnota'>
									<a itemprop="image" itemscope itemtype="http://schema.org/ImageObject" href="<?php echo get_permalink();?>">
									<?php include('img_col2.php');?>
									</a>
									<?php include('fechanota.php');?>
								</figure>
								<header itemprop="headline" class='titnot'>
									<a itemprop="url" href='<?php echo get_permalink();?>'>
										<h3 itemprop="name" ><?php echo get_the_title();?></h3>
									</a>
								</header>
								<p itemprop="description" class='txtnot'><?php echo the_excerpt_max(70);?></p>
								<a class='rrssnot' href='<?php echo get_permalink();?>'>ver art&iacute;culo completo</a>
							</article>
							<?php if (($_SESSION['wid']>=$_SESSION['ads6']) && ($_SESSION['i']==$j)){include('ads6.php');}?>
							<?php if (($_SESSION['wid']>=$_SESSION['ads7']) && ($_SESSION['i']==($j*2))){include('ads7.php');}?>
							<?php if (($_SESSION['wid']>=$_SESSION['ads7']) && ($_SESSION['i']==($j*3))){include('ads8.php');}?>
							<?php $_SESSION['i']++; endwhile; ?>
							<?php wp_reset_query(); ?>
<?php //FIN NOTA COL2 ?>
							<?php /* if (!(is_single())){
							    if ($_SESSION['wid']>=$_SESSION['tablet']){include('masleido.php');}
							} */ ?>
						    </section>
						    <?php include('col3.php');?>
						</section>