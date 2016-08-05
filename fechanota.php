<?php if ((is_category())||(is_search())||(is_home())||(is_single())||(is_archive())){?>
<figcaption class='piefotnot'>
    <section class='txtpie'><p class='catnot'><span><?php echo list_cat().' | ';?></span><?php if ($_SESSION['wid']>$_SESSION['phone']){the_time('g:ia | d-m-y |');}else{the_time('g:a | d-m-y |');}?>
    	<a href='<?php echo 'https://twitter.com/'.get_the_author_meta('perfil_twitter'); ?>' target='_blank'>
    	<?php echo ' '.get_the_author();?></a></p></section>
</figcaption>
<?php }?>