<?php
								if (has_post_thumbnail()){
								$param=array(
										'class'=>'img imgcol2',
										'alt'=>get_the_title(),
										'title'=>get_the_title(),
										'src'=>wp_get_attachment_image_url(get_post_thumbnail_id(),'col2'),
										'srcset'=>
										wp_get_attachment_image_url(get_post_thumbnail_id(),'large').' 1024w,'.
										wp_get_attachment_image_url(get_post_thumbnail_id(),'medium').' 512w,'.
										wp_get_attachment_image_url(get_post_thumbnail_id(),'ssli').' 690w,'.
										wp_get_attachment_image_url(get_post_thumbnail_id(),'col1').' 550w,'.
										wp_get_attachment_image_url(get_post_thumbnail_id(),'psli').' 365w,'.
										wp_get_attachment_image_url(get_post_thumbnail_id(),'col2').' 222w,'.
										wp_get_attachment_image_url(get_post_thumbnail_id(),'mlei').' 110w'
									);
								the_post_thumbnail('col2',$param);
								}else{echo "<img class='img imgcol2' src='".$_SESSION['dirtem']."img/cargando_222x123.gif'>";}
?>