<?php get_header();?>
    <?php include('var.php');$_SESSION['arridpost']=array();$_SESSION['i']=1;?>
					<section class='nota'>
						<section class='block1'>							
						    <?php if ($_COOKIE['wscr']>=$_SESSION['ads3']){include('ads3.php');}?>
<!-- INICIO NOTA COL1 -->
						    <?php while (have_posts()):the_post();?>
						    <?php $_SESSION['arridpost'][]=get_the_id();?>
						    <article class='col1'>
							<section>
							    <figure class='imgnota'>
								<a href="<?php echo get_permalink();?>">
								<?php
									include('img_col1.php');
								?>
								</a>
								<?php include('redpie.php');?>
								<?php include('fechanota.php');?>
							    </figure>
							</section>
							<header class='titnot'>
							    <a href='<?php echo get_permalink();?>'><h2><?php echo get_the_title();?></h2></a>
							</header>
							<p class='txtnot'><?php if ($_COOKIE['wscr']<400){echo the_excerpt_max(75);}else{echo the_excerpt_max(230);}?></p>
							<a class='rrssnot' href='<?php echo get_permalink();?>'>ver art&iacute;culo completo</a>
						    </article>
						    <?php if ($_SESSION['i']==($_SESSION['nads'])){if ($_COOKIE['wscr']>=$_SESSION['ads4']){include('ads4.php');}}?>
						    <?php if ($_SESSION['i']==($_SESSION['nads']*2)){if ($_COOKIE['wscr']>=$_SESSION['ads5']){include('ads5.php');}}?>
						    <?php $_SESSION['i']++; endwhile; wp_reset_query();?>
						    <center> <?php if(function_exists('wp_pagenavi')){wp_pagenavi();} ?></center>
<!-- FIN NOTA COL1 -->
						</section>
						<?php include('col2.php');?>
					</section>
				</section>
			</section>
<?php get_footer();?>
