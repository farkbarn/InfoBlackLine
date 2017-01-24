<?php if ((is_category())||(is_search())||(is_home())||(is_single())||(is_archive())){?>
<figcaption class='piefotnot'>
    <section class='txtpie'><h6></h6><p class='catnot'><span><?php echo list_cat().' | ';?></span><span itemprop="datePublished"><?php if ($_SESSION['wid']>$_SESSION['phone']){the_time('g:ia | d-m-y |');}else{the_time('g:a | d-m-y |');}echo '</span><span itemprop="author" >'.get_the_author().'</span>';?></p></section>
</figcaption>
<?php }?>