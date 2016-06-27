<section class='principales'>
					<section class='Slider' id='Slider'>
						<ul class='bjqs'>
						    <?php
							while ($_SESSION['i']<=$_SESSION['nsli']):the_post();
							$_SESSION['arridpost'][]=get_the_id();
						    ?>
							<li class='li_sli'>
							    <article class='art_sli'>
								<section>
								    <figure class='imgnota'>
									<a href="<?php echo get_permalink();?>">
									<?php include('img_ssli.php'); ?>
									</a>
									<?php include('redpie.php');?>
									<?php include('fechanota.php');?>
								    </figure>
								</section>
								<header class='titnot'>
								    <a href='<?php echo get_permalink();?>' rev=''><h2><?php echo get_the_title();?></h2></a>
								</header>
								<p class='txtnot'><?php echo the_excerpt_max(280);?></p>
							    </article>
							</li>
						    <?php $_SESSION['i']++; endwhile; ?>
						</ul>
					</section>
					<section class='Postslider' id='Postslider'>
					    <?php while ($_SESSION['i']<=($_SESSION['nsli']+$_SESSION['npsli'])):the_post(); ?>
					    <?php $_SESSION['arridpost'][]=get_the_id();?>
					    <article class='art_sli'>
						<section>
						    <figure class='imgnota'>
							<a href="<?php echo get_permalink();?>">
							<?php include('img_psli.php'); ?>
							</a>
							<?php include('redpie.php');?>
							<?php include('fechanota.php');?>
						    </figure>
						</section>
						<header class='titnot'>
						    <a href='<?php echo get_permalink();?>'><h2><?php echo get_the_title();?></h2></a>
						</header>
					    </article>
					    <?php $_SESSION['i']++; endwhile; $_SESSION['boolsli']=true;?>
					</section>
				    </section>
