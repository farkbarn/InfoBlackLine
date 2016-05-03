									if (has_post_thumbnail()){
									    $param=array(
											'class'=>'img',
											'alt'=>get_the_title(),
											'title'=>get_the_title(),
											'srcset'=>
											    wp_get_attachment_image_url(get_post_thumbnail_id(),'large').' 800w, '.
											    wp_get_attachment_image_url(get_post_thumbnail_id(),'ssli').' 700w, '.
											    wp_get_attachment_image_url(get_post_thumbnail_id(),'col1').' 500w, '.
											    wp_get_attachment_image_url(get_post_thumbnail_id(),'medium').' 400w, '.
											    wp_get_attachment_image_url(get_post_thumbnail_id(),'psli').' 300w, '.
											    wp_get_attachment_image_url(get_post_thumbnail_id(),'col2').' 200w, '.
											    wp_get_attachment_image_url(get_post_thumbnail_id(),'thumbnail').' 150w, ',
											    wp_get_attachment_image_url(get_post_thumbnail_id(),'mlei').' 100w, ',
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
									    the_post_thumbnail('ssli',$param);
									}else
									{echo "<img class='img' src='http://ximg.es/680x340/f29f76ff/fff&text=cargando imagen . . .'>";}?>
