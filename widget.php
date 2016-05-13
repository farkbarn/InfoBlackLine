						<section class='widget-home'>
						    <?php if (is_home()){dynamic_sidebar('Home');}echo 'Home';?>
						</section>
						<section class='widget-nota'>
						    <?php if (is_single()){dynamic_sidebar('Nota');echo 'Nota';}?>
						</section>
						<section class='widget-categoria'>
						    <?php if (is_category()){dynamic_sidebar('Categoria');echo 'Categoria';}?>
						</section>
						<section class='widget-busqueda'>
						    <?php if (is_search()){dynamic_sidebar('Busqueda'); echo 'Busqueda';}?>
						</section>
						<section class='widget-general'>
						    <?php dynamic_sidebar('General');?>
						</section>
