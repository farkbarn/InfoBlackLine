<?php /* Template Name: impreso */
get_header();

$dir='./impreso/';
$files= scandir($dir);
include('var.php');
?>
	<section class="imp_shap"></section>
<?php
echo  '<style>
ul.ulimpr{display:inline-block;text-align:center; margin:0 auto;width:100%;text-transform:uppercase;}
.liimpr{display:inline-block;text-align:center;margin:20px;max-width:250px;border:1px solid #F15A24;}
.imgimpr{width:100%;height:250px;max-width:200px;margin:10px 0 0 0;}
.impresof{color:white; font-weight:bold;line-height:2em; padding:10px; background-color:#F15A24;margin: 0;
			display:inline-block; width:100%;}
</style>';
echo '<ul class="ulimpr">';
	$i=0;
	foreach ($files as &$val) {
		if (($val === '.') || ($val === '..') || (true === is_dir($val)) || ('pdf' <> (pathinfo($val)['extension'])) ) {continue;}
		else {
echo '<li class="liimpr">
			<a target="_blank" href="../impreso/'.urlencode($val).'" title="'.htmlspecialchars(substr($val,0,-4)).'" >
				<img class="imgimpr" src="../impreso/'.substr($val,0,-4).'.jpg">
				<span class="impresof">'.htmlspecialchars(substr($val,0,-4)).'</span>
			</a>
		</li>';
		}
	}
echo '</ul>';

get_footer();
?>
