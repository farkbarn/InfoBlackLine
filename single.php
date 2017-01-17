<?php get_header();?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <?php include('var.php');?>
					<section itemscope itemtype="http://schema.org/Article" class='nota'><h3></h3>
						<section class='block1'><h3></h3>
						    <?php if ($_COOKIE['wscr']>=$_SESSION['ads3']){include('ads3.php');}?>
						    <?php if (have_posts()) :
							while (have_posts()) :
							    the_post(); ?>
						    <?php $_SESSION['arridpost'][]=get_the_id();?>
						    <article itemprop="text" class='col1'><h3></h3>
								<header class='titnot interno'>
								    <a itemprop="url" href='<?php echo get_permalink();?>'>
								    	<h2 itemprop="name"><?php echo get_the_title();?></h2>
								    </a>
								</header>
								<section>
								    <figure class='imgnota'>
									<a href="<?php echo get_permalink();?>">
									<?php if(in_category('carlost') || in_category('hugoc') || in_category('pablos') || in_category('custodios') || in_category('robertom')){ echo "</a>";}
									    else {include('img_col1.php');?>
									</a>
									    <?php include('redpie.php');?>
									    <?php include('fechanota.php');
									;}?>
								    </figure>
								</section>
								<?php the_content(); endwhile; endif;?>
						    </article>
						    <?php if ($_COOKIE['wscr']>=$_SESSION['ads4']){include('ads4.php');}?>
							<div class="fb-comments" data-href="<?php echo get_permalink();?>" data-width="100%" data-numposts="10" data-mobile="Auto-detected" data-colorscheme="dark" data-order-by="social"></div>
						    <?php wp_reset_query(); ?>
						    <?php //include('rel.php');?>
						</section>
						<?php include('col2.php');?>
					</section>
				</section>
			</section>
<?php get_footer();?>
