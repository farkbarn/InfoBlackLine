<?php get_header();?>
    <?php include('var.php');$_SESSION['arridpost']=array();$_SESSION['i']=1;?>
					<section class='nota'>
						<section class='block1 block-galery'>
						    <?php while (have_posts()):the_post();?>
						    <?php $_SESSION['arridpost'][]=get_the_id();?>
						    <article class='col1'>
							<section>
							    <figure class='imgnota'>
								<a href="<?php echo get_permalink();?>"><?php include('img_col1.php');?></a>
							    </figure>
							</section>
							<header class='titnot'>
							    <a href='<?php echo get_permalink();?>'><h2><?php echo get_the_title();?></h2></a>
							</header>
							<p class='txtnot'><?php if ($_COOKIE['wscr']<400){echo the_excerpt_max(75);}else{echo the_excerpt_max(230);}?></p>
							<a class='rrssnot' href='<?php echo get_permalink();?>'>ver art&iacute;culo completo</a>
						    </article>
						    <?php $_SESSION['i']++; endwhile; wp_reset_query();?>
						    <center> <?php if(function_exists('wp_pagenavi')){wp_pagenavi();} ?></center>
						</section>
					</section>
				</section>
			</section>
<?php get_footer();?>
