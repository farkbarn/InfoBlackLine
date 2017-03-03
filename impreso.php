
<?php /* Template Name: impreso */ ?>

<?php get_header();?>

<?php
$dir='./impreso/';
$files= scandir($dir);
?>
<?php include('var.php');?>
			<section class="imp_shap">
			</sectio>
<?php
echo  '<style>
ul.ulimpr{display:inline-block;text-align:center; margin:0 auto;width:100%;}
.liimpr{display:inline-block;text-align:center;background-color:#B0B0B0;margin:20px;max-width:250px;}
.imgimpr{width:100%;height:250px;max-width:200px;margin:10px 0;}
.impresof{color:white; font-weight:bold;line-height:2em; padding:10px; background-color:#F15A24;margin:20px;
			display:inline-block;}
</style>';
echo '<ul class="ulimpr">';
	$i=0;
	foreach ($files as &$val) {
		if (($val === '.') || ($val === '..') || (true === is_dir($val)) || ('pdf' <> (pathinfo($val)['extension'])) ) {continue;}
		else {
echo '<li class="liimpr"><img class="imgimpr" src="../impreso/'.substr($val,0,-4).'.jpg"><a target="_blank" class="impresof" href="../impreso/'.urlencode($val).'" title="'.htmlspecialchars(substr($val,0,-4)).'" >'.htmlspecialchars(substr($val,0,-4)).'</a></li>';
		}
	}
echo '</ul>';

?>

<a href="" title=""></a>
			    </section>
			</section>
<?php get_footer(); ?>
