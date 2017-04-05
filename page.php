<?php get_header();?>
    <?php include('var.php');?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="pag" id="pag">
				    <header><h2><?php the_title(); ?></h2></header>
					<?php the_content(); endwhile; endif;?>
				</article>
			    </section>
			</section>
<?php get_footer(); ?>
