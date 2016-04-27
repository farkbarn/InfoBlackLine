<?php
// AGREGANDO PARAMETROS DE IMAGEN
//the_post_thumbnail($size,$attr);
add_theme_support('post-thumbnails');
add_image_size('ssli', 680, 340, true);
add_image_size('psli', 360, 180, true);
add_image_size('col1', 510, 254, true);
add_image_size('col2', 266, 133, true);
add_image_size('mlei', 110, 60, true);

//include(TEMPLATEPATH.'/includes/images.php');

// AGREGANDO WIDGET
register_sidebar(array(
    'name'=>'Youtube',
    'id'=>'youtube',
    'description'=>'Canal Youtube El InformadorVE',
    'class'=>'widget',
    'before_widget'=>'<section class="widget">',
    'after_widget'=>'</section>',
));


// LISTAR CATEGORIAS 
function list_cat(){
$categorias = get_the_category();
$separador = ' | ';
$output = '';
if ( ! empty( $categorias ) ) {
    foreach( $categorias as $category ) {
	if ($category->cat_name=='DESTACADA' ||
	    $category->cat_name=='COLUMNA1A' ||
	    $category->cat_name=='' ||
	    $category->cat_name=='' ||
	    $category->cat_name=='' ){
	}
	else
	{
        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="categoria '.esc_html( $category->name ).'" title="' . esc_attr( sprintf( __( 'click para %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separador;
	}
    }
    return trim( $output, $separador );
}
}

//Contador de caracteres en extracto
function excerpt_count_js(){
      echo '<script>jQuery(document).ready(function(){
jQuery("#postexcerpt .handlediv").after("<div style=\"position:absolute;top:0px;right:30px;color:#666;\"><small></small><input type=\"text\" value=\"0\" maxlength=\"3\" size=\"3\" id=\"excerpt_counter\" readonly=\"\" style=\"background:#fff;\"> <small>caracter(es).</small></div>");
     jQuery("#excerpt_counter").val(jQuery("#excerpt").val().length);
     jQuery("#excerpt").keyup( function() {
     jQuery("#excerpt_counter").val(jQuery("#excerpt").val().length);
   });
});</script>';
}
add_action( 'admin_head-post.php', 'excerpt_count_js');
add_action( 'admin_head-post-new.php', 'excerpt_count_js');

//Contador de caracteres en titulo
function titulo_contador_js(){
      echo '<script>jQuery(document).ready(function(){
jQuery("#titlewrap").after("<div style=\"position:absolute;top:-32px;right:0px;color:#666;\"><small></small><input type=\"text\" value=\"0\" maxlength=\"3\" size=\"3\" id=\"tit_counter\" readonly=\"\" style=\"background:#fff;\"> <small>Máximo 90 caracter(es).</small></div>");
	jQuery("#tit_counter").val(jQuery("#title").val().length);
	jQuery("#title").keyup( function() {
	jQuery("#tit_counter").val(jQuery("#title").val().length);
    });
});</script>';}
add_action('admin_head-post.php','titulo_contador_js');
add_action('admin_head-post-new.php','titulo_contador_js');

// PERSONALIZAR EL ADMIN LOGIN
function style_adm() { ?>
    <style type="text/css">
	html{background:none;}
        .login h1 a {background-image:url(/wp-content/themes/nueva/img/Log_El_Informador.png);border-radius:25px 0px;border:1px solid white;box-shadow:10px 10px 8px #000;}
	.login form{border-radius:50px 10px;border:solid rgba(255, 108, 0, 0.42);box-shadow:10px 10px 8px #000;background-color:#A8A8A8;}
	.login form .input, .login form input[type="checkbox"], .login input[type="text"]{border-radius:20px 5px;font-style:italic;}
	body{background:url(/wp-content/themes/InfoBlackLine/img/overlay.png);font-size:18px;font-style:italic;}
	.login label{color:white;font-size:22px;font-style:italic;}
	.wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large{border-radius:15px 0;border-color:-moz-use-text-color;}
	.login #login_error {visibility: hidden;}
	.login .message{border-radius: 25px 0;}
	#title{width:400px;}
	.column-title{width:400px;}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'style_adm' );

/*ELIMINAR NOTIFICACION DE ACTUALIZACION PARA NO ADM*/
global $user_login;
get_currentuserinfo();
if ($user_login !== "admin") {
add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );}

// UPDATE TEMA DESDE WP
function github_check_update( $transient ) {
$usergithub=farkbarn;
$ramastable=master;
    if ( empty( $transient->checked ) ) {
        return $transient;
    }
    $theme_data = wp_get_theme(wp_get_theme()->template);
    $theme_slug = $theme_data->get_template();
    $theme_uri_slug = preg_replace('/-'.$ramastable.'$/', '', $theme_slug);
   $remote_version = '0.0.0';
   $style_css = wp_remote_get("https://raw.githubusercontent.com/".$usergithub."/".$theme_uri_slug."/".$ramastable."/style.css")['body'];
   if ( preg_match( '/^[ \t\/*#@]*' . preg_quote( 'Version', '/' ) . ':(.*)$/mi', $style_css, $match ) && $match[1] )
       $remote_version = _cleanup_header_comment( $match[1] );
   if (version_compare($theme_data->version, $remote_version, '<')) {
       $transient->response[$theme_slug] = array(
           'theme'       => $theme_slug,
           'new_version' => $remote_version,
           'url'         => 'https://github.com/'.$usergithub.'/'.$theme_uri_slug,
           'package'     => 'https://github.com/'.$usergithub.'/'.$theme_uri_slug.'/archive/'.$ramastable.'.zip',
       );
   }
   return $transient;
}
add_filter( 'pre_set_site_transient_update_themes', 'github_check_update' );
//Cambiar el pie de pagina del panel de Administración
function change_footer_admin() {echo '&copy;2016 Copyright EL INFORMADOR. Todos los derechos reservados - Web creada por <a href="http://www.elinformador.com.ve">El Informador</a>';}
add_filter('admin_footer_text', 'change_footer_admin');
//ELIMINAR EJECUCION DE CODIGO HTML EN COMMENTS
add_filter('pre_comment_content', 'wp_specialchars');
//omitir info error login
add_filter('login_errors',create_function('$a', "return null;"));
// REMOVER GENERADOR DE META
remove_action('wp_head', 'wp_generator');
//remove_action('wp_head', 'rsd_link');
//remove_action('wp_head', 'wlwmanifest_link');
//remove_action('wp_head', 'index_rel_link');
//remove_action('wp_head', 'parent_post_rel_link', 10, 0);
//remove_action('wp_head', 'start_post_rel_link', 10, 0);
//remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
?>
