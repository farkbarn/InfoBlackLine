					    <?php if (is_home()){?>
						<section class='widget-home'>
						    <?php if ($_SESSION['wid']>=$_SESSION['tablet']-200){include('columnistas.php');}?>
						    <?php dynamic_sidebar('Home');?>
						</section>
					    <?php } ?>
					    <?php if (is_single()){?>
					    <section class='widget-nota'>
						<?php dynamic_sidebar('Nota');?>
					    </section>
					    <?php } ?>
					    <?php if (is_category()){?>
					    <section class='widget-categoria'>
						<?php dynamic_sidebar('Categoria');?>
					    </section>
					    <?php } ?>
					    <?php if (is_search()){?>
					    <section class='widget-busqueda'>
						<?php dynamic_sidebar('Busqueda');?>
					    </section>
					    <?php } ?>
					    <section class='widget-general'>
						<?php dynamic_sidebar('Estandar');?>
					    </section>
