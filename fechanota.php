<?php if ((is_category())||(is_search())||(is_single())){?>
<figcaption class='piefotnot'>
    <section class='txtpie'><p class='catnot'><span><?php echo list_cat().' | ';?></span><?php if ($_SESSION['wid']>$_SESSION['phone']){the_time('g:i-a | d-m-y |');}else{the_time('g:a | d-m-y |');}echo ' '.get_the_author();?></p></section>
</figcaption>
<?php }?>
<?php if (is_home()){?>
<figcaption class='piefotnot'>
    <section class='txtpie'><p class='catnot'><span><?php echo list_cat().' | ';?></span><?php if ($_SESSION['wid']>$_SESSION['phone']){the_time('g:ia | d-m-y |');}else{the_time('g:a | d-m-y |');}echo ' '.get_the_author();?></p></section>
</figcaption>
<?php }?>
