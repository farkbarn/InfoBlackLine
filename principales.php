<section class='principales'>
					<section class='Slider' id='Slider'>
						<ul class='bjqs_'>
						    <?php
							while ($_SESSION['i']<=$_SESSION['nsli']):the_post();
							$_SESSION['arridpost'][]=get_the_id();
						    ?>
							<li class='li_sli'>
							    <article itemscope itemtype="http://schema.org/Article" class='art_sli'><h6></h6>
									<section>
									    <figure class='imgnota'>
										<a itemprop="image" itemscope itemtype="http://schema.org/ImageObject" href="<?php echo get_permalink();?>">
										<?php include('img_ssli.php'); ?>
										</a>
										<?php include('redpie.php');?>
										<?php include('fechanota.php');?>
									    </figure>
									</section>
									<header itemprop="headline" class='titnot'>
									    <a itemprop="url" href='<?php echo get_permalink();?>' rev=''>
									    	<h2 itemprop="name" ><?php echo get_the_title();?></h2>
									    </a>
									</header>
									<p itemprop="description" class='txtnot'><?php echo the_excerpt_max(280);?></p>
							    </article>
							</li>
						    <?php $_SESSION['i']++; endwhile; ?>
						</ul>
					</section>
					<section class='Postslider' id='Postslider'>
					    <?php while ($_SESSION['i']<=($_SESSION['nsli']+$_SESSION['npsli'])):the_post(); ?>
					    <?php $_SESSION['arridpost'][]=get_the_id();?>
					    <article itemscope itemtype="http://schema.org/Article" class='art_sli'><h6></h6>
							<section>
							    <figure class='imgnota'>
								<a itemprop="image" itemscope itemtype="http://schema.org/ImageObject" href="<?php echo get_permalink();?>">
								<?php include('img_psli.php'); ?>
								</a>
								<?php include('redpie.php');?>
								<?php include('fechanota.php');?>
							    </figure>
							</section>
							<header itemprop="headline" class='titnot'>
							    <a itemprop="url" href='<?php echo get_permalink();?>'>
							    	<h2 itemprop="name"><?php echo get_the_title();?></h2>
							    </a>
							</header>
					    </article>
					    <?php $_SESSION['i']++; endwhile; $_SESSION['boolsli']=true;?>
					</section>
				    </section>
