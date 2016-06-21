<?php 
								    if (has_post_thumbnail()){
									$param=array(
										    'class'=>'img imgcol1',
										    'alt'=>get_the_title(),
										    'title'=>get_the_title(),
										    'src'=>wp_get_attachment_image_url(get_post_thumbnail_id(),'col1'),
										    'srcset'=>
											wp_get_attachment_image_url(get_post_thumbnail_id(),'col1').' 1x, '.
											wp_get_attachment_image_url(get_post_thumbnail_id(),'col1').' 2x, '.
											wp_get_attachment_image_url(get_post_thumbnail_id(),'col1').' 3x ',
										    'sizes'=>'
											(max-width:1500px) 800px,
											(max-width:800px) 700px,
											(max-width:600px) 500px,
											(max-width:500px) 400px,
											(max-width:400px) 300px,
											(max-width:300px) 200px,
											(max-width:200px) 150px,
											(max-width:100px) 100px'
										    );
									the_post_thumbnail('col1',$param);
								    }else{echo "<img class='img imgcol1' src='".$_SESSION['dirtem']."img/cargando_550x274.gif'>";}
?>
