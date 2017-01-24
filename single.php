<?php get_header();?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> -->
    <?php include('var.php');?>
					<section class='nota'>
						<section class='block1'>
						    <?php //if ($_COOKIE['wscr']>=$_SESSION['ads3']){include('ads3.php');}?>
						    <?php if (have_posts()) :
							while (have_posts()) :
							    the_post(); ?>
						    <?php $_SESSION['arridpost'][]=get_the_id();?>
						    <article itemscope itemtype="http://schema.org/Article" class='col1'>
								<header itemprop="headline" class='titnot interno'>
								    <a itemprop="url" href='<?php echo get_permalink();?>'>
								    	<h2 itemprop="name" ><?php echo get_the_title();?></h2>
								    </a>
								</header>
								<section>
								    <figure class='imgnota'>
									<a itemprop="image" itemscope itemtype="http://schema.org/ImageObject" href="<?php echo get_permalink();?>">
									<?php if(in_category('carlost') || in_category('hugoc') || in_category('pablos') || in_category('custodios') || in_category('robertom')){ echo "</a>";}
									    else {include('img_col1.php');?>
									</a>
									    <?php include('redpie.php');?>
									    <?php include('fechanota.php');
									;}?>
								    </figure>
								</section>
								<span itemprop="text" >
									<?php the_content(); endwhile; endif;?>
								</span>
						    </article>
						    <?php //if ($_COOKIE['wscr']>=$_SESSION['ads4']){include('ads4.php');}?>
							<div itemprop="comment" class="fb-comments" data-href="<?php echo get_permalink();?>" data-width="100%" data-numposts="10" data-mobile="Auto-detected" data-colorscheme="dark" data-order-by="social"></div>
						    <?php wp_reset_query(); ?>
						    <?php //include('rel.php');?>
						</section>
						<?php include('col2.php');?>
					</section>
				</section>
			</section>
<?php get_footer();?>
