						<section class='widget-home'>
						    <?php if (is_home()){get_sidebar('Home');}?>
						</section>
						<section class='widget-home'>
						    <?php if (is_single()){get_sidebar('Nota');}?>
						</section>
						<section class='widget-home'>
						    <?php if (is_category()){get_sidebar('Categoria');}?>
						</section>
						<section class='widget-home'>
						    <?php if (is_search()){get_sidebar('Busqueda');}?>
						</section>
