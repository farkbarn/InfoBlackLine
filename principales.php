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
							<?php
							if (has_post_thumbnail()){
							    $param=array(
									'class'=>'img imgpsli',
									'alt'=>get_the_title(),
									'title'=>get_the_title(),
									'srcset'=>
									    wp_get_attachment_image_url(get_post_thumbnail_id(),'psli').' 1x, '.
									    wp_get_attachment_image_url(get_post_thumbnail_id(),'psli').' 2x, '.
									    wp_get_attachment_image_url(get_post_thumbnail_id(),'psli').' 3x ',
									'sizes'=>'
									    (max-width:1000px) 800px,
									    (max-width:800px) 700px,
									    (max-width:600px) 500px,
									    (max-width:500px) 400px,
									    (max-width:400px) 300px,
									    (max-width:300px) 200px,
									    (max-width:200px) 150px,
									    (max-width:100px) 100px'
									);
							    the_post_thumbnail('psli',$param);
							}else
							{echo "<img class='img imgpsli' src='".$_SESSION['dirtem']."img/cargando_365x183.gif'>";}
							?>
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
