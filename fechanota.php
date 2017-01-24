<?php if ((is_category())||(is_search())||(is_home())||(is_single())||(is_archive())){?>
<figcaption class='piefotnot'>
    <section class='txtpie'><h6></h6>
    <p class='catnot'>
    	<span><?php echo list_cat().' | ';?></span>
    	<?php if ($_SESSION['wid']>$_SESSION['phone']){
    		the_time('g:ia | '); echo '<span itemprop="datePublished" >'; the_time('d-m-Y');}
    		else{the_time('g:a | ').'<span itemprop="datePublished" >'.the_time('d-m-Y');}
    		echo '</span> | <span itemprop="author publisher" itemscope itemtype="http://schema.org/Person" ><span itemprop="name">'.get_the_author().'</span></span>';?></p></section>
</figcaption>
<?php }?>