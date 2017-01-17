<?php if ((is_category())||(is_search())||(is_home())||(is_single())||(is_archive())){?>
<figcaption class='piefotnot'>
    <section class='txtpie'><h6></h6><p itemprop="author" class='catnot'><span><?php echo list_cat().' | ';?></span><?php if ($_SESSION['wid']>$_SESSION['phone']){the_time('g:ia | d-m-y |');}else{the_time('g:a | d-m-y |');}echo ' '.get_the_author();?></p></section>
</figcaption>
<?php }?>