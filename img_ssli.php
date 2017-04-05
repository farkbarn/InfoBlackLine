<?php
								if (has_post_thumbnail()){
								$param=array(
										'itemprop'=>'url height width',
										'class'=>'img imgssli',
										'alt'=>get_the_title(),
										'title'=>get_the_title(),
										'src'=>wp_get_attachment_image_url(get_post_thumbnail_id(),'ssli'),
										'srcset'=>
										wp_get_attachment_image_url(get_post_thumbnail_id(),'ssli').' 690w,'.
										wp_get_attachment_image_url(get_post_thumbnail_id(),'col1').' 550w,'.
										wp_get_attachment_image_url(get_post_thumbnail_id(),'psli').' 365w,'.
										wp_get_attachment_image_url(get_post_thumbnail_id(),'col2').' 222w,'.
										wp_get_attachment_image_url(get_post_thumbnail_id(),'mlei').' 110w'
									);
								the_post_thumbnail('ssli',$param);
								}else{echo "<img class='img imgssli' alt='cargando' src='".$_SESSION['dirtem']."img/cargando_680x340.gif'>";}
?>