					<aside class='columnistas'>
					    <section class='bcolumnistas'>
						<section class='tagsec'>
						    <section class='recnar'></section>
						    <section class='recneg'></section>
						    <p class="txteti">Columnistas</p>
						</section>
						<article class='colum'>
						<?php query_posts(array('posts_per_page'=>1,'category_name' => 'carlost')); ?>
						<?php while (have_posts()):the_post();?>
						    <figure>
							<a href='<?php echo get_permalink();?>'><img class='img' alt='Carlos Tablante' src='<?php echo $_SESSION['dirtem'];?>img/carlos_tablante.jpg'></a>
							<figcaption>Carlos Tablante</figcaption>
						    </figure>
						    <a class='collink' href='<?php echo get_permalink();?>'><h3><?php echo '"'.get_the_title().'"';?></h3></a>
						<?php endwhile; wp_reset_query();?>
						</article>
						<article class='colum'>
						<?php query_posts(array('posts_per_page'=>1,'category_name' => 'hugoc')); ?>
						<?php while (have_posts()):the_post();?>
						    <figure>
							<a href='<?php echo get_permalink();?>'><img class='img' alt='Hugo Cabezas' src='<?php echo $_SESSION['dirtem'];?>img/hugo_cabezas.jpg'></a>
							<figcaption>Hugo Cabezas</figcaption>
						    </figure>
						    <a class='collink' href='<?php echo get_permalink();?>'><h3><?php echo '"'.get_the_title().'"';?></h3></a>
						<?php endwhile; wp_reset_query();?>
						</article>
						<article class='colum'>
						<?php query_posts(array('posts_per_page'=>1,'category_name' => 'pablos')); ?>
						<?php while (have_posts()):the_post();?>
						    <figure>
							<a href='<?php echo get_permalink();?>'><img class='img' alt='Pablo Sepulveda' src='<?php echo $_SESSION['dirtem'];?>img/pablo_sepulveda.jpg'></a>
							<figcaption>Pablo Sep&uacute;lveda</figcaption>
						    </figure>
						    <a class='collink' href='<?php echo get_permalink();?>'><h3><?php echo '"'.get_the_title().'"';?></h3></a>
						<?php endwhile; wp_reset_query();?>
						</article>
						<article class='colum'>
						<?php query_posts(array('posts_per_page'=>1,'category_name' => 'robertom')); ?>
						<?php while (have_posts()):the_post();?>
						    <figure>
							<a href='<?php echo get_permalink();?>'><img class='img' alt='Roberto Malaver' src='<?php echo $_SESSION['dirtem'];?>img/roberto_malaver.jpg'></a>
							<figcaption>Roberto Malaver</figcaption>
						    </figure>
						    <a class='collink' href='<?php echo get_permalink();?>'><h3><?php echo '"'.get_the_title().'"';?></h3></a>
						<?php endwhile; wp_reset_query();?>
						</article>
					    </section>
					</aside>
